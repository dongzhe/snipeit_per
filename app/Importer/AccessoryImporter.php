<?php

namespace App\Importer;

use App\Helpers\Helper;
use App\Models\Accessory;

class AccessoryImporter extends ItemImporter
{
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    protected function handle($row)
    {
        parent::handle($row); // TODO: Change the autogenerated stub
        $this->createAccessoryIfNotExists();
    }

    /**
     * Create an accessory if a duplicate does not exist
     *
     * @author Daniel Melzter
     * @since 3.0
     */
    public function createAccessoryIfNotExists()
    {
        $accessory = Accessory::where('name', $this->item['name'])->first();
        if ($accessory) {
            if (!$this->updating) {
                $this->log('A matching Accessory ' . $this->item["name"] . ' already exists.  ');
                return;
            }

            $this->log('Updating Accessory');
            $accessory->update($this->sanitizeItemForUpdating($accessory));
            $accessory->save();
            return;
        }
        $this->log("No Matching Accessory, Creating a new one");
        $accessory = new Accessory();
        $accessory->fill($this->sanitizeItemForStoring($accessory));

        if ($accessory->save()) {
            $accessory->logCreate('Imported using CSV Importer');
            $this->log('Accessory ' . $this->item["name"] . ' was created');
            return;
        }
        $this->logError($accessory, 'Accessory');
    }
}
