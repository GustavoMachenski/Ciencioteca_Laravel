<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    use HasFactory;

    protected $table = 'subarea';

    protected $fillable = [
        'nome_subarea',
        'descricao_subarea',
        'area_id'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
