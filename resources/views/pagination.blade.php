<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
</head>
<body>
<div class="row">
	<div class="container">
		<table>
			<thead>
				<th>>Name</th>
				<th>email</th>
			</thead>
			<tbody>
				
					@foreach($users as $user) 
					<tr>
						<td>{{$loop->index+1}}</td>
					<td> {{$user->name}}  </td>
					<td>   {{$user->email}}</td>
					</tr>
					@endforeach
				
			</tbody>
			{{$users->links()}}
			
		</table>
	</div>
</div>
</body>
</html>