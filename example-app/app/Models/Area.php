<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';

    protected $fillable = [
        'nome_area',
        'descricao_area'
    ];

    public function subarea()
    {
        return $this->hasMany(Subarea::class, 'area_id');
    }
}
