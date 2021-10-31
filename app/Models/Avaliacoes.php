<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $faltas
 */
class Avaliacoes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'avaliacoes';

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
        'np1', 'np2', 'exame', 'faltas', 'disciplina_id', 'turma_id'
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
        'faltas' => 'int'
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
    public function notas()
    {
        return $this->belongsTo(Notas::class, 'avaliacao_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function turmaDisciplinas()
    {
        return $this->belongsTo(TurmaDisciplinas::class, 'avaliacao_id', 'id');
    }
}
