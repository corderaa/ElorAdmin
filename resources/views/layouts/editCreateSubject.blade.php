<div class =" tw-pt-4">
    <ul class="list-group tw-w-96">
            <li class="list-group-item">Nombre
                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $subject->name ?? '') }}"/>
            </li>

            <li class="list-group-item">Descripcion
                <input type="text" class="form-control" id="description" name="description" required value="{{ old('description', $subject->description ?? '') }}"/>
            </li>
            <li class="list-group-item">Modulo
                <select class="form-control" id="study_id" name="study_id" required>
                    @foreach ($studies as $study)

                    <option value="{{$study->id}}" {{ old( $subject->study_id ?? '') == $study->id ? 'selected' : '' }}>{{$study->name}}</option>

                    @endforeach

                </select>
        </li>
        </ul>
</div>


