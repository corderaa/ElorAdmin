@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')


    <div class = "tw-flex tw-flex-row tw-justify-evenly tw-w-full tw-pb-5">

        <ul class="list-group tw-w-96">
            <li class="list-group-item">Nombre:  {{ $user ->name }}</li>
            <li class="list-group-item">Apellido:  {{ $user ->lastNames}}</li>
            <li class="list-group-item">Email:  {{ $user ->email }}</li>
            <li class="list-group-item">DNI:  {{ $user ->DNI }}</li>
            <li class="list-group-item">Direccion:  {{ $user ->address }}</li>
            <li class="list-group-item">Telefono:  {{ $user ->phone }}</li>

        </ul>
  </div>
  

@endsection
