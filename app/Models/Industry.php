<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    /** @use HasFactory<\Database\Factories\IndustryFactory> */
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['name', 'user_id'];

    public function companies(): HasMany{
        return $this->hasMany(Company::class);
    }
    
}
