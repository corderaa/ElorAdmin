@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
<?php
$user = Auth::user();
$userType = Auth::user()->userTypes; 
?>

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
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="">
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
<div>
  <h1 class="tw-text-center tw-pt-10">DashBoard</h1>
  <p>Numero de alumnos matriculados:</p>
  <p>Numero de personal del instituto:</p>
  <p>Numero de reuniones aceptadas para el dia de hoy:</p>
  <p>Numero de reuniones pendientes para hoy:</p>
  <p>Numero de reuniones totales a partir de hoy:</p>
  <p>Numero de ciclos formativos:</p>
  <p>Numero de usuarios sin rol:</p>
  <p>Numero de modulos:</p>
</div>
  
    
@endsection