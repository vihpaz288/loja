<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoItens extends Model
{
    use HasFactory;
    protected $table = 'pedido_items';

    public function produtos()
    {
        return $this->belongsTo(produtos::class, 'produtoId', 'id');
    }
}
