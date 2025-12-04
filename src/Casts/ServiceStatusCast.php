<?php

namespace Webkul\ServiceIT\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Webkul\ServiceIT\Enums\ServiceStatus;

class ServiceStatusCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $atributes)
    {
        return ServiceStatus::from($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value instanceof ServiceStatus ? $value->value : $value;
    }
}
