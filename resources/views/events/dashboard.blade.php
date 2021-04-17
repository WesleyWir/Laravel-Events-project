@extends('layouts.main')

@section('title', 'Dashboard')


@section('content')

<div class="col-mod-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th class="col">#</th>
                <th class="col">Nome</th>
                <th class="col">Participantes</th>
                <th class="col">Ações</th>
            </tr>
        </thead> 
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td scropt="row">{{$loop->index+1}}</td>
                <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a><a href="#">Deletar</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>   
    @else
        <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>

@endsection
