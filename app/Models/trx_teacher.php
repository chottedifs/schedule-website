<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class trx_teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $filllable =  [
        'm_class_id',
        'fullname',
        'institution',
        'study_program',
        'graduation_year',
        'subjects',
        'teaching_class',
        'email',
        'image'
    ];

    /**
     * Get the user that owns the trx_teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function m_class(): BelongsTo
    {
        return $this->belongsTo(m_class::class, 'm_class_id', 'id');
    }
}
