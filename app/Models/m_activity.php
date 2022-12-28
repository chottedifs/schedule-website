<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class m_activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'activity_name',
    ];

    /**
     * Get all of the comments for the m_activity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trx_gallery(): HasMany
    {
        return $this->hasMany(trx_gallery::class);
    }
}
