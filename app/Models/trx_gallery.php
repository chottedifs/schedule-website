<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trx_gallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image'
    ];

    /**
     * Get the user that owns the trx_gallery
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function m_activity(): BelongsTo
    {
        return $this->belongsTo(m_activity::class, 'm_activity_id', 'id');
    }
}
