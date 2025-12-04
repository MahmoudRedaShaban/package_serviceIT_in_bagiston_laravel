<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        @lang('serviceit::app.admin.title')
    </x-slot>

    <!-- Page Content -->
    <div class="page-content">
        <div class="flex content-between justify-between row ">
           <div class="items-start">
             <h1>{{ __('serviceit::app.admin.content') }}</h1>
            </div>
           <div class="py-2 item-end " style="width: 20%;">
             <a href="{{route('admin.serviceit.create')}}" class="text-white bg-blue-200 btn hover:bg-slate-800 " style="background-color: #202683; padding:2% 5%; color: #fff; border-radius: 5%;">{{__('serviceit::app.admin.create_service')}}</a>
           </div>
        </div>
    </div>
    <div class="flex grid items-center content-center grid-flow-col col-span-1">
        <x-admin::datagrid :src="route('admin.serviceit.index')" />
    </div>

</x-admin::layouts>
