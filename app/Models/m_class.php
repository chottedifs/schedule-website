<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class m_class extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'class_name'
    ];

    /**
     * Get all of the comments for the m_class
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trx_teacher(): HasMany
    {
        return $this->hasMany(trx_teacher::class);
    }

    /**
     * Get the user associated with the m_class
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trx_schedule(): HasOne
    {
        return $this->hasOne(trx_schedule::class);
    }
}
