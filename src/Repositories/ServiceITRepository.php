<?php

namespace Webkul\ServiceIT\Repositories;

use Webkul\Core\Eloquent\Repository;

class ServiceITRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return 'Webkul\ServiceIT\Contracts\ServiceIT';
    }
}