@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

 <!-- Menu -->
<div>
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


    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			Alumnos
		</h1>

		<div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


			<table class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Nombre</th>
						<th data-priority="2">Apellido</th>
						<th data-priority="3">DNI</th>
						<th data-priority="4">Email</th>
						<th data-priority="5">Telefono</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($students as $student)
                    <tr>
						<td>{{$student->name}}</td>
						<td>{{$student->lastNames}}</td>
						<td>{{$student->DNI}}</td>
						<td>{{$student->email}}</td>
						<td>{{$student->phone}}</td>
					</tr>
                    @endforeach


				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection

