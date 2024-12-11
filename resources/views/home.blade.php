@extends('layouts.app')

<?php
$user = Auth::user();
$userType = Auth::user()->userTypes;  
?>
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 flex">
            <div class="text-center">
                <h1 class="tw-font-semibold tw-mt-10 tw-text-5xl">Tus Ciclos Formativos</h1>
            </div>
            <div class="tw-flex tw-justify-around">
                <div id="caja-ciclo">
                
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection