<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Countries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'phonecode'
    ];

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}