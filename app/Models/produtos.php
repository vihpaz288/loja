<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Internal\TentativeType;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = [
        'decricao',
        'precoUnitario',
        'quantidade',
        'foto1',
        'foto2',
        'foto3'

    ];

    public function pedido()
    {
        return $this->belongsTo(pedidos::class, 'produtoId', 'id');
    }
}
