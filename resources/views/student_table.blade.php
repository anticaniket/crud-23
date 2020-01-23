@extends('layouts.app')

@section('content')
<a href="{{ '/' }}" class="btn btn-info">welcome</a>
<table class=" table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $value)
		<tr>
			<td>{{$value->name}}</td>
			<td>{{$value->email}}</td>
			<td>{{$value->password}}</td>
			<td>{{$value->address}}</td>
			<td>
				<a href="{{url('/edit')}}/{{$value->id}}" class="btn btn-info">Edit</a>
				<a href="{{url('/delete')}}/{{$value->id}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>









@endsection