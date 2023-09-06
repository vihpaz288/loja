<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrinho extends Model
{
    use HasFactory;
    protected $table = 'carrinhos';
    protected $fillable = [
        'produtoID',
        'usuarioID',
        'quantidade',
        
    ];
    public function produtos(){
        return $this->belongsTo(Produtos::class, 'produtoID', 'id');
    }
}
