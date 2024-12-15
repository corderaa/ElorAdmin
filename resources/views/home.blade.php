@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 flex">
            <div class="text-center">
                <h1 class="tw-font-semibold tw-mt-10 tw-text-5xl">Tus Ciclos Formativos</h1>
            </div>
            <div class="tw-flex tw-justify-around tw-mt-16">
               
                @foreach($studies as $study)
                <div class="tw-block tw-max-w-sm tw-p-6 tw-bg-white tw-border tw-border-gray-200 tw-rounded-lg tw-shadow tw-hover:bg-gray-100 tw-dark:bg-gray-800 tw-dark:border-gray-700 tw-dark:hover:bg-gray-700">
                    <h5 class="tw-mb-2 tw-text-2xl tw-font-bold tw-tracking-tight tw-text-gray-900 tw-dark:text-white">{{ $study->name }}</h5>
                    <p class="tw-font-normal tw-text-gray-700 tw-dark:text-gray-400">{{ $study->description }}</p>
                    <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Modulos del Ciclo
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="tw-flex tw-flex-col"></div>
                                @foreach($study->subject as $subject)
                                <p class="tw-m-0 tw-p-3">{{ $subject->name }}</p>
                                <ul>
                                    @foreach($subject->schedules as $schedule)
                                    <li>
                                    hola {{ $schedule->name }}
                                    </li>
                                    @endforeach
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div> 
        </div>
    </div>
</div>
@endsection