@extends('layouts.app')
@section('content')
    @include('layouts.modal._form_destroy')
    <a href="{{ route('configuration.user-role.create') }}" class="site-action btn-raised btn btn-success btn-floating" role="button">
        <i class="icon wb-plus" aria-hidden="true"></i>
    </a>
    <div class="page-content">
        <div class="panel">
            <div class="panel-body">
                @include('layouts.form._form_alerts')
                @if($dados->isEmpty())
                    @include('layouts.form._no_record')
                @else
                    <table class="table table-hover table-no-more table-striped mb-0 text-truncate">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th class="text-center">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $row)
                            <tr>
                                <td data-title="#">{{ $row->id }}</td>
                                <td data-title="Nome">{{ $row->name }}</td>
                                <td data-title="Ação" class="text-center">
                                    <a href="{{ route('configuration.user-role.edit', $row->id) }}" title="Alterar" class="btn btn-icon btn-default btn-outline"><i class="icon wb-pencil" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" title="Excluir" data-route="{{ route('configuration.user-role.destroy', $row->id) }}" data-toggle="modal" data-target="#Destroy" class="btnDestroy btn btn-icon btn-default btn-outline"><i class="icon wb-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
