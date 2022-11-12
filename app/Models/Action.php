<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Action extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Tables
     */
    public function tables(){
        return $this->belongsToMany(Table::class);
    }
}
