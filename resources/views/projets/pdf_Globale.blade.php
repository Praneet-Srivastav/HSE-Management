<!DOCTYPE html>
<html>

<head>
	<title>Risk PDF Template</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		th {
			background-color: #337ab7;
			color: white;
		}

		th,
		td {
			padding: 8px;
			text-align: left;
		}

		h1 {
			color: #337ab7;
		}

		.container {
			text-align: center;
		}

		.signature-container {
			text-align: right;
		}
	</style>
</head>

<body>
	{{--
	/* DATA FROM THE CONTROLLER
	*$projets
	*$risks
	*$users
	*$sites
	*/
	--}}
	<div class="container">
		<h1>Globale Report</h1>
	</div>
	</br>
	</br>
	</br>
	{{-- SITES --}}
	<h6>List Sites</h6>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>NAME</th>
				<th>Description</th>
				<th>DATE Creaction</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sites as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->description }}</td>
				<td>{{ $item->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</br>
	</br>
	</br>
	{{-- PROEJT --}}
	<h6>List Projet</h6>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>Lib</th>
				<th>Description</th>
				<th>ADMIN</th>
				<th>SITE</th>
				<th>Projet start at</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projets as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->description }}</td>
				<td>{{ $item->user_name }}</td>
				<td>{{ $item->site_name }}</td>
				<td>{{ $item->proj_start }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</br>
	</br>
	</br>
	{{-- RISKS --}}
	<h6>List Risks</h6>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>Lib</th>
				<th>Description</th>
				<th>Projet</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($risks as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->lib }}</td>
				<td>{{ $item->description }}</td>
				<td>{{ $item->projet_name }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</br>
	</br>
	</br>
	{{-- USERS --}}
	<h6>List USERS</h6>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>ROLE</th>
				<th>DATE affectation</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->email }}</td>
				<td>{{ $item->role }}</td>
				<td>{{ $item->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</br>
	</br>
	</br>
	<p>
		Lieu : <br>
		Date: {{ date('Y-m-d') }}<br>
		Heure: {{ date('H:i:s') }}
	</p>
	<div class="signature-container">
		<h6>Signature</h6>
	</div>
</body>

</html>