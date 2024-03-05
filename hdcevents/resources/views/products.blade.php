@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de produtos</h1>

@if($busca != '')
    <p>O uusário está buscando por: {{ $busca }}</p>
@endif

@endsection