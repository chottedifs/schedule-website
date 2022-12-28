<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trx_schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'schedule'
    ];

    /**
     * Get the user that owns the trx_schedule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function m_class(): BelongsTo
    {
        return $this->belongsTo(m_class::class, 'm_class_id', 'id');
    }
}
