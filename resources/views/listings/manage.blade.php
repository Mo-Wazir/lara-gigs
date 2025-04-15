<x-layout>

Manage Listing.

<table>
	<tbody>
	@unless($listings->isEmpty())
	@foreach($listings as $listing)

	 <tr>
		<td>
			<a href="">{{$listing->title}} </a>
		</td>

		<td>
			<a href="/listings/{{$listing->id}}/edit">Edit</a>
		</td>

		<td>
			<form method="POST" action="/listings/{{$listing->id}} ">
				@csrf
				@method('DELETE')
				
				<button>Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
	@else

	<tr>
		<td>
			<p>No Lisitng</p>
		</td>
	</tr>
	@endunless

	</tbody>

</table>


</x-layout>