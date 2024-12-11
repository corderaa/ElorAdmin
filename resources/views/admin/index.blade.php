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
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Panel Administrador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <!-- Datos del menu -->
         
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Alumnos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Personal</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Ciclos formativos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Modulos</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Reuniones</p>
              </a>
          </ul>
        </div>
      </div>
    </div>
</div>
    
@endsection