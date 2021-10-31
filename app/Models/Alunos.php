<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class Alunos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alunos';

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
        'name'
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
    protected $casts = [
        'name' => 'string'
    ];

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
    public function alunoCursos()
    {
        return $this->belongsTo(AlunoCursos::class, 'aluno_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function notas()
    {
        return $this->belongsTo(Notas::class, 'aluno_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function turmaDisciplaMatriculados()
    {
        return $this->belongsTo(TurmaDisciplaMatriculados::class, 'aluno_id', 'id');
    }
}
