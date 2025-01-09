    <div class ="tw-pb-7 tw-pt-4">
        <ul class="list-group tw-w-96">
                <li class="list-group-item">Nombre
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $user->name ?? '') }}"/>
                </li>

                <li class="list-group-item">Apellido
                    <input type="text" class="form-control" id="lastNames" name="lastNames" required value="{{ old('lastNames', $user->lastNames ?? '') }}"/>
                </li>

                <li class="list-group-item">Email
                    <input type="text" class="form-control" id="email" name="email" required value="{{ old('email', $user->email ?? '') }}"/>
                </li>

                <li class="list-group-item">DNI
                    <input type="text" class="form-control" id="DNI" name="DNI" required value="{{ old('DNI', $user->DNI ?? '') }}"/>
                </li>

                <li class="list-group-item">Direccion
                    <input type="text" class="form-control" id="address" name="address" required value="{{ old('address', $user->address ?? '') }}"/>
                </li>

                <li class="list-group-item">Telefono
                    <input type="text" class="form-control" id="phone" name="phone" required value="{{ old('phone', $user->phone ?? '') }}"/>
                </li>
            </ul>
        </div>
            

