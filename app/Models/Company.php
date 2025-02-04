<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'homepage',
        'mypage',
        'status',
        'process',
        'industry_id'
    ];

    /**
     * 業界（Industry）とのリレーション
     */
    public function industry(): BelongsTo {
        return $this->belongsTo(Industry::class);
    }

    /**
     * エントリーシート（EntrySheet）とのリレーション
     */
    public function entrysheets(): HasMany {
        return $this->hasMany(EntrySheet::class);
    }
}
