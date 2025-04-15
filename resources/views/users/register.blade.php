<x-layout>
	<br><br><br>
	Register

	<form action="/users" method="POST">
	@csrf

	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="{{old('name')}}"> <br>
	@error('name')
	<p>{{$message}}</p>
	@enderror

	<label for="email">Email</label>
	<input type="text" name="email" id="email" value="{{old('email')}}"> <br>
	@error('email')
	<p>{{$message}}</p>
	@enderror

	<label for="password">Password</label>
	<input type="password" name="password" id="password" value="{{old('password')}}"> <br>
	@error('password')
	<p>{{$message}}</p>
	@enderror

	<label for="confirm">Confirm Pasword</label>
	<input type="password" name="password_confirmation" id="confirm" value="{{old('password')}}"> <br>
	@error('password_confirmation')
	<p>{{$message}}</p>
	@enderror


	<button>Sign Up</button> <br><br>
	<p>
		have an account yet?
		<a href="/login">Sign in</a>
	</p>
</form>


</x-layout>