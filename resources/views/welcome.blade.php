@extends('layouts.main')

@section('title', 'HDCEvents')

@section('content')

<h1>Algum titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
    <p>A Condição é true</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Zé")
    <p>O nome é Zé</p>
@else
    <p>O nome não é Zé, é {{$nome}}, e ele tem {{$idade}} anos.</p>
@endif

@for($i = 0;  $i < count($array); $i++)
    <p>{{$array[$i]}}</p>
@endfor

@foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@php
    $name = "João";
    echo $name;    
@endphp

<!-- Comentário HTML -->
{{-- Comentário com Blade --}}

@endsection