@extends('master')

@section('content_header')
    <h1>Cadastrar Área</h1>
@stop

@section('content')

<div class="row">
    @include('messages.flash')
    @include('messages.errors')

        <div class="col-md-6">
            <form method="post" action="{{ url('areas') }}">
                {{ csrf_field() }}
                @include('areas.form')
            </form>
        </div>
    </div>

@stop