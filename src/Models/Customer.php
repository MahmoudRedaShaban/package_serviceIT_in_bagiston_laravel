<?php

namespace Webkul\ServiceIT\Models;
use Webkul\Customer\Models\Customer as BaseCustomer;
class Customer extends BaseCustomer {


    public function serviceItRequests()
    {
        return $this->hasMany(ServiceItRequest::class);
    }
}
