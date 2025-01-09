@extends('layouts.app')
@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

 <!-- Menu -->



    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
        @include('layouts.nav')
        <h1 class="tw-text-center tw-pt-10 tw-pb-10 tw-font-bold">Estudiantes</h1>

		<div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">DNI</th>
						<th scope="col">Email</th>
						<th scope="col">Telefono</th>
                        <th class="tw-text-center"> 
                            <a href="{{route('users.create')}}">
                                <button type="submit" class="btn btn-success bg-dark">
                                Crear estudiante
                                </button>
                            </a>
                        </th>
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


                        <td class="tw-flex tw-flex-row tw-justify-center">

                            <a class="btn btn-sm btn-info bg-primary tw-h-[1.65rem]" href="{{route('users.show',$student)}}" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                            </a>

                            <a class="btn btn-sm btn-warning bg-secondary border-secondary tw-h-[1.65rem]" href="{{route('users.edit',$student)}}" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>


                            <form action="{{route('users.destroy',$student)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('¿Estas seguro?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

				</tbody>
			</table>
            <div class="tw-p-2">
                {{ $students->links() }}
            </div>
		</div>
	</div>
</div>



@endsection

