@extends('admin.master')
@section('title', 'Category List')
@section('main')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">No.</td>
		<td>Category Name</td>
		<td class="action_col">Action</td>
	</tr>
	<?php displayCategory($categories, 0, null);?>
</table>
@endsection