<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['entrysheet_id', 'question', 'answer'];

    /**
     * エントリーシート（EntrySheet）とのリレーション
     */
    public function entrysheet()
    {
        return $this->belongsTo(EntrySheet::class);
    }
}
