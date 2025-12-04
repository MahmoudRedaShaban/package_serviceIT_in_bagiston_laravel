<?php

namespace Webkul\ServiceIT\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\ServiceIT\Contracts\ServiceIT;
use Webkul\ServiceIT\Models\ServiceIT as ModelsServiceIT;
use Webkul\ServiceIT\Models\ServiceITProxy;

class ServiceITRepository extends Repository
{
    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ModelsServiceIT::class;
    }

    public function getStatus()
    {
        return [
            'total' => $this->count(),
            'unactive' => $this->findWhere(['status' => 0])->count(),
            'active' => $this->findWhere(['status' => 1])->count(),
        ];
    }


}
