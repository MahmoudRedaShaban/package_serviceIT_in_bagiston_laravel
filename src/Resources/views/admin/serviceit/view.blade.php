<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        @lang('serviceit::app.admin.title')
    </x-slot>

    <!-- Page Content -->
    <div class="flex items-center justify-center">
        <div class="w-full max-w-lg p-6 text-center bg-white rounded-lg shadow-md">
            {{-- <h1 class="mb-4 text-2xl font-bold">@lang('serviceit::app.admin.view-title')</h1> --}}
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                <p class="text-lg font-semibold text-gray-700">{{ $service->name }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Price</label>
                <p class="text-lg font-semibold text-gray-700">{{ $service->price }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Description</label>
                <p class="text-lg font-semibold text-gray-700">{{ $service->description }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Duration</label>
                <p class="text-lg font-semibold text-gray-700">{{ $service->duration }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700"></label>div>Status</label>
                <p class="text-lg font-semibold text-gray-700">{{ $service->status }}</p>
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ route('admin.serviceit.edit', $service->id) }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

</x-admin::layouts>
