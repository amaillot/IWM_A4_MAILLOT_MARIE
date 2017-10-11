<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //permet de specifier que les champs peuvent être modifié
    protected $fillable = ['title', 'description', 'done'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
