<x-shop::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        __('serviceit::app.shop.title')
    </x-slot>

    <div class="main p-4 text-center  ">
        <div class="row">
            <h1 class="text-3xl font-bold mb-8">@lang('serviceit::app.shop.title')</h1>
        </div>
         @php
            $services = collect([
                (object)["icon"=>"Icon", "title"=> "service1", "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus repellat ratione eveniet, quasi quo quod, mollitia hic et culpa molestiae deleniti. Suscipit provident veritatis cum eaque. Laudantium, repudiandae numquam?", "price" => 23, "id"=>1],
                (object)["icon"=>"Icon", "title"=> "service1", "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus repellat ratione eveniet, quasi quo quod, mollitia hic et culpa molestiae deleniti. Suscipit provident veritatis cum eaque. Laudantium, repudiandae numquam?  ", "price" => 244, "id"=>2],
                (object)["icon"=>"Icon", "title"=> "service1", "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus repellat ratione eveniet, quasi quo quod, mollitia hic et culpa molestiae deleniti. Suscipit provident veritatis cum eaque. Laudantium, repudiandae numquam?  ", "price" => 22, "id"=>3],
                (object)["icon"=>"Icon", "title"=> "service1", "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus repellat ratione eveniet, quasi quo quod, mollitia hic et culpa molestiae deleniti. Suscipit provident veritatis cum eaque. Laudantium, repudiandae numquam?  ", "price" => 22, "id"=>4],
                (object)["icon"=>"Icon", "title"=> "service1", "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus repellat ratione eveniet, quasi quo quod, mollitia hic et culpa molestiae deleniti. Suscipit provident veritatis cum eaque. Laudantium, repudiandae numquam?  ", "price" => 66, "id"=>5],
            ]);
        @endphp
        <div class="grid grid-cols-3 md:grid-cols-3 gap-6 mt-8">
            @forelse($services as $service)
            <div class="bg-white rounded-lg shadow-md p-6 border-red-200 border-2 border-spacing-16">
                <!-- Icon -->
                <div class="mb-4 text-4xl">
                    {!! $service->icon !!}
                </div>

                <!-- Title -->
                <h3 class="text-xl font-bold mb-2">{{ $service->title }}</h3>

                <!-- Description -->
                <p class="text-gray-600 text-sm mb-4 h-10 text-wrap py-4 text-indigo-300 text-justify">{{ Str::limit($service->description, 100) }}</p>

                <!-- Price -->
                <p class="text-lg font-bold text-blue-600 mb-4">{{ $service->price }}</p>

                <!-- Request Button -->
                <a href="#" class="w-full bg-blue-600 hover:bg-blue-700 text-read font-bold py-2 px-4 rounded transition">
                    @lang('serviceit::app.shop.request_service')
                </a>
                {{-- <a href="{{ route('serviceit.request', $service->id) }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                    @lang('serviceit::app.shop.request_service')
                </a> --}}
            </div>
            @empty
            <p class="text-gray-500">@lang('serviceit::app.shop.no_services')</p>
            @endforelse
        </div>
        <div class="flex justify-center mt-8">
            <a href="#" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded transition">
                @lang('serviceit::app.shop.load_more')
            </a>
        </div>
        <!-- Load More Button -->
        {{-- @if($services->hasMorePages())
        <div class="flex justify-center mt-8">
            <a href="{{ $services->nextPageUrl() }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded transition">
                @lang('serviceit::app.shop.load_more')
            </a>
        </div>
        @endif --}}
    </div>
</x-shop::layouts>
