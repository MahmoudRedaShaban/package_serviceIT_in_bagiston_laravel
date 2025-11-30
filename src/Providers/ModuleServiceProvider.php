<?php

namespace Webkul\ServiceIT\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * Models.
     *
     * @var array
     */
    protected $models = [
        \Webkul\ServiceIT\Models\ServiceIT::class,
        \Webkul\ServiceIT\Models\ServiceItRequest::class,
    ];

    public function boot()
    {
        // $this->app->concord->registermodel(
        //     \Webkul\ServiceIT\Contracts\ServiceIT::class,
        //     \Webkul\ServiceIT\Models\ServiceIT::class
        // );
        $this->app->concord->registermodel(
            \Webkul\Customer\Contracts\Customer::class,
            \Webkul\ServiceIT\Models\Customer::class
        );
    }
}
