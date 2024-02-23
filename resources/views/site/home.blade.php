@extends('site.layout')
@section('title','Este é o título da Página Home')
@section('conteudo')
<h1>Home!</h1>
Nome é igual a {{ $nome }} <br>
{{-- Comentário --}}
{{-- Teste ternário e variável existe --}}
{{ isset ($nome) ? 'Nome existe!' : 'Nome não existe!' }}
{{-- Estrutura de controle IF --}}
@if ($nome == 'Paulo')
    true1
@else
    false1
@endif  
{{-- Estrutura de controle UNLESS contrario do IF --}}
@unless ($nome == 'Paulo')
    true2
@else
    false2
@endunless  
{{-- Estrutura shitch --}}
@switch($idade)
    @case(48)
        48 anos
        @break
    @case(49)
        49 anos
        @break
    @default
        outra idade
@endswitch
{{-- Teste vazio --}}
@empty(!$nome)
    Nome nao vazio! 
@endempty
{{-- Autenticado --}}
@auth
   Usuário Autenticado! <br>   
@endauth
{{-- Convidado --}}
@guest
    Usuário Convidado! <br>
@endguest
{{-- Estrutura de repeticao FOR --}}
@for ($i = 0; $i <= 3; $i++)
    valor atual de í no for é {{ $i }} <br>
@endfor 
{{-- Estrutura de repeticao WHILE exite $i criado com diretiva PHP --}}
@php $i = 0; @endphp
@while ($i <= 3) 
    valor atual de í no while é {{ $i }} <br>
    @php $i++; @endphp
@endwhile
{{-- Estrutura foreach --}}
@php $frutas = ['pera','uva','caqui']; @endphp
@foreach ($frutas as $fruta)
    A fruta do foreach é {{ $fruta }} <br>
@endforeach
{{-- Estrutura forelse --}}
@php $carros = []; @endphp
@forelse ($carros as $carro)
    A carro do forelse é {{ $carro }} <br>
@empty
    O array carro está vazio
@endforelse
{{-- Includes rota, array de parâmetros --}}
@include('includes/mensagem',['titulo' => 'Mensagem de sucesso!' ])
{{-- Componente --}}
@component('components/sidebar')
    @slot('paragrafo')
       Texto qualquer vindo do Slot   
    @endslot
@endcomponent

@endsection