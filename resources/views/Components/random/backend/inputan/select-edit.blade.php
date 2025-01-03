<div class="w-full py-2">
  <div class="flex ml-1 justify-start gap-1.5">
    <div>
      <label for="{{ $labelFor }}"
        class="block mb-2 text-base font-medium tracking-wide text-green-500">
        {{ $labelName }}
      </label>
    </div>
  </div>

  <select id="{{ $id }}"
    name="{{ $name }}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-1 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:text-gray-700 placeholder:tracking-wide placeholder:ps-1 tracking-wide cursor-pointer">

    <option disabled selected>
      {{ $placeholder }}
    </option>

    @foreach($items as $item)
      <option value="{{ $item->id }}"
        {{ in_array($item->name, $valueDefault)
          ? 'selected'
          : '' }}>
        {{ $item->id }} - {{ $item->name }}
      </option>
    @endforeach
  </select>

  @error($error)
    <div class="mt-1 ml-2">
      <p class="font-serif text-sm font-medium tracking-wide text-red-500">
        {{ $message }}
      </p>
    </div>
  @enderror
</div>
