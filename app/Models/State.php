<?php

namespace App\Models;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'name'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function employees()
    {
        return $this->hasMany(Employees::class);
    }
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
