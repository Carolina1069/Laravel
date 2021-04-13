@extends('plantilla')
@section('titulo','Contacto')
@section('Contenido')
<h1> Contactenos</h1>



{{--@foreach ($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
--}}


<form method="post" action={{route('Contac')}}>
     @csrf
<input name="nombre" placeholder="Nombre" value='{{old('nombre')}}' ><br>
{!!$errors->first('nombre','<small>:message</small><br>')!!}

<input type="email" name="email" placeholder="Email" value='{{old('email')}}' ><br>
{!!$errors->first('email','<small>:message</small><br>')!!}

<input name="subject" placeholder="Asunto" value='{{old('subject')}}' ><br>
{!!$errors->first('subject','<small>:message</small><br>')!!}

<textarea name="contenido" placeholder="Mensaje" value='{{old('contenido')}}' ></textarea>
{!!$errors->first('contenido','<small>:message</small><br>')!!}

<button>Enviar</button>
</form>
@endsection


