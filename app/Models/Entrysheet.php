<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrysheet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'status',
        'deadline',
        'user_id',
        'company_id'
    ];

    /**
     * 企業（Company）とのリレーション
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * ユーザー（User）とのリレーション
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * コンテンツ（Content）とのリレーション
     */
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
