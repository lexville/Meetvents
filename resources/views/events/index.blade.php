@forelse ($events as $event)
    <h1>{{$event->title}}</h1>
    <p>{{$event->description}}</p>
@empty
    <h1>Sorry No Events have been created as of yet</h1>
@endforelse
