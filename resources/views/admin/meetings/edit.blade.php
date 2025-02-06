@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class = "tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
    <form class="mt-2" name="create_platform" action="{{route('meeting_user_user.update',$meeting_user_user)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class ="tw-pb-7 tw-pt-4">
        <ul class="list-group tw-w-96">

                <li class="list-group-item">Primer usuario
                        <input type="text" class="form-control" id="first_user_name" name="first_user_name" required value="{{ old('first_user_name', $meeting_user_user->firstUser->name ?? '') }}"/>
                </li>

                <li class="list-group-item">Segundo usuario
                    <input type="text" class="form-control" id="second_user_name" name="second_user_name" required value="{{ old('second_user_name', $meeting_user_user->secondUser->name ?? '') }}"/>
                </li>

                <li class="list-group-item">Estado
                    <input type="text" class="form-control" id="status" name="status" required value="{{ old('status', $meeting_user_user->status->code ?? '') }}"/>
                </li>

                <li class="list-group-item">Dia
                    <input type="text" class="form-control" id="day" name="day" required value="{{ old('day', $meeting_user_user->day ?? '') }}"/>
                </li>

            </ul>
        </div>




    <button type="submit" class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">Actualizar</button>

    </form>
    <div class="tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
            <a href="{{route('meeting_user_user.index')}}">
                <button class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">
                    Volver
                </button>
            </a>
        </div>
</div>
@endsection
