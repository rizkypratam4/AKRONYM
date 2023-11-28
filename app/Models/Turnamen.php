<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnamen extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $fillable = [
    //     'tournament_name', 'entry_fee', 'prize_pool', 'slots_available',
    //     'slots_occupied', 'jadwal_mulai', 'jadwal_selesai', 'organizer', 'description'
    // ];

    protected $guarded = ['id'];
}
