<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoItem extends Model
{
    use HasFactory;
    
    protected $table = 'pedido_items';
    protected $fillable = [
        'produtoId',
        'pedidoId',
        'valor',
        'quantidade',
        'subtotal',
        
    ];
    public function produtos(){
        return $this->belongsTo(Produtos::class, 'produtoId', 'id');
    }
}
