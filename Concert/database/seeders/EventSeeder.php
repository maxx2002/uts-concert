<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'event_name' => 'Evolution',
            'band_id' => 1,
            'organizer' => 'Amigo Events',
            'date' => '25 Januari 2021',
            'location' => '91 Linden Drive',
            'ticket_price' => '50000',
            'event_instagram' => '@evolutionevent',
            'contact_person' => 'Rick',
            'contact_phone' => '0894736192',
            'event_poster' => 'event-posters/evolution.jpg'
        ]);

        DB::table('event')->insert([
            'event_name' => 'Neon Music Fest',
            'band_id' => 2,
            'organizer' => 'Freedom Park',
            'date' => '23 Juni 2021',
            'location' => 'Dumaguete Street',
            'ticket_price' => '150000',
            'event_instagram' => '@neonevent',
            'contact_person' => 'Dale',
            'contact_phone' => '0894736145',
            'event_poster' => 'event-posters/neon.jpg'
        ]);

        DB::table('event')->insert([
            'event_name' => 'Urban Music',
            'band_id' => 3,
            'organizer' => 'Nightclub',
            'date' => '25 Juli 2021',
            'location' => 'Club Logo',
            'ticket_price' => '120000',
            'event_instagram' => '@urbanmusic',
            'contact_person' => 'Kevin',
            'contact_phone' => '08134436192',
            'event_poster' => 'event-posters/urban.jpg'
        ]);
    }
}
