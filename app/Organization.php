<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'organization_id', 'id');
    }
}
