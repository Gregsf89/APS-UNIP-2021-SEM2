<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 */
class Notas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notas';

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
        'aluno_id', 'avaliacao_id'
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
    public function alunos()
    {
        return $this->belongsTo(Alunos::class, 'id', 'aluno_id');
    }

    /**
     * @return BelongsTo
     */
    public function avaliacoes()
    {
        return $this->belongsTo(Avaliacoes::class, 'id', 'avaliacao_id');
    }
}
