
@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')


    <div class = "tw-flex tw-flex-row tw-justify-evenly tw-w-full tw-pb-5">

        <ul class="list-group tw-w-96">
            <li class="list-group-item">Primer usuario:  {{ $meeting_user_user->firstUser->name}}</li>
            <li class="list-group-item">Segundo usuario:  {{ $meeting_user_user->secondUser->name}}</li>
            <li class="list-group-item">Estado:  {{ $meeting_user_user->status->code}}</li>
            <li class="list-group-item">Dia:  {{ $meeting_user_user->day}}</li>
        </ul>

    </div>
    <div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
        <a href="{{route('meeting_user_user.index')}}">
            <button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">
                Volver
            </button>
        </a>
    </div>


@endsection
