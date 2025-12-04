<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        @lang('serviceit::app.admin.title')
    </x-slot>
    <div class="row">
        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-400 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
    </div>
    <!-- Page Content -->
    <div class="flex items-center justify-between grep-4 mac-sm:flex-wrap">

        {{-- <h1 class="mb-4 text-2xl font-bold">@lang('serviceit::app.admin.edit-title')</h1> --}}
        <form method="POST" action="{{ route('admin.serviceit.update', $service->id) }}" class="w-full max-w-lg">
            @method('PUT')
            <div class="mb-4">
            @csrf
            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
            Name
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="name" name="name" value="{{ old('name', $service->name) }}" type="text" placeholder="Service Name">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="price">
            Price
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="price" name="price" value="{{ old('price', $service->price) }}" type="text" placeholder="Service Price">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="description">
            Description
            </label>
            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="description" name="description" placeholder="Service Description">{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="duration">
            Duration
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="duration" name="duration" type="datetime-local" value="{{ old('duration', $service->duration) }}" placeholder="Service Duration">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="status">
            Status
            </label>
            <select class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="status" name="status">
            <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            </div>
            <div class="flex items-center justify-between">
            <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
            Update
            </button>
            </div>
        </form>

    </div>


</x-admin::layouts>
