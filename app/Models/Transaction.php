<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUseri',
        'idAccount',
        'idCategory',
        'total',
        'notes'

    ];
    public $table = 'transaction';
}
