@csrf
<div class="w-full">
    <label for="title">titulo</label>
    <input type="text" name="title" class="w-full rounded-md shadow-md p-1"
        value="{{ old('title', $service->title) }}">
    @error('title')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="description">descripcion</label>
    <input type="text" name="description" class="w-full rounded-md shadow-md p-1"
        value="{{ old('description', $service->description) }}">
    @error('description')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<input type="submit"
    class="w-full bg-indigo-800 uppercase text-white rounded-md p-2 font-bold cursor-pointer hover:bg-indigo-900 transition-all duration-300 ease-in-out hover:ring-2 hover:ring-white"
    value="{{ $btnTitle }}">
