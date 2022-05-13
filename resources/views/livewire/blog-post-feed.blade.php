<div>
    <table class="table">
		<thead>
			<tr>
				<th scope="col" class="p-2">Title</th>
				<th scope="col" class="p-2">Author</th>
				<th scope="col" class="p-2">Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td>
						{{ $post->title }}
					</td>
					<td>
						{{ $post->author->username }}
					</td>
					<td>
						{{ $post->date->short }}
					</td>
				</tr>
			@endforeach
	</table>
</div>
