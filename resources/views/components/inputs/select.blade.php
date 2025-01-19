@props(['id', 'name', 'label' => null, 'value' => '', 'options' => []])

<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{$id}}">
            {{$label}}
        </label>
    @endif
    <select
        id="{{$id}}"
        name="{{$name}}"
        class="w-full px-4 py-2 border rounded focus:outline-none
        @error($name) border-red-500 @enderror"
    >
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{$optionValue}}" {{ $optionValue == $value ? 'selected' : '' }}>
                {{$optionLabel}}
            </option>
        @endforeach
    </select>
    @error($name)
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
