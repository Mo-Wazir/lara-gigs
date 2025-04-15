<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laragigs</title>
</head>
<body>

	<h1><a href="/">Laragigs</a></h1>
	@auth

	<ul>
		<b>
			Welcome {{auth()->user()->name}}
		</b>
		<li>
		<a href="/listings/manage">Manage Listing</a> <br>
		</li>
		<li>
			<form class="inline" method="POST" action="/logout">
				@csrf
				<button type="submit">logout</button>
			</form>
		</li>

	</ul>

	@else
	<nav>
		<a href="/register">Register</a> <br>
		<a href="/login">Login</a> <br>
	</nav>

	@endauth

	@yield('content')

</body>

{{$slot}}

</html>