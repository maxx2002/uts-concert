<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $table = 'band';

    protected $fillable = ['band_name', 'genre', 'band_member', 'band_price', 'band_email', 'band_phone', 'band_poster'];

    public function events()
    {
        return $this->hasMany(Event::class, 'band_id', 'id');
    }
}
