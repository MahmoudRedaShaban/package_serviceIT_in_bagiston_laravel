<x-shop::layouts>

    <!-- Title of the page -->
    <x-slot:title>
       {{ __('serviceit::app.shop.title')}}
    </x-slot>

    <div class="main p-4 text-center  ">
        <div class="row">
            <h1 class="text-3xl font-bold mb-8">@lang('serviceit::app.shop.title')</h1>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-3 gap-6 mt-8">
            @forelse($services as $service)
            <div class="bg-white rounded-lg shadow-md p-6 border-red-200 border-2 border-spacing-16">
                <!-- Icon -->
                <div class="mb-4 text-4xl text-center flex items-center w-full">
                    <p clas="flex items-center w-full" style="margin: auto"><span class="icon-product flex items-center justify-center w-[60px] h-[60px] bg-white border border-black rounded-full text-4xl text-navyBlue p-2.5 max-md:m-auto max-md:w-16 max-md:h-16 max-sm:w-10 max-sm:h-10 max-sm:text-2xl" role="presentation"></span></p>
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold mb-2">{{ $service->title }}</h3>

                <!-- Description -->
                <p class="text-gray-600 text-sm mb-4 h-10 text-wrap py-4 text-indigo-300 text-justify">{{ Str::limit($service->description, 100) }}</p>

                <!-- Price -->
                <p class="text-lg font-bold text-blue-600 mb-4">{{ $service->price }}</p>

                <!-- Request Button -->

                <a href="{{ route('shop.serviceit.request', $service->id) }}" class="w-full bg-blue-600 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded transition">
                    @lang('serviceit::app.shop.request_service')
                </a>
            </div>
            @empty
            <p class="text-gray-500">@lang('serviceit::app.shop.no_services')</p>
            @endforelse
        </div>

        <!-- Load More Button -->
        @if($services->hasMorePages())
        <div class="flex justify-center mt-8">
            <a href="{{ $services->nextPageUrl() }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded transition">
                @lang('serviceit::app.shop.load_more')
            </a>
        </div>
        @endif
    </div>
</x-shop::layouts>
