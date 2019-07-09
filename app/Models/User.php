<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    //

    protected $hidden = [
        'password',
    ];

    public function get_user_icon()
    {
        if($this->icon == null){
            return "/img/profile_small.jpg";
        }
        return $this->icon;
    }
}
