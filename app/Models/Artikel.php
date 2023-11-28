<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = 'game';

    public function scopeFilter($query, array $filters){

        // if(isset($filters['search']) ? $filters['search'] : false) {}

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['game'] ?? false, function($query, $game){
            return $query->whereHas('game', function($query) use ($game){
                $query->where('slug', $game);
            });
        }); 
    }

    public function game() {
        return $this->belongsTo(Game::class);
    }
}
