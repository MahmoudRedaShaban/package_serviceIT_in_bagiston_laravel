<?php

namespace Webkul\ServiceIT\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webkul\ServiceIT\Contracts\ServiceIT as ServiceITContract;

class ServiceIT extends Model implements ServiceITContract
{
    use HasFactory;


    protected $table = 'service_it';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "slug",
        "price",
        "description",
        "duration",
        "status"
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        "status" => 'boolean',
    ];

    public function serviceItRequest()
    {
        return $this->hasMany(ServiceItRequest::class);
    }
}
