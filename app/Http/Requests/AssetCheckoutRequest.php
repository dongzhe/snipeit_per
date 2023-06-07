<?php

namespace App\Http\Requests;

use App\Models\Statuslabel;

class AssetCheckoutRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'assigned_user'         => 'required_without_all:assigned_asset,assigned_location',
            'assigned_asset'        => 'required_without_all:assigned_user,assigned_location',
            'assigned_location'     => 'required_without_all:assigned_user,assigned_asset',
            'status_id'             => 'exists:status_labels,id,deployable,1',
            'checkout_to_type'      => 'required|in:asset,location,user',
        ];

        // if using the 'deployed' status-type, change the status_id rule
        if (Statuslabel::has_deployed_statuses()) {
            $rules['status_id'] = 'exists:status_labels,id,deployed,1';
        }

        return $rules;
    }
}
