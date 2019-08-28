<?php

namespace Tests\Feature;

use App\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventsTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanSeeAllTheEvents()
    {
        $this->withoutExceptionHandling();
        $event = factory(Event::class)->create();
        // dd($event->toArray());
        $this->get('/events')->assertSee($event->toArray()['description']);
    }
}
