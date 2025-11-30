<?php

namespace Webkul\ServiceIT\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ServiceStatusCast;
use Webkul\ServiceIT\Contracts\ServiceItRequest as ServiceItRequestContract;
use Webkul\ServiceIT\Enums\ServiceStatus;

class ServiceItRequest extends Model implements ServiceItRequestContract
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "customer_id_service",
        "id_service_it",
        "order_id",
        "requirements",
        "status",
        "delivery_date",
        "notes",
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        "status" => ServiceStatusCast::class,
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function service_it()
    {
        return $this->belongsTo(ServiceIT::class);
    }

}
