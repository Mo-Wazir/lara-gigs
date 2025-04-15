<x-layout>
	<br><br><br>
	Login

	<form action="/users/authenticate" method="POST">
	@csrf

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



	<button>Sign in</button> <br><br>
	<p>
		Don't have an account yet?
		<a href="/register">Sign up</a>
	</p>
	
</form>


</x-layout>