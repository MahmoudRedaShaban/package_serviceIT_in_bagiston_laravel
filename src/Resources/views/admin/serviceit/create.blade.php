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
    <div class="flex items-center justify-between mt-8 grep-4 mac-sm:flex-wrap">

        <form method="POST" action="{{ route('admin.serviceit.store') }}" class="w-full max-w-lg">
            <div class="mb-4"> @csrf
            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                Name
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Service Name">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="price">
                Price
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="price" id="price" value="{{ old('price') }}" type="text" placeholder="Service Price">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="description">
                Description
            </label>
            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="description" name="description" placeholder="Service Description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-4">
            <label  class="block mb-2 text-sm font-bold text-gray-700" for="duration">
                Duration
            </label>
            <input required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="duration" id="duration" type="datetime-local" value="{{ old('duration') }}" placeholder="Service Duration">
            </div>
            <div class="mb-4">
            <label class="block mb-2 text-sm font-bold text-gray-700" for="status">
                Status
            </label>
            <select class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="status" id="status" >
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            </div>
            <div class="flex items-center justify-between">
            <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                Create
            </button>
            </div>
        </form>
    </div>


</x-admin::layouts>
