<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        @lang('serviceit::app.admin.title')
    </x-slot>

    <!-- Page Content -->
    <div class="flex items-center justify-center">
        <div class="w-full max-w-lg p-6 text-center bg-white rounded-lg shadow-md">
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Order ID</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->order_id }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Customer Name</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->customer?->name }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Customer Email</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->customer?->email }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Service Name</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->service_it->name }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Service Price</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->service_it->price }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Status</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->status }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Delivery Date</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->delivery_date }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Notes</label>
                <p class="text-lg font-semibold text-gray-700">{{ $order->notes }}</p>
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700">Requirements</label>
                <p class="text-lg font-semibold text-gray-700">{{ json_decode($order->requirements, true) ?? 'N/A' }}</p>
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ route('admin.serviceitRequest.edit', $order->id) }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
            <br />
            @if (bouncer()->hasPermission('serviceit'))
                <div class="flex items-center justify-center">
                    <a href="{{ route('admin.serviceitRequest.edit', $order->id) }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        <i class="fas fa-edit"></i> Send Mail To Customer
                    </a>
                </div>
            @endif

            <br>
            <br>
            @if (core()->getConfigData('serviceit.settings'))
                <p>Email : {{ core()->getConfigData('serviceit.settings.max_return_email') }}</p>
            @endif

        </div>
    </div>

</x-admin::layouts>
