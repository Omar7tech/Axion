<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Guarded(['id'])]
class CareerApplication extends Model
{
    /** @use HasFactory<\Database\Factories\CareerApplicationFactory> */
    use HasFactory;

    public function career(): BelongsTo
    {
        return $this->belongsTo(related: Career::class);
    }
}
