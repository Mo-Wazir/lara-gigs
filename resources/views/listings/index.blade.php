<x-layout>
<h1> {{ $heading }} </h1>

@unless(count($listings) === 0)

<form action="/">
   <input type="text" name="search" placeholder="search laravel gigs">
   <button>Search</button>
</form>

@foreach ($listings as $listing)
<h2>
   <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }} </a>
</h2>
<p>
    {{ $listing['description'] }} 
</p>
@endforeach

@else
<p>No listings found</p>
@endunless


   {{$listings->links()}}


<p>
   <a href="/listings/create"> Post a job </a>
</p>

<x-flash-message />
</x-layout>