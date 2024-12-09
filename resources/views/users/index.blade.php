@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
<div class="flex justify-center">
<table class="w-4/5">
  <tr>
    <td class="py-10">NOMBRE</td>
    <td class="py-10">TEXTO</td>
    <td class="py-10">FECHA ESCRITO</td>
    <td class="py-10"></td>
    <td class="py-10"></td>
    <td class="py-10"></td>
  </tr>
@foreach ($posts as $post)
  {{-- visualizamos los atributos del objeto --}}
  <tr>
    <td>{{$post->titulo}}</td>
    <td>{{$post->texto}}</td>
    <td>Escrito el {{$post->created_at}}</td>
    <td><a class="btn btn-sm h-[1.9rem] btn-warning" href="{{route('posts.view',$post)}}"
    role="button">Ver</a></td>
    <td><a class="btn btn-sm h-[1.9rem] btn-warning" href="{{route('posts.edit',$post)}}"
    role="button">Editar</a></td>
    <td><form class="m-0" action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn ml-1` btn-sm btn-danger" type="submit"
          onclick="return confirm('Are you sure?')">Delete
        </button>
      </form></td>
  </tr>
@endforeach
</table>
</div>
@endsection