@extends('layouts.app')

<?php
$user = Auth::user();
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel Admin</div>

                <div class="card-body">
                    Usuario = {{$user->DNI}} ----- {{$user->userType_id}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection