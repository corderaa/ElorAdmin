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
    <div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
        <a href="{{route('users.getAllStudents')}}">
            <button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">
                Volver
            </button>
        </a>
    </div>
  

@endsection
