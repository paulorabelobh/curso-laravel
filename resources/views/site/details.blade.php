@extends('site/layout')
@section('title','Detalhes')
@section('conteudo')

<div class="row container"> <br>
    <div class="col s12 m6">
        <div class="card-image">
           <img src="{{ $produto->imagem }}">
        </div>
    </div>    
    <div class="col s12 m6">
        <h4> {{ $produto->nome }}</h4>
        <h4> R$ {{ number_format($produto->preco, 2, ',' , '.') }}</h4>
        <p> {{ $produto->descricao }}</p>
        <p> Postado por: {{ $produto->user->firstname }}<br>
            Categoria: {{ $produto->categoria->nome }} 
        </p>
        <form action="{{ route('site.addcarrinho') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $produto->id }}">
            <input type="hidden" name="name" value="{{ $produto->nome }}">
            <input type="hidden" name="price" value="{{ $produto->preco }}">
            <input style="width: 40px; font-weight:900" class="white center" type="number" min="1" name="qnt" value="1">
            <input type="hidden" name="img" value="{{ $produto->imagem }}">
            <br>
            <button class="btn orange btn-large">Comprar</button>
        </form>
    </div>
</div>
@endsection

