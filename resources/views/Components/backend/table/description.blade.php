<div>
  <h2 class="text-xl font-bold text-gray-800">
    {{ $tableName }}
  </h2>

  <p class="text-sm tracking-wide text-gray-600">
    halaman {{ $pageData->currentPage() }}<span class="mx-[1px]">/</span>{{ $pageData->lastPage()
    }}...
    <span class="ml-1">{{ $pageData->count() }}</span> data, total semua
    {{ $pageData->total() }} data
  </p>
</div>