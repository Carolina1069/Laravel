@extends('plantilla')


@section('Contenido')
<h1> Portafolio</h1>
<ul>
    @foreach ($project as $project)

    <li><a href="{{route('portafolio.show', $project)}}">{{ $project->title }} {{ $project->description}} {{ $project->created_at}}</a></li>

    @endforeach

    <li><a href="{{ route('portafolio.create', $project)}}">nuevo</a></li>


</ul>

@endsection

@section('titulo', 'Portafolio')



