<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable =[
        'name', 'position','goals',' teams-id'
    ];
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
