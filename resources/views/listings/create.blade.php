create
<p>Post a gig</p>

<form action="/listings" method="POST" enctype="multipart/form-data">
	@csrf

	<label for="company">Company Name</label>
	<input type="text" name="company" id="company" value="{{old('company')}}"> <br>
	@error('company')
	<p>{{$message}}</p>
	@enderror

	<label for="title">Job title</label>
	<input type="text" name="title" id="title" value="{{old('title')}}"> <br>
	@error('title')
	<p>{{$message}}</p>
	@enderror

	<label for="location">Job location</label>
	<input type="text" name="location" id="location" value="{{old('location')}}"> <br>
	@error('location')
	<p>{{$message}}</p>
	@enderror

	<label for="website">website/url</label>
	<input type="text" name="website" id="website" value="{{old('website')}}"> <br>
	@error('website')
	<p>{{$message}}</p>
	@enderror

	<label for="email">email</label>
	<input type="text" name="email" id="email" value="{{old('email')}}"> <br>
	@error('email')
	<p>{{$message}}</p>
	@enderror

	<label for="logo">Company logo</label>
	<input type="file" name="logo" id="logo"> <br> <br>
	@error('logo')
	<p>{{$message}}</p>
	@enderror

	<label for="tags">tags</label>
	<input type="text" name="tags" id="tags" value="{{old('tags')}}"> <br>
	@error('tags')
	<p>{{$message}}</p>
	@enderror

	<label for="description">Job description</label>
	<textarea type="text" name="description" id="description" cols="5" rows="10">{{old('description')}}</textarea> <br>
	@error('description')
	<p>{{$message}}</p>
	@enderror

	<button>Create Gig</button> <br><br>
	<a href="/">Back</a>
</form>


