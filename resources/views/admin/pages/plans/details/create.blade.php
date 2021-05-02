@extends('adminlte::page')

@section('title', "Adicionar novo detalhe ao plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.create', $plan->url) }}">Novo</a></li>
    </ol>

    <div class="head-text" style="
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    ">
        <h1>Detalhes do Plano {{ $plan->name}} </h1>
        {{-- <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fas fa-plus-square"></i></a> --}}
    </div>
@stop

@section('content')
    <div class="card">
        
        <div class="card-body">
            #form
        </div>
    </div>
@endsection