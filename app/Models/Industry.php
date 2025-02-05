<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Industry extends Model
{
    /** @use HasFactory<\Database\Factories\IndustryFactory> */
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['name', 'user_id'];


    public function owner(): BelongsTo {
        return $this->belongsTo(User::class);
    }


    public function companies(): HasMany{
        return $this->hasMany(Company::class, 'industry_id', 'id');
    }


    
}
