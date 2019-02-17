@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Update Branding Settings
    @parent
@stop

@section('header_right')
    <a href="{{ route('settings.index') }}" class="btn btn-default"> {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')

    <style>
        .checkbox label {
            padding-right: 40px;
        }
    </style>

    {{ Form::open(['method' => 'POST', 'files' => true, 'autocomplete' => 'off', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'create-form' ]) }}
    <!-- CSRF Token -->
    {{csrf_field()}}

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <i class="fa fa-copyright"></i> Branding
                    </h4>
                </div>
                <div class="box-body">


                    <div class="col-md-12">

                        <!-- Site name -->
                        <div class="form-group {{ $errors->has('site_name') ? 'error' : '' }}">

                            <div class="col-md-3">
                                {{ Form::label('site_name', trans('admin/settings/general.site_name')) }}
                            </div>
                            <div class="col-md-7 required">
                                @if (config('app.lock_passwords')===true)
                                    {{ Form::text('site_name', Input::old('site_name', $setting->site_name), array('class' => 'form-control', 'disabled'=>'disabled','placeholder' => 'Snipe-IT Asset Management')) }}
                                @else
                                    {{ Form::text('site_name',
                                        Input::old('site_name', $setting->site_name), array('class' => 'form-control','placeholder' => 'Snipe-IT Asset Management', 'data-validation' => 'required')) }}
                                @endif
                                {!! $errors->first('site_name', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>



                        <!-- Branding -->
                        <div class="form-group {{ $errors->has('brand') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('brand', trans('admin/settings/general.brand')) }}
                            </div>
                            <div class="col-md-9">
                                {!! Form::select('brand', array('1'=>'Text','2'=>'Logo','3'=>'Logo + Text'), Input::old('brand', $setting->brand), array('class' => 'form-control select2', 'style'=>'width: 150px ;')) !!}
                                {!! $errors->first('brand', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Logo -->

                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            <label class="col-md-3" for="image">
                                {{ Form::label('image', trans('admin/settings/general.logo')) }}</label>

                            <div class="col-md-9">
                                <label class="btn btn-default">
                                    {{ trans('button.select_file')  }}
                                    <input type="file" name="image" class="js-uploadFile" id="uploadLogo" data-maxsize="{{ \App\Helpers\Helper::file_upload_max_size() }}" accept="image/gif,image/jpeg,image/png,image/svg" style="display:none; max-width: 90%">
                                </label>
                                <span class='label label-default' id="uploadLogo-info"></span>

                                <p class="help-block" id="uploadLogo-status">
                                    {{ trans('general.logo_size') }}
                                    {{ trans('general.image_filetypes_help', ['size' => \App\Helpers\Helper::file_upload_max_size_readable()]) }}
                                </p>
                                {!! $errors->first('image', '<span class="alert-msg">:message</span>') !!}

                            </div>
                            <div class="col-md-9 col-md-offset-3">
                                <img id="uploadLogo-imagePreview" style="max-width: 500px; max-height: 50px">
                            </div>

                            @if ($setting->logo!='')
                            <div class="col-md-9 col-md-offset-3">

                                {{ Form::checkbox('clear_logo', '1', Input::old('clear_logo'),array('class' => 'minimal')) }} Remove current image

                            </div>
                                @endif
                        </div>

                        <!-- Email Logo -->
                        <div class="form-group {{ $errors->has('email_logo') ? 'has-error' : '' }}">
                            <label class="col-md-3" for="email_logo">
                                {{ Form::label('email_logo', trans('admin/settings/general.email_logo')) }}</label>

                            <div class="col-md-9">
                                <label class="btn btn-default">
                                    {{ trans('button.select_file')  }}
                                    <input type="file" name="email_logo" class="js-uploadFile" id="uploadEmailLogo" data-maxsize="{{ \App\Helpers\Helper::file_upload_max_size() }}" accept="image/gif,image/jpeg,image/png,image/svg" style="display:none; max-width: 90%">
                                </label>
                                <span class='label label-default' id="uploadEmailLogo-info"></span>

                                <p class="help-block" id="uploadEmailLogo-status">
                                    {{ trans('admin/settings/general.email_logo_size') }}
                                    {{ trans('general.image_filetypes_help', ['size' => \App\Helpers\Helper::file_upload_max_size_readable()]) }} 
                                </p>
                                {!! $errors->first('image', '<span class="alert-msg">:message</span>') !!}

                            </div>

                            <div class="col-md-9 col-md-offset-3">
                                    <img id="uploadEmailLogo-imagePreview" style="max-width: 500px; max-height: 50px">
                                </div>

                            @if ($setting->email_logo!='')
                                <div class="col-md-9 col-md-offset-3">

                                    {{ Form::checkbox('clear_email_logo', '1', Input::old('clear_email_logo'),array('class' => 'minimal')) }} Remove current image

                                </div>
                            @endif
                        </div>

                        <!-- Favicon -->
                        <div class="form-group {{ $errors->has('favicon') ? 'has-error' : '' }}">
                            <label class="col-md-3" for="image">
                                {{ Form::label('favicon', trans('admin/settings/general.favicon')) }}</label>

                            <div class="col-md-9">
                                <label class="btn btn-default">
                                    {{ trans('button.select_file')  }}
                                    <input type="file" name="favicon" data-maxsize="1000" accept="image/x-icon,image/gif,image/jpeg,image/png,image/svg" style="display:none; max-width: 90%">
                                </label>
                                <span class='label label-default' id="favicon-upload-file-info"></span>

                                <p class="help-block">{{ trans('admin/settings/general.favicon_size') }}
                                    {{ trans('admin/settings/general.favicon_format') }} </p>
                                {!! $errors->first('favicon', '<span class="alert-msg">:message</span>') !!}

                            </div>

                            @if ($setting->email_logo!='')
                                <div class="col-md-9 col-md-offset-3">

                                    {{ Form::checkbox('clear_favicon', '1', Input::old('clear_favicon'),array('class' => 'minimal')) }} Remove current favicon

                                </div>
                            @endif
                        </div>



                        <!-- Include logo in print assets -->
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('logo_print_assets', trans('admin/settings/general.logo_print_assets')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::checkbox('logo_print_assets', '1', Input::old('logo_print_assets', $setting->logo_print_assets),array('class' => 'minimal')) }}
                                {{ trans('admin/settings/general.logo_print_assets_help') }}
                            </div>
                        </div>


                        <!-- show urls in emails-->
                        <div class="form-group">
                            <div class="col-md-3">
                                {{ Form::label('show_url_in_emails', trans('admin/settings/general.show_url_in_emails')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::checkbox('show_url_in_emails', '1', Input::old('show_url_in_emails', $setting->show_url_in_emails),array('class' => 'minimal')) }}
                                {{ trans('general.yes') }}
                                <p class="help-block">{{ trans('admin/settings/general.show_url_in_emails_help_text') }}</p>
                            </div>
                        </div>

                        <!-- Header color -->
                        <div class="form-group {{ $errors->has('header_color') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('header_color', trans('admin/settings/general.header_color')) }}
                            </div>
                            <div class="col-md-2">
                                <div class="input-group header-color">
                                    {{ Form::text('header_color', Input::old('header_color', $setting->header_color), array('class' => 'form-control', 'style' => 'width: 100px;','placeholder' => '#FF0000')) }}
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                </div><!-- /.input group -->
                                {!! $errors->first('header_color', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Email format -->
                        <div class="form-group {{ $errors->has('skin') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('skin', trans('general.skin')) }}
                            </div>
                            <div class="col-md-9">
                                {!! Form::skin('skin', Input::old('skin', $setting->skin), 'select2') !!}
                                {!! $errors->first('skin', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>


                        <!-- Custom css -->
                        <div class="form-group {{ $errors->has('custom_css') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('custom_css', trans('admin/settings/general.custom_css')) }}
                            </div>
                            <div class="col-md-9">
                                @if (config('app.lock_passwords')===true)
                                    {{ Form::textarea('custom_css', Input::old('custom_css', $setting->custom_css), array('class' => 'form-control','placeholder' => 'Add your custom CSS','disabled'=>'disabled')) }}
                                    {!! $errors->first('custom_css', '<span class="alert-msg">:message</span>') !!}
                                    <p class="help-block">{{ trans('general.lock_passwords') }}</p>
                                @else
                                    {{ Form::textarea('custom_css', Input::old('custom_css', $setting->custom_css), array('class' => 'form-control','placeholder' => 'Add your custom CSS')) }}
                                    {!! $errors->first('custom_css', '<span class="alert-msg">:message</span>') !!}
                                @endif
                                <p class="help-block">{!! trans('admin/settings/general.custom_css_help') !!}</p>
                            </div>
                        </div>


                        <!-- Support Footer -->
                        <div class="form-group {{ $errors->has('support_footer') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('support_footer', trans('admin/settings/general.support_footer')) }}
                            </div>
                            <div class="col-md-9">
                                @if (config('app.lock_passwords')===true)
                                    {!! Form::select('support_footer', array('on'=>'Enabled','off'=>'Disabled','admin'=>'Superadmin Only'), Input::old('support_footer', $setting->support_footer), ['class' => 'form-control select2 disabled', 'style'=>'width: 150px ;', 'disabled' => 'disabled']) !!}
                                @else
                                    {!! Form::select('support_footer', array('on'=>'Enabled','off'=>'Disabled','admin'=>'Superadmin Only'), Input::old('support_footer', $setting->support_footer), array('class' => 'form-control select2', 'style'=>'width: 150px ;')) !!}
                                @endif

                                <p class="help-block">{{ trans('admin/settings/general.support_footer_help') }}</p>
                                {!! $errors->first('support_footer', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>


                        <!-- Version Footer -->
                        <div class="form-group {{ $errors->has('version_footer') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('version_footer', trans('admin/settings/general.version_footer')) }}
                            </div>
                            <div class="col-md-9">
                                @if (config('app.lock_passwords')===true)
                                    {!! Form::select('version_footer', array('on'=>'Enabled','off'=>'Disabled','admin'=>'Superadmin Only'), Input::old('version_footer', $setting->version_footer), ['class' => 'form-control select2 disabled', 'style'=>'width: 150px ;', 'disabled' => 'disabled']) !!}
                                @else
                                    {!! Form::select('version_footer', array('on'=>'Enabled','off'=>'Disabled','admin'=>'Superadmin Only'), Input::old('version_footer', $setting->version_footer), array('class' => 'form-control select2', 'style'=>'width: 150px ;')) !!}
                                @endif

                                <p class="help-block">{{ trans('admin/settings/general.version_footer_help') }}</p>
                                {!! $errors->first('version_footer', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Additional footer -->
                        <div class="form-group {{ $errors->has('footer_text') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('custom_css', trans('admin/settings/general.footer_text')) }}
                            </div>
                            <div class="col-md-9">
                                @if (config('app.lock_passwords')===true)
                                    {{ Form::textarea('footer_text', Input::old('footer_text', $setting->footer_text), array('class' => 'form-control', 'rows' => '4', 'placeholder' => 'Optional footer text','disabled'=>'disabled')) }}
                                    <p class="help-block">{{ trans('general.lock_passwords') }}</p>
                                @else
                                    {{ Form::textarea('footer_text', Input::old('footer_text', $setting->footer_text), array('class' => 'form-control','rows' => '4','placeholder' => 'Optional footer text')) }}
                                @endif
                                <p class="help-block">{!! trans('admin/settings/general.footer_text_help') !!}</p>
                                 {!! $errors->first('footer_text', '<span class="alert-msg">:message</span>') !!}

                            </div>
                        </div>




                    </div>

                    </div> <!--/.box-body-->
                    <div class="box-footer">
                        <div class="text-left col-md-6">
                            <a class="btn btn-link text-left" href="{{ route('settings.index') }}">{{ trans('button.cancel') }}</a>
                        </div>
                        <div class="text-right col-md-6">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> {{ trans('general.save') }}</button>
                        </div>

                    </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    {{Form::close()}}

@stop

@section('moar_scripts')
    <!-- bootstrap color picker -->
    <script nonce="{{ csrf_token() }}">
        //color picker with addon
        $(".header-color").colorpicker();
        // toggle the disabled state of asset id prefix
        $('#auto_increment_assets').on('ifChecked', function(){
            $('#auto_increment_prefix').prop('disabled', false).focus();
        }).on('ifUnchecked', function(){
            $('#auto_increment_prefix').prop('disabled', true);
        });
    </script>
@stop
