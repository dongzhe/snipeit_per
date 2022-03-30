@extends('layouts/default')

{{-- Page title --}}
@section('title')
 {{ $consumable->name }}
 {{ trans('general.consumable') }}
@parent
@stop

@section('header_right')
<a href="{{ URL::previous() }}" class="btn btn-primary pull-right">
  {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')
<div class="row">
  <div class="col-md-9">

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs hidden-print">


        <li class="active">
          <a href="#checkouthistory" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fas fa-info-circle fa-2x"></i>
            </span>
            <span class="hidden-xs hidden-sm">{{ trans('admin/users/general.checkout_history') }}</span>
          </a>
        </li>


        <li>
          <a href="#replenishhistory" data-toggle="tab">
            <span class="hidden-lg hidden-md">
            <i class="fas fa-barcode fa-2x" aria-hidden="true"></i>
            </span>
            <span class="hidden-xs hidden-sm">{{ trans('general.replenish_history') }}
              {!! ($user->assets->count() > 0 ) ? '<badge class="badge badge-secondary">'.$user->assets->count().'</badge>' : '' !!}
            </span>
          </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="checkouthistory">
          <div class="tab-pane" id="checkouthistory">
            <div class="row">
    
              <div class="col-md-12">
                <div class="box box-default">
                  @if ($consumable->id)
                  <div class="box-header with-border">
                    <div class="box-heading">
                      <h2 class="box-title"> {{ $consumable->name }}   ({{ $consumable->numRemaining()  }} out of {{ $consumable->qty}}  {{ trans('admin/consumables/general.remaining') }})</h2>
                    </div>
                  </div><!-- /.box-header -->
                  @endif

                  
      
                  <div class="box-body">
                    <div class="row">          
                      <div class="col-md-18">
                        <div class="table table-responsive table-striped">
                          <h2 class="box-title"> Check Out History</h2>
                          <table
                                  data-cookie-id-table="consumablesCheckedoutTable"
                                  data-pagination="true"
                                  data-id-table="consumablesCheckedoutTable"
                                  data-search="false"
                                  data-side-pagination="client"
                                  data-show-columns="true"
                                  data-show-export="true"
                                  data-show-footer="true"
                                  data-show-refresh="false"
                                  data-sort-order="asc"
                                  data-sort-name="name"
                                  id="consumablesCheckedoutTable"
                                  class="table table-striped snipe-table"
                                  data-url="{{route('api.consumables.showUsers', $consumable->id)}}"
                                  data-export-options='{
                            "fileName": "export-consumables-{{ str_slug($consumable->name) }}-checkedout-{{ date('Y-m-d') }}",
                            "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                            }'>                            
                            <thead>
                              <tr>
                                <th data-searchable="false" data-sortable="false" data-field="name">{{ trans('general.user') }}</th>
                                <th data-searchable="false" data-sortable="false" data-field="totalnum">{{ trans('admin/consumables/general.total') }}</th>
                                <th data-searchable="false" data-sortable="false" data-field="checkoutnote">{{ trans('admin/consumables/general.note') }}</th>
                                <th data-searchable="false" data-sortable="false" data-field="created_at" data-formatter="dateDisplayFormatter">{{ trans('general.date') }}</th>
                                <th data-searchable="false" data-sortable="false" data-field="admin">{{ trans('general.admin') }}</th>                                
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div> <!-- /.col-md-12-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane"  id="replenishhistory">            
          <!-- Replenishment list -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="table table-responsive">
                  <h2 class="box-title">{{ trans('general.replenish_history') }}</h2>
                  <table
                          data-cookie-id-table="consumablesReplenishmentTable"
                          data-pagination="true"
                          data-id-table="consumablesReplenishmentTable"
                          data-search="false"
                          data-side-pagination="client"
                          data-show-columns="true"
                          data-show-export="true"
                          data-show-footer="true"
                          data-show-refresh="false"
                          data-sort-order="desc"
                          data-sort-name="name"
                          id="consumablesReplenishmentTable"
                          class="table table-striped snipe-table"
                          data-url="{{route('api.consumables.showReplenishedUsers', $consumable->id)}}"
                          data-export-options='{
                    "fileName": "export-consumables-{{ str_slug($consumable->name) }}-replenish-{{ date('Y-m-d') }}",
                    "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                    }'>
                    <thead>
                      <tr>
                        <th data-searchable="false" data-sortable="false" data-field="created_at" data-formatter="dateDisplayFormatter">{{ trans('general.date') }}</th>
                        <th data-searchable="false" data-sortable="false" data-field="initial_qty">{{ trans('admin/consumables/general.initial_qty') }}</th>
                        <th data-searchable="false" data-sortable="false" data-field="total_replenish">{{ trans('admin/consumables/general.totalreplenish') }}</th>
                        <th data-searchable="false" data-sortable="false" data-field="order_number">{{ trans('general.order_number') }}</th>   
                        <th data-searchable="false" data-sortable="false" data-field="replenishnote">{{ trans('admin/consumables/general.replenishnote') }}</th>                    
                        <th data-searchable="false" data-sortable="false" data-field="admin">{{ trans('general.admin') }}</th>
                        <th data-searchable="false" data-sortable="false" data-field="file">{{ trans('general.documents') }}</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div> <!-- /.col-md-12-->
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> <!-- /.box.box-default-->
    <div class="col-md-3">
        <div class="box box-default">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">

          
                @if ($consumable->image!='')
                <div class="col-md-12 text-center" style="padding-bottom: 15px;">
                  <a href="{{ Storage::disk('public')->url('consumables/'.e($consumable->image)) }}" data-toggle="lightbox">
                      <img src="{{ Storage::disk('public')->url('consumables/'.e($consumable->image)) }}" class="img-responsive img-thumbnail" alt="{{ $consumable->name }}"></a>
                </div>
                @endif

                @if ($consumable->purchase_date)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('general.purchase_date') }}: </strong>
                    {{ Helper::getFormattedDateObject($consumable->purchase_date, 'date', false) }}
                  </div>
                @endif

                @if ($consumable->purchase_cost)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('general.purchase_cost') }}:</strong>
                    {{ $snipeSettings->default_currency }}
                    {{ Helper::formatCurrencyOutput($consumable->purchase_cost) }}
                  </div>
                @endif

                @if ($consumable->item_no)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('admin/consumables/general.item_no') }}:</strong>
                    {{ $consumable->item_no }}
                  </div>
                @endif

                @if ($consumable->model_number)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('general.model_no') }}:</strong>
                    {{ $consumable->model_number }}
                  </div>
                @endif

                @if ($consumable->manufacturer)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('general.manufacturer') }}:</strong>
                    <a href="{{ route('manufacturers.show', $consumable->manufacturer->id) }}">{{ $consumable->manufacturer->name }}</a>
                  </div>
                @endif

                @if ($consumable->order_number)
                  <div class="col-md-12" style="padding-bottom: 15px;">
                    <strong>{{ trans('general.order_number') }}:</strong>
                    {{ $consumable->order_number }}
                  </div>
                @endif

                @can('checkout', \App\Models\Consumable::class)
                <div class="col-md-12">
                  <a href="{{ route('checkout/consumable', $consumable->id) }}" style="padding-bottom:5px;" class="btn btn-primary btn-sm" {{ (($consumable->numRemaining() > 0 ) ? '' : ' disabled') }}>{{ trans('general.checkout') }}</a>
                </div>
                @endcan

                @if ($consumable->notes)
                  
                <div class="col-md-12">
                  <strong>
                    {{ trans('general.notes') }}
                  </strong>
                </div>
                <div class="col-md-12">
                  {!! nl2br(e($consumable->notes)) !!}
                </div>
              </div>
              @endif

                </div>
            </div> <!-- /.row-->

  </div> <!-- /.col-md-8-->
  @stop

@section('moar_scripts')
@include ('partials.bootstrap-table', ['exportFile' => 'consumable' . $consumable->name . '-export', 'search' => false])
@stop 
</div>      

</div>
                  </div>
                  </div>


