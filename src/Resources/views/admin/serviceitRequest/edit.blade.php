<x-admin::layouts>
    <!-- Title of the page -->
    <x-slot:title>
        @lang('serviceit::app.admin.title')
    </x-slot>

    <div class="flex items-center justify-center min-h-screen py-8">
        <div class="w-full max-w-md px-6 py-6 bg-white rounded shadow-md">
            @if ($errors->any())
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 border border-red-400 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.serviceitRequest.update', $service->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="id_service_it" class="block mb-2 text-sm font-medium text-gray-700">ID Service IT</label>
                    <select name="id_service_it" id="id_service_it">
                       @foreach ($list as $item)
                            <option value="{{ $item->id }}"  {{ $item->id ==$service->id_service_it ? 'selected':''  }}  >{{ $item->name }}</option>
                       @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="order_id" class="block mb-2 text-sm font-medium text-gray-700">Order ID</label>
                    <input id="order_id" name="order_id" type="text" required
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring"
                           value="{{ old('order_id', $service->order_id) }}" placeholder="Order ID">
                </div>

                <div class="mb-4">
                    <label for="requirements" class="block mb-2 text-sm font-medium text-gray-700">Requirements</label>
                    <textarea id="requirements" name="requirements" rows="4"
                              class="w-full px-3 py-2 border rounded focus:outline-none focus:ring"
                              placeholder="Requirements">{{ old('requirements', $service->requirements) }}</textarea>
                </div>

                <div class="">
                     <div class="mb-4">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-700">Status</label>
                    <select id="status" class="w-full"  name="status" >
                        <option value="pending" >Pending</option>
                        <option value="approved" >Approved</option>
                        <option value="rejected" >Rejected</option>
                    </select>
                </div>
                </div>

                <div class="mb-4">
                    <label for="delivery_date" class="block mb-2 text-sm font-medium text-gray-700">Delivery Date</label>
                    <input id="delivery_date" class="w-full" name="delivery_date" type="datetime-local"
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring"
                           value="{{ old('delivery_date', $service->delivery_date) }}">
                </div>

                <div class="mb-4">
                    <label for="notes" class="block mb-2 text-sm font-medium text-gray-700">Notes</label>
                    <textarea id="notes" name="notes" rows="3"
                              class="w-full px-3 py-2 border rounded focus:outline-none focus:ring"
                              placeholder="Notes">{{ old('notes', $service->notes) }}</textarea>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin::layouts>
