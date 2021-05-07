<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $table = 'goals';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'importance', 'obstacles', 'action_plan', 'deadline'];

    public function user(){

        return $this->belongsTo(Goal::class);
        
        }
    public function category(){

            return $this->belongsTo(Goal::class);
            
            }
    public function tasks(){

                return $this->hasMany(Goal::class);
                
                }

}
