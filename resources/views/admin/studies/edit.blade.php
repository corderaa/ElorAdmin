@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class = "tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
    <form class="mt-2" name="create_platform" action="{{route('studies.update',$study)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('layouts.editCreateStudy')

    <button type="submit" class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">Actualizar</button>

    </form>
    <div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
            <a href="{{route('studies.index')}}">
                <button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">
                    Volver
                </button>
            </a>
        </div>
</div>
@endsection
