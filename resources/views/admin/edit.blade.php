@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
@include('layouts.editusers')
<div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
    <a href ="{{route('users.adminIndex')}}"><button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">Volver</button></a>
</div>


@endsection