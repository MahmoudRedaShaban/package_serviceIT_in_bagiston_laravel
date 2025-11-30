<?php

namespace Webkul\ServiceIT\Repositories;

use Webkul\Core\Eloquent\Repository;

class ServiceItRequestRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Webkul\ServiceIT\Contracts\ServiceItRequest';
    }

}
