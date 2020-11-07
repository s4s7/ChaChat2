<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    // Commentsテーブルへの不正な値の登録を防ぐ
    protected $fillable = [
        'body',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo('App\Article');
    }

    
}
