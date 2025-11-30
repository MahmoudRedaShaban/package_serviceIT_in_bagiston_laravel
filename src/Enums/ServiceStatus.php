<?php

namespace Webkul\ServiceIT\Enums;

enum ServiceStatus:string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';


    public function label($this): string
    {
        return match($this){
            self::Pending => "Pending Approval",
            self::Approved => "Approved Successfully",
            self::Rejected => "Request Rejected"
        };
    }

}
