@extends('site/layout')
@section('title','Detalhes')
@section('conteudo')
<div class="row container">
    <div class="col s12 m6">
        <div class="card-image">
           <img src="{{ $produto->imagem }}">
        </div>
    </div>    
    <div class="col s12 m6">
        <h2> {{ $produto->nome }}</h2>
        <p> {{ $produto->descricao }}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>
@endsection