
<h1>    <a href="/"> {{ $heading }} </a> </h1>

<h2>
	{{ $listing['title'] }}
</h2>

<p>
    {{ $listing['description'] }} 
</p>

<img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image')}} " alt="no image to show">

<p>
 <i>Company Name:</i>   {{ $listing->company }} 
</p>

<p>
 <i>Location </i>   {{ $listing->location }} 
</p>


<a href="/listings/{{$listing->id}}/edit">Edit gig</a> <br><br>

<form action="/listings/{{$listing->id}}" method="POST">
	@csrf
	@method('DELETE')

	<button>Delete gig</button>

</form>
