@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
    </ol>

    <div class="head-text" style="
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    ">
        <h1>Detalhes do Plano {{ $plan->name}} </h1>
        <a href="{{ route('details.plan.create', $plan->url) }}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a>
    </div>
@stop

@section('content')
    <div class="card">
        
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width=160>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{ $detail->name }}</td>
                            <td style="width=10px;">
                                <a href="{{ route('plans.edit', $detail->url) }}" class="btn btn-info">EDITAR</a>
                                <a href="{{ route('plans.show', $detail->url) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links("pagination::bootstrap-4") !!}
            @else
                {!! $details->links("pagination::bootstrap-4") !!}
            @endif
        </div>
    </div>
@stop
