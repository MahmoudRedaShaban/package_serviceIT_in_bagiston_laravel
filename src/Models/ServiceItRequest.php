<?php

namespace Webkul\ServiceIT\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webkul\ServiceIT\Casts\ServiceStatusCast;
use Webkul\ServiceIT\Contracts\ServiceItRequest as ServiceItRequestContract;

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
        return $this->belongsTo(ServiceIT::class,'id_service_it','id');
    }

}
