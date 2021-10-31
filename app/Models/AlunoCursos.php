<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 */
class AlunoCursos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'aluno_cursos';

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
        'aluno_id', 'curso_id'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function alunos()
    {
        return $this->belongsTo(Alunos::class, 'id', 'aluno_id');
    }

    /**
     * @return BelongsTo
     */
    public function cursos()
    {
        return $this->belongsTo(Cursos::class, 'id', 'curso_id');
    }
}
