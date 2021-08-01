<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPr extends Model
{

	protected $fillable = [
        'name', 'wilaya', 'phone', 'detail', 'created_at' , 'statut'
    ];
    use HasFactory;
}
