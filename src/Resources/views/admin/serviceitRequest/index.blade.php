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

        </div>
    </div>
    <div class="flex grid items-center content-center grid-flow-col col-span-1">
        <x-admin::datagrid :src="route('admin.serviceitRequest.index')" />
    </div>

</x-admin::layouts>
