<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * エントリーシート（EntrySheet）との多対多リレーション
     */
    public function entrysheets()
    {
        return $this->belongsToMany(EntrySheet::class, 'entrysheet_tag');
    }
}
