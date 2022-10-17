@extends('layout.app');
@section('title','Home page');
@section('content')
<h1 class="display-one m-5">PHP Laravel Project - CRUD</h1>
<div class="text-center"><a href="students/add" class="btn btn-outline-primary ">Add new product</a></div>

<table class="table mt-3  text-left">
	<thead>
		<tr>
			<th scope="col ">Full name</th>
            <th scope="col" class="pr-5" >Birthday</th>
			<th scope="col" class="pr-5">Address</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@forelse($students as $student)
		<tr>
			<td>{!! $student->fullname !!}</td>
            <td>{!! $student->birthday !!}</td>
			<td class="pr-5 text-right">{!! $student->address !!}</td>
			<td>
                <a href="students/{{ $student->id }}/edit" class="btn btn-outline-primary">Edit</a>
				<a href="students/{{ $student->id }}/delete" class="btn btn-outline-danger ml-1" >Delete</a>
                <a href="" class="btn btn-outline-success">Detail</a>
            </td>
		</tr>
		@empty
		<tr>
			<td colspan="3">No products found</td>
		</tr>
		@endforelse
	</tbody>
</table>