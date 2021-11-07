<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $fillable = ['band_id', 'event_name', 'organizer', 'date', 'location', 'ticket_price', 'event_instagram', 'contact_person', 'contact_phone', 'event_poster'];

    public function bands()
    {
        return $this->belongsTo(Band::class, 'band_id', 'id');
    }
}
