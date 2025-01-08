<div class = "tw-flex tw-flex-col tw-justify-center tw-w-full tw-pb-5 tw-items-center">
    <form class="mt-2" name="create_platform" action="{{route('users.update',$user)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')    
    <div class ="tw-pb-7 tw-pt-4">
            <ul class="list-group tw-w-96">
                <li class="list-group-item">Nombre
                    <input type="text" class="form-control" id="name" name="name" required value="{{$user->name}}"/>
                </li>

                <li class="list-group-item">Apellido
                    <input type="text" class="form-control" id="lastNames" name="lastNames" required value="{{ $user->lastNames}}"/>
                </li>

                <li class="list-group-item">Email
                    <input type="text" class="form-control" id="email" name="email" required value="{{$user->email}}"/>
                </li>

                <li class="list-group-item">DNI
                    <input type="text" class="form-control" id="DNI" name="DNI" required value="{{ $user->DNI }}"/>
                </li>

                <li class="list-group-item">Direccion
                    <input type="text" class="form-control" id="address" name="address" required value="{{ $user->address }}"/>
                </li>

                <li class="list-group-item">Telefono
                    <input type="text" class="form-control" id="phone" name="phone" required value="{{ $user->phone }}"/></li>
            </ul>
        </div>
            <button type="submit" class="tw-bg-[#211261] tw-p-1 tw-text-white tw-rounded-lg tw-w-96" name="">Actualizar</button>

    </form>
         
</div>