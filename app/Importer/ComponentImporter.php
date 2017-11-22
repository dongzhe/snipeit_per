<?php

namespace App\Importer;

use App\Models\Asset;
use App\Models\Component;

class ComponentImporter extends ItemImporter
{
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    protected function handle($row)
    {
        parent::handle($row);
        $this->createComponentIfNotExists();
    }

    /**
     * Create a component if a duplicate does not exist.
     *
     * @author Daniel Melzter
     * @since 3.0
     */
    public function createComponentIfNotExists()
    {
        $component = null;
        $editingComponent = false;
        $this->log('Creating Component');
        $component = Component::where('name', $this->item['name']);

        if ($component) {
            $editingComponent = true;
            $this->log('A matching Component '.$this->item['name'].' already exists.  ');
            if (! $this->updating) {
                $this->log('Skipping Component');

                return;
            }
            $this->log('Updating Component');
            $component = $this->components[$componentId];
            $component->update($this->sanitizeItemFor($component));
            $component->save();

            return;
        }
        $this->log('No matching component, creating one');
        $component = new Component;
        $component->fill($$this->sanitizeItemForStoring($component));

        if ($component->save()) {
            $component->logCreate('Imported using CSV Importer');
            $this->log('Component '.$this->item['name'].' was created');

            // If we have an asset tag, checkout to that asset.
            if (isset($this->item['asset_tag']) && ($asset = Asset::where('asset_tag', $this->item['asset_tag'])->first())) {
                $component->assets()->attach($component->id, [
                    'component_id' => $component->id,
                    'user_id' => $this->user_id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'assigned_qty' => 1, // Only assign the first one to the asset
                    'asset_id' => $asset->id,
                ]);
            }

            return;
        }
        $this->logError($component, 'Component');
    }
}
