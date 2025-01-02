<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abiturient extends Model
{
    use HasFactory;
   public $table='abiturients';
   protected $fillable=[
    'question',
    'Answer_a',
    'Answer_b',
    'Answer_c',
    'Answer_d',
    'Answer_t'
   ];
}
