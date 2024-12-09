@extends('layouts.app')

<?php
$user = Auth::user();
$userType = Auth::user()->userTypes;  
?>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel User</div>

                <div class="card-body">
                    Usuario = {{$user->DNI}} ----- {{$userType->role}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
