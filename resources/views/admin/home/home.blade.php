@extends('admin.master')
@section('title', 'Home Top')
@section('main')
<table class="function_table" style="margin: 0px auto;">
	<tr>
		<td class="function_item user_list"><a href="{!! url('administration/user') !!}">User</a></td>
		<td class="function_item user_add"><a href="{!! url('administration/user/add') !!}">Add User</a></td>
		<td rowspan="3" class="statistics_panel">
			<h3>Thống kê:</h3>
			<ul>
				<li>Tổng số user:</li>
				<li>Tổng số danh mục:</li>
				<li>Tổng số tin:</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="function_item cate_list"><a href="{!! url('administration/category') !!}">Category</a></td>
		<td class="function_item cate_add"><a href="{!! url('administration/category/add') !!}">Add Category</a></td>
	</tr>
	<tr>
		<td class="function_item news_list"><a href="">News</a></td>
		<td class="function_item news_add"><a href="">Add News</a></td>
	</tr>
</table>
@endsection