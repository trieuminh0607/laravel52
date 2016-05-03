@extends('admin.master')
@section('title', 'User Edit')
@section('main')
@include('admin.common.error')
<form action="" method="POST" style="width: 650px;">
	<fieldset>
		<legend>User Information</legend>
		<span class="form_label">Full name:</span>
		<span class="form_item">
			<input type="text" name="full_name" class="textbox" value="{!! $user['name'] !!}" />
		</span><br />
		<span class="form_label">Username:</span>
		<span class="form_item">
			<input type="text" name="username" class="textbox" value="{!! $user['username'] !!}" disabled="disabled" />
		</span><br />
		<span class="form_label">Password:</span>
		<span class="form_item">
			<input type="password" name="password" class="textbox" />
		</span><br />
		<span class="form_label">Confirm password:</span>
		<span class="form_item">
			<input type="password" name="confirm_password" class="textbox" />
		</span><br />
		<span class="form_label">Email:</span>
		<span class="form_item">
			<input type="text" name="email" class="textbox" value="{!! $user['email'] !!}" />
		</span><br />
		<span class="form_label">Level:</span>
		<span class="form_item">
			<input type="radio" name="level" value="1" /> Admin 
			<input type="radio" name="level" value="2" checked="checked" /> Member
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnUserEdit" value="Submit" class="button" />
		</span>
	</fieldset>
</form>
@endsection