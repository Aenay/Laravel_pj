@props(['name'])
@error($name)
    <p class="mt-2 text-sm/6 text-red-600" id="title-error">{{ $message }}</p>
@enderror
