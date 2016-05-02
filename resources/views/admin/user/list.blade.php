@extends('admin.master')
@section('title', 'User List')
@section('main')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">No.</td>
		<td>Full name</td>
		<td>Username</td>
		<td>Level</td>
		<td class="action_col">Action</td>
	</tr>
	<?php $index = 0;?>
	@foreach($users as $user)
	<?php $index++; ?>
	<tr class="list_data">
        <td class="aligncenter">{!! $index !!}</td>
        <td class="list_td aligncenter">{!! $user['name'] !!}</td>
        <td class="list_td aligncenter">{!! $user['username'] !!}</td>
        <td class="list_td aligncenter">
            @if ($user['level'] == 1 && $user['id'] == 1) 
                <span style="color: red; font-weight: bold;">Super Admin</span>
            @elseif ($user['level'] == 1)
                <span style="color: blue; font-weight: bold;">Admin</span>
            @else
                <span style="color: black;">Member</span>
            @endif
        </td>
        <td class="list_td aligncenter">
            <a href=""><img src="{!! asset('admin/images/edit.png') !!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href=""><img src="{!! asset('admin/images/delete.png') !!}" /></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection