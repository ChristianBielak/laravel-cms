@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <form action="{{ route('admin.element-components.update',$element_component->id) }}" role="form" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}

                    <div class="card-header">
                        <h5><!-- insert title here --></h5>
                        @lang('crud.edit_headline')
                    </div>

                    <div class="card-body">
                        
                        @include('crudable::notifications')
                        
                    </div>

                    <div class="card-footer">

                        <div class="row">

                            <div class="col-sm-6">
                                <a href="{{ route('admin.element-components.index') }}" class="btn btn-danger">{{ trans('crud.cancel') }}</a>
                            </div>

                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn btn-success">{{ trans('crud.save') }}</button>
                            </div>

                        </div>

                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@stop