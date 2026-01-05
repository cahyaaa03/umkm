<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Umkm extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}