<div class="w-full py-2">
  <div class="flex ml-1 justify-start gap-1.5">
    <div>
      <label for="permission"
        class="block mb-1 text-base font-medium tracking-wide text-green-500">
        Role..permission
      </label>
    </div>
  </div>
</div>

<div class="border border-gray-300 rounded-2xl">
  <div class="p-4 grid h-[320px] grid-cols-1 overflow-y-scroll gap-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($groupper as $controller => $permissions)
      <fieldset>
        <legend class="mb-2 ml-2 text-sm font-medium tracking-wide text-red-600">
          {{ ucfirst($controller) }}Controller
        </legend>

        @foreach ($permissions as $permission)
          <div class="flex items-center px-1 ml-1">
            <div>
              <div class="flex items-center">
                <input type="checkbox"
                  id="permission[{{ $permission->name }}]"
                  name="permission[{{ $permission->name }}]"
                  value="{{ $permission->name }}"
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-400 rounded-md cursor-pointer"
                />
              </div>
            </div>

            <div class="text-sm font-medium
              text-gray-800 whitespace-nowrap p-2 py-1.5 tracking-wide">
              {{ $permission->name }}
            </div>
          </div>
        @endforeach
      </fieldset>
    @endforeach
  </div>
</div>

@error('permission')
  <div class="mt-1 ml-2">
    <p class="font-serif text-sm font-medium tracking-wide text-red-500">
      {{ $message }}
    </p>
  </div>
@enderror
