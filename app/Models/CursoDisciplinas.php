<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 */
class CursoDisciplinas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curso_disciplinas';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curso_id', 'disciplina_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'aluno_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplinas::class, 'aluno_id', 'id');
    }
}
