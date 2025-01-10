<div class ="tw-pb-7 tw-pt-4">
    <ul class="list-group tw-w-96">
            <li class="list-group-item">Nombre
                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $study->name ?? '') }} {{ old('name', $subject->name ?? '') }}"/>
            </li>

            <li class="list-group-item">Descripcion
                <input type="text" class="form-control" id="description" name="description" required value="{{ old('description', $study->description ?? '') }} {{ old('description', $subject->description ?? '') }}"/>
            </li>
        </ul>
    </div>


