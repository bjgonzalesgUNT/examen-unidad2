@csrf
<fieldset class="rounded-md border p-3 flex flex-col gap-2">
    <legend class="font-semibold text-lg uppercase">Datos Generales</legend>
    <div class="w-full">
        <label for="student_id">Estudiante</label>
        <select name="student_id" id="student_id" class="w-full rounded-md shadow-md p-1" @disabled($disabled)>
            @foreach ($students as $student)
                <option value="{{ $student->id }}">
                    {{ $student->name }}</option>
            @endforeach
        </select>
        @error('student_id')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full">
        <label for="course_id">Curso</label>
        <select name="course_id" id="course_id" class="w-full rounded-md shadow-md p-1" @disabled($disabled)>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->name }}</option>
            @endforeach
        </select>
        @error('course_id')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror
    </div>
</fieldset>
<fieldset class="rounded-md border p-3 flex flex-col gap-2">
    <legend class="font-semibold text-lg uppercase">Calificaciones</legend>
    <div class="w-full">
        <label for="unit_1">Unidad 1</label>
        <input type="text" name="unit_1" id="unit_1" class="w-full rounded-md shadow-md p-1"
            @disabled($disabled) value="{{ old('unit_1') }}">
        @error('unit_1')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full">
        <label for="unit_2">Unidad 2</label>
        <input type="text" name="unit_2" id="unit_2" class="w-full rounded-md shadow-md p-1"
            @disabled($disabled) value="{{ old('unit_2') }}">
        @error('unit_2')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror
    </div>
</fieldset>

<input type="submit"
    class="w-full bg-indigo-800 uppercase text-white rounded-md p-2 font-bold cursor-pointer hover:bg-indigo-900 transition-all duration-300 ease-in-out hover:ring-2 hover:ring-white"
    value="{{ $btnTitle }}" @disabled($disabled)>
