<?php

namespace App\Models;

use App\Classes\UseDynamicConnection;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use UseDynamicConnection;
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
