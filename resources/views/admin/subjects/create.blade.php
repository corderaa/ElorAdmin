@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
    <form class="mt-2" name="create_platform" action="{{route('subjects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('layouts.editCreateSubject')


    <button type="submit" class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">Crear</button>
    </form>
    <div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
        <a href="{{route('subjects.index')}}">
            <button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">
                Volver
            </button>
        </a>
    </div>
</div>
@endsection
