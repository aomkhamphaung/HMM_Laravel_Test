<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = ['ac_year'];
    use HasFactory;
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}