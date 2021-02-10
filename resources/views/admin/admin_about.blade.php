<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a  href="/admin/about/tambah"> TAMBAH CONTENT</a>
<table class="table table-bordered table-striped">
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Title_Address</th>
			<th>Content_Address</th>
			<th>Opsi</th>
		</tr>
		@foreach($about as $ab)
		<tr>
			<td>{!! $ab->title !!}</td>
			<td>{!! $ab->content !!}</td>
			<td>{!! $ab->title_address !!}</td>
			<td>{!! $ab->content_address !!}</td>
			
			<td>
				<a class="btn btn-warning" href="/admin/about/edit/{{ $ab->id }}">Edit</a> <br>
				<a class="btn btn-danger" href="/admin/about/hapus/{{ $ab->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>