@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])

@section('content')


 <!-- Menu -->
 @include('layouts.nav')
<div class="container-fluid">

  <div class="row">
    <div class="sidebar border border-right col-md-30 col-lg-20 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">Panel Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>

                <!-- Datos del menu -->


        </div>
    </div>
</div>
<!-- Dashboard -->
<div class= "row">

    <h1 class="tw-text-center tw-pt-10 tw-pb-10 tw-font-bold">DashBoard</h1>

    <div class = "tw-flex tw-flex-row tw-justify-evenly tw-w-full tw-pb-5">
        <a href="{{ route('users.getAllStudents') }}">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white" >Alumnos matriculados</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $students }}</p>
            </div>
        </a>

        <a href="{{ route('users.getStaff') }}">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Personal del instituto</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
            </div>
        </a>

        <a href="#">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones aceptadas hoy</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
            </div>
        </a>

        <a href="#">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones pendientes  hoy</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
            </div>
        </a>

    </div>
    <div>
        <a href="#">
            <div class = " tw-flex tw-flex-row tw-justify-evenly tw-w-full">
                <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones totales a partir de hoy</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $meeting }}</p>
            </div>
        </a>

        <a href="{{ route('studies.index') }}">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Ciclos formativos</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $studies }}</p>
            </div>
        </a>

        <a href="#">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Usuarios sin rol</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $usersWithNoRole }}</p>
            </div>
        </a>

        <a href="{{ route('subjects.index') }}">
            <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
                <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Modulos</h5>
                <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $subjects }}</p>
            </div>
        </a>

    </div>
</div>




@endsection

