@extends('site/layout')
@section('title','Detalhes')
@section('conteudo')

{{$produto->nome}}

<div class="row container">
    <div class="col s12 m6">
        <img scr="{{ $produto->imagem }}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h2> {{ $produto->nome }}</h2>
        <p> {{ $produto->descricao }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>

@endsection