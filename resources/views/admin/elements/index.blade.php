@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><!-- insert title here --></h5>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{ route('admin.elements.create') }}" class="btn btn-light btn-sm">
                                @lang('crud.create_button')
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('crudable::notifications')
                    @if($elements->isEmpty())
                    @lang('crud.no_entries')
                    @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($elements as $element)
                            <tr>
                                <td class="text-right">
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.elements.edit',$element->id) }}">
                                            <i class="glyphicon glyphicon-pencil"></i> @lang('crud.edit')
                                        </a>
                                        <form class="btn-group"
                                            action="{{ route('admin.elements.destroy',$element->id) }}"
                                            method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-sm btn-danger"
                                                    type="submit"><i class="glyphicon glyphicon-trash"></i> @lang('crud.delete')</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop