<?php

use Illuminate\Support\Facades\Auth;

class ApiAssetsCest
{
    protected $faker;
    protected $user;

    public function _before(ApiTester $I)
    {
        $this->faker = \Faker\Factory::create();
        $this->user = \App\Models\User::find(1);

        $I->amBearerAuthenticated($I->getToken($this->user));
    }

    /** @test */
    public function indexAssets(ApiTester $I)
    {
        $I->wantTo('Get a list of assets');

        // setup
        $assets = factory(\App\Models\Asset::class, 'asset', 10)->create();

        // call
        $I->sendGET('/hardware');
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);

        $response = json_decode($I->grabResponse());

        // sample verify
        $asset = $assets->random();

        $I->seeResponseContainsJson([
            'id' => (int) $asset->id,
            'name' => e($asset->name),
            'asset_tag' => e($asset->asset_tag),
            'serial' => e($asset->serial),
            'model' => ($asset->model) ? [
                'id' => (int) $asset->model->id,
                'name'=> e($asset->model->name)
            ] : null,
            'model_number' => ($asset->model) ? e($asset->model->model_number) : null,
            'status_label' => ($asset->assetstatus) ? [
                'id' => (int) $asset->assetstatus->id,
                'name'=> e($asset->assetstatus->name)
            ] : null,
            'category' => ($asset->model->category) ? [
                'id' => (int) $asset->model->category->id,
                'name'=> e($asset->model->category->name)
            ]  : null,
            'manufacturer' => ($asset->model->manufacturer) ? [
                'id' => (int) $asset->model->manufacturer->id,
                'name'=> e($asset->model->manufacturer->name)
            ] : null,
            'notes' => e($asset->notes),
            'order_number' => e($asset->order_number),
            'company' => ($asset->company) ? [
                'id' => (int) $asset->company->id,
                'name'=> e($asset->company->name)
            ] : null,
            'location' => ($asset->assetLoc) ? [
                'id' => (int) $asset->assetLoc->id,
                'name'=> e($asset->assetLoc->name)
            ]  : null,
            'rtd_location' => ($asset->defaultLoc) ? [
                'id' => (int) $asset->defaultLoc->id,
                'name'=> e($asset->defaultLoc->name)
            ]  : null,
            'image' => ($asset->getImageUrl()) ? $asset->getImageUrl() : null,
            'assigned_to' => ($asset->assigneduser) ? [
                'id' => (int) $asset->assigneduser->id,
                'name' => e($asset->assigneduser->getFullNameAttribute()),
                'first_name'=> e($asset->assigneduser->first_name),
                'last_name'=> e($asset->assigneduser->last_name)
            ]  : null,
            'warranty' =>  ($asset->warranty_months > 0) ? e($asset->warranty_months . ' ' . trans('admin/hardware/form.months')) : null,
            'warranty_expires' => ($asset->warranty_months > 0) ?  [
                'datetime' => $asset->created_at->format('Y-m-d'),
                'formatted' => $asset->created_at->format('Y-m-d'),
            ] : null,
            // 'created_at' => ($asset->created_at) ? [
            //     'datetime' => $asset->created_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->created_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'updated_at' => ($asset->updated_at) ? [
            //     'datetime' => $asset->updated_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->updated_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'purchase_date' => ($asset->purchase_date) ? [
            //     'datetime' => $asset->purchase_date->format('Y-m-d'),
            //     'formatted' => $asset->purchase_date->format('Y-m-d'),
            // ] : null,
            // 'last_checkout' => ($asset->last_checkout) ? [
            //     'datetime' => $asset->last_checkout->format('Y-m-d'),
            //     'formatted' => $asset->last_checkout->format('Y-m-d'),
            // ] : null,
            // 'expected_checkin' => ($asset->created_at) ? [
            //     'date' => $asset->created_at->format('Y-m-d'),
            //     'formatted' => $asset->created_at->format('Y-m-d'),
            // ] : null,
            // 'purchase_cost' => (float) $asset->purchase_cost,
            'user_can_checkout' => (bool) $asset->availableForCheckout(),
            'available_actions' => [
                'checkout' => (bool) Gate::allows('checkout', Asset::class),
                'checkin' => (bool) Gate::allows('checkin', Asset::class),
                'update' => (bool) Gate::allows('update', Asset::class),
                'delete' => (bool) Gate::allows('delete', Asset::class),
            ],
        ]);
    }

    /** @test */
    public function createAsset(ApiTester $I, $scenario)
    {
        $I->wantTo('Create a new asset');

        $temp_asset = factory(\App\Models\Asset::class, 'asset')->make();

        // setup
        $data = [
            'asset_tag' => $temp_asset->tag,
            'assigned_to' => $temp_asset->assigned_to,
            'company_id' => $temp_asset->company->id,
            'image' => $temp_asset->image,
            'model_id' => $temp_asset->model_id,
            'name' => $temp_asset->name,
            'notes' => $temp_asset->notes,
            'purchase_cost' => $temp_asset->purchase_cost,
            'purchase_date' => $temp_asset->purchase_date,
            'rtd_location_id' => $temp_asset->rtd_location_id,
            'serial' => $temp_asset->serial,
            'status_id' => $temp_asset->status_id,
            'supplier_id' => $temp_asset->supplier_id,
            'warranty_months' => $temp_asset->warranty_months,
        ];

        // $scenario->incomplete('When I POST to /hardware i am redirected to html login page 😰');
        // create
        $I->sendPOST('/hardware', $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);

    }

    /** @test */
    public function updateAssetWithPatch(ApiTester $I, $scenario)
    {
        $I->wantTo('Update an asset with PATCH');

        // create and store an asset
        $asset = factory(\App\Models\Asset::class, 'asset')->create();
        $I->assertInstanceOf(\App\Models\Asset::class, $asset);

        // create a temporary asset to grab new data
        $temp_asset = factory(\App\Models\Asset::class, 'asset')->make();
        $data = [
            'asset_tag' => $temp_asset->tag,
            'assigned_to' => $temp_asset->assigned_to,
            'company_id' => $temp_asset->company->id,
            'image' => $temp_asset->image,
            'model_id' => $temp_asset->model_id,
            'name' => $temp_asset->name,
            'notes' => $temp_asset->notes,
            'purchase_cost' => $temp_asset->purchase_cost,
            'purchase_date' => $temp_asset->purchase_date->format('Y-m-d'),
            'rtd_location_id' => $temp_asset->rtd_location_id,
            'serial' => $temp_asset->serial,
            'status_id' => $temp_asset->status_id,
            'supplier_id' => $temp_asset->supplier_id,
            'warranty_months' => $temp_asset->warranty_months,
        ];

        // the asset name should be different
        $I->assertNotEquals($asset->name, $data['name']);

        // update
        $I->sendPATCH('/hardware/' . $asset->id, $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);

        $response = json_decode($I->grabResponse());
        $I->assertEquals('success', $response->status);

        // verify
        // $scenario->incomplete('[BadMethodCallException] Call to undefined method Illuminate\Database\Query\Builder::detail() 🤔');
        $I->sendGET('/hardware/' . $asset->id);

        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->seeResponseContainsJson([
            'id' => (int) $asset->id,
            'name' => e($temp_asset->name), // TODO: name should change
            'asset_tag' => e($temp_asset->asset_tag), // TODO: asset_tag should change
            'serial' => e($temp_asset->serial),
            'model' => ($temp_asset->model) ? [
                'id' => (int) $temp_asset->model->id,
                'name'=> e($temp_asset->model->name)
            ] : null,
            'model_number' => ($temp_asset->model) ? e($temp_asset->model->model_number) : null,
            'status_label' => ($temp_asset->assetstatus) ? [
                'id' => (int) $temp_asset->assetstatus->id,
                'name'=> e($temp_asset->assetstatus->name)
            ] : null,
            'category' => ($temp_asset->model->category) ? [
                'id' => (int) $temp_asset->model->category->id,
                'name'=> e($temp_asset->model->category->name)
            ]  : null,
            'manufacturer' => ($temp_asset->model->manufacturer) ? [
                'id' => (int) $temp_asset->model->manufacturer->id,
                'name'=> e($temp_asset->model->manufacturer->name)
            ] : null,
            'notes' => e($temp_asset->notes),
            'order_number' => e($asset->order_number),
            'company' => ($temp_asset->company) ? [
                'id' => (int) $temp_asset->company->id,
                'name'=> e($temp_asset->company->name)
            ] : null,
            'location' => ($asset->assetLoc) ? [
                'id' => (int) $asset->assetLoc->id,
                'name'=> e($asset->assetLoc->name)
            ]  : null,
            'rtd_location' => ($asset->defaultLoc) ? [
                'id' => (int) $asset->defaultLoc->id,
                'name'=> e($asset->defaultLoc->name)
            ]  : null,
            'image' => ($asset->getImageUrl()) ? $asset->getImageUrl() : null,
            'assigned_to' => ($temp_asset->assigneduser) ? [
                'id' => (int) $temp_asset->assigneduser->id,
                'name' => e($temp_asset->assigneduser->getFullNameAttribute()),
                'first_name'=> e($temp_asset->assigneduser->first_name),
                'last_name'=> e($temp_asset->assigneduser->last_name)
            ]  : null,
            'warranty' =>  ($asset->warranty_months > 0) ? e($asset->warranty_months . ' ' . trans('admin/hardware/form.months')) : null,
            'warranty_expires' => ($asset->warranty_months > 0) ?  [
                'datetime' => $asset->created_at->format('Y-m-d'),
                'formatted' => $asset->created_at->format('Y-m-d'),
            ] : null,
            // 'created_at' => ($asset->created_at) ? [
            //     'datetime' => $asset->created_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->created_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'updated_at' => ($asset->updated_at) ? [
            //     'datetime' => $asset->updated_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->updated_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'purchase_date' => ($asset->purchase_date) ? [
            //     'datetime' => $asset->purchase_date->format('Y-m-d'),
            //     'formatted' => $asset->purchase_date->format('Y-m-d'),
            // ] : null,
            // 'last_checkout' => ($asset->last_checkout) ? [
            //     'datetime' => $asset->last_checkout->format('Y-m-d'),
            //     'formatted' => $asset->last_checkout->format('Y-m-d'),
            // ] : null,
            // 'expected_checkin' => ($asset->created_at) ? [
            //     'date' => $asset->created_at->format('Y-m-d'),
            //     'formatted' => $asset->created_at->format('Y-m-d'),
            // ] : null,
            // 'purchase_cost' => (float) $asset->purchase_cost,
            'user_can_checkout' => (bool) $temp_asset->availableForCheckout(),
            'available_actions' => [
                'checkout' => (bool) Gate::allows('checkout', Asset::class),
                'checkin' => (bool) Gate::allows('checkin', Asset::class),
                'update' => (bool) Gate::allows('update', Asset::class),
                'delete' => (bool) Gate::allows('delete', Asset::class),
            ],
        ]);
    }

    /** @test */
    public function updateAssetWithPut(ApiTester $I)
    {
        $I->wantTo('Update a asset with PUT');

        // create
        $asset = factory(\App\Models\Asset::class, 'asset')->create();
        $I->assertInstanceOf(\App\Models\Asset::class, $asset);

        $data = [
            'name' => $this->faker->sentence(3),
        ];

        $I->assertNotEquals($asset->name, $data['name']);

        // update
        $I->sendPUT('/hardware/' . $asset->id, $data);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);

        $response = json_decode($I->grabResponse());
        $I->assertEquals('success', $response->status);

        // verify
        $I->sendGET('/hardware/' . $asset->id);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);
        $I->seeResponseContainsJson([
            'id' => (int) $asset->id,
            'name' => e($data['name']),
            'asset_tag' => e($asset->asset_tag),
            'serial' => e($asset->serial),
            'model' => ($asset->model) ? [
                'id' => (int) $asset->model->id,
                'name'=> e($asset->model->name)
            ] : null,
            'model_number' => ($asset->model) ? e($asset->model->model_number) : null,
            'status_label' => ($asset->assetstatus) ? [
                'id' => (int) $asset->assetstatus->id,
                'name'=> e($asset->assetstatus->name)
            ] : null,
            'category' => ($asset->model->category) ? [
                'id' => (int) $asset->model->category->id,
                'name'=> e($asset->model->category->name)
            ]  : null,
            'manufacturer' => ($asset->model->manufacturer) ? [
                'id' => (int) $asset->model->manufacturer->id,
                'name'=> e($asset->model->manufacturer->name)
            ] : null,
            'notes' => e($asset->notes),
            'order_number' => e($asset->order_number),
            'company' => ($asset->company) ? [
                'id' => (int) $asset->company->id,
                'name'=> e($asset->company->name)
            ] : null,
            'location' => ($asset->assetLoc) ? [
                'id' => (int) $asset->assetLoc->id,
                'name'=> e($asset->assetLoc->name)
            ]  : null,
            'rtd_location' => ($asset->defaultLoc) ? [
                'id' => (int) $asset->defaultLoc->id,
                'name'=> e($asset->defaultLoc->name)
            ]  : null,
            'image' => ($asset->getImageUrl()) ? $asset->getImageUrl() : null,
            'assigned_to' => ($asset->assigneduser) ? [
                'id' => (int) $asset->assigneduser->id,
                'name' => e($asset->assigneduser->getFullNameAttribute()),
                'first_name'=> e($asset->assigneduser->first_name),
                'last_name'=> e($asset->assigneduser->last_name)
            ]  : null,
            'warranty' =>  ($asset->warranty_months > 0) ? e($asset->warranty_months . ' ' . trans('admin/hardware/form.months')) : null,
            'warranty_expires' => ($asset->warranty_months > 0) ?  [
                'datetime' => $asset->created_at->format('Y-m-d'),
                'formatted' => $asset->created_at->format('Y-m-d'),
            ] : null,
            // 'created_at' => ($asset->created_at) ? [
            //     'datetime' => $asset->created_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->created_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'updated_at' => ($asset->updated_at) ? [
            //     'datetime' => $asset->updated_at->format('Y-m-d H:i:s'),
            //     'formatted' => $asset->updated_at->format('Y-m-d H:i a'),
            // ] : null,
            // 'purchase_date' => ($asset->purchase_date) ? [
            //     'datetime' => $asset->purchase_date->format('Y-m-d'),
            //     'formatted' => $asset->purchase_date->format('Y-m-d'),
            // ] : null,
            // 'last_checkout' => ($asset->last_checkout) ? [
            //     'datetime' => $asset->last_checkout->format('Y-m-d'),
            //     'formatted' => $asset->last_checkout->format('Y-m-d'),
            // ] : null,
            // 'expected_checkin' => ($asset->created_at) ? [
            //     'date' => $asset->created_at->format('Y-m-d'),
            //     'formatted' => $asset->created_at->format('Y-m-d'),
            // ] : null,
            // 'purchase_cost' => (float) $asset->purchase_cost,
            'user_can_checkout' => (bool) $asset->availableForCheckout(),
            'available_actions' => [
                'checkout' => (bool) Gate::allows('checkout', Asset::class),
                'checkin' => (bool) Gate::allows('checkin', Asset::class),
                'update' => (bool) Gate::allows('update', Asset::class),
                'delete' => (bool) Gate::allows('delete', Asset::class),
            ],
        ]);
    }

    /** @test */
    public function deleteAssetTest(ApiTester $I, $scenario)
    {
        $I->wantTo('Delete an asset');

        // create
        $asset = factory(\App\Models\Asset::class, 'asset')->create();
        $I->assertInstanceOf(\App\Models\Asset::class, $asset);

        // delete
        $I->sendDELETE('/hardware/' . $asset->id);
        $I->seeResponseIsJson();
        $I->seeResponseCodeIs(200);

        // verify, expect a 200
        $I->sendGET('/hardware/' . $asset->id);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson(); // @todo: response is not JSON
        // $scenario->incomplete('not found response should be JSON, receiving HTML instead');
    }
}
