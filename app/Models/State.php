<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
        'phonecode'
    ];

    public function country() : BelongsTo {
        return $this->belongsTo(Countries::class);
    }

    public function employees() : HasMany {
        return $this->hasMany(Employee::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
