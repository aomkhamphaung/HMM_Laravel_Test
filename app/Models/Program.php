<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['title'];
    use HasFactory;
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}