<div class="px-6 py-3">
  <div class="flex items-center gap-x-2">
    <img class="inline-block object-cover object-top rounded-full size-8"
      src="{{ $asset ? asset(
        'storage/' . $asset
      ) : asset($assetDefault) }}"
      alt="image"
    />
  </div>
</div>
