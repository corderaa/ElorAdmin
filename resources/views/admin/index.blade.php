@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])

@section('content')

 <!-- Menu -->

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-30 col-lg-20 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Panel Administrador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <!-- Datos del menu -->
         
        <div class="offcanvas-body d-md-flex flex-row p-0 overflow-y-auto tw-w-full tw-justify-center">
          <ul class="nav flex-row tw-justify-evenly tw-w-full">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ route('admin.student.index') }}">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Alumnos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Personal</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Ciclos formativos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Modulos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Reuniones</p>
              </a>
          </ul>
        </div>
      </div>
    </div>
</div>
<!-- Dashboard -->
<div class= "row">
  
  <h1 class="tw-text-center tw-pt-10 tw-pb-10 tw-font-bold">DashBoard</h1>
  
  <div class = "tw-flex tw-flex-row tw-justify-evenly tw-w-full tw-pb-5">
      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Alumnos matriculados</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $students }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Personal del instituto</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones aceptadas hoy</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones pendientes  hoy</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $personal }}</p>
      </div>
  </div>

  <div class = " tw-flex tw-flex-row tw-justify-evenly tw-w-full">
      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Reuniones totales a partir de hoy</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $meeting }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Ciclos formativos</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $studies }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Usuarios sin rol</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $usersWithNoRole }}</p>
      </div>

      <div class="tw-text-center tw-w-60 tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow">
        <h5 class="tw-mb-2 tw-font-normal tw-tracking-tight tw-text-gray-900 tw-dark:text-white">Modulos</h5>
        <p class="tw-text-center tw-text-3xl tw-font-bold tw-text-gray-700 tw-dark:text-gray-400">{{ $subjects }}</p>
      </div>
  </div>

  
</div>


  
    
@endsection

