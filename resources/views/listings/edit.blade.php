create
<p>Edit Gig </p>

<p>Edit {{$listing->title}} </p>

<form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PUT')

	<label for="company">Company Name</label>
	<input type="text" name="company" id="company" value="{{$listing->company}}"> <br>
	@error('company')
	<p>{{$message}}</p>
	@enderror

	<label for="title">Job title</label>
	<input type="text" name="title" id="title" value="{{$listing->title}}"> <br>
	@error('title')
	<p>{{$message}}</p>
	@enderror

	<label for="location">Job location</label>
	<input type="text" name="location" id="location" value="{{$listing->location}}"> <br>
	@error('location')
	<p>{{$message}}</p>
	@enderror

	<label for="website">website/url</label>
	<input type="text" name="website" id="website" value="{{$listing->website}}"> <br>
	@error('website')
	<p>{{$message}}</p>
	@enderror

	<label for="email">email</label>
	<input type="text" name="email" id="email" value="{{$listing->email}}"> <br>
	@error('email')
	<p>{{$message}}</p>
	@enderror

	<label for="logo">Company logo</label>
	<input type="file" name="logo" id="logo"> <br> <br>
	@error('logo')
	<p>{{$message}}</p>
	@enderror

	<img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image')}} " alt="no image to show">


	<label for="tags">tags</label>
	<input type="text" name="tags" id="tags" value="{{$listing->tags}}"> <br>
	@error('tags')
	<p>{{$message}}</p>
	@enderror

	<label for="description">Job description</label>
	<textarea type="text" name="description" id="description" cols="5" rows="10">{{$listing->description}}</textarea> <br>
	@error('description')
	<p>{{$message}}</p>
	@enderror

	<button>Edit Gig</button> <br><br>
	<a href="/">Go Back</a>
</form>
