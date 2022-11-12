<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Users
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }
    /**
     * panels
     */
    public function panels(){
        return $this->belongsToMany(Panel::class);
    }
    /**
     * DB Actions
     */
    public function actions(){
        return $this->belongsToMany(Action::class);
    }
    /**
     * DB Tables
     */
    public function tables(){
        return $this->belongsToMany(Table::class);
    }
}
