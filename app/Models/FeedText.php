<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static Builder ofType(string $type)
 * @mixin Builder
 */
class FeedText extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeOfType(Builder $query, string $type): Builder {
        return $query->where('type', $type);
    }
}
