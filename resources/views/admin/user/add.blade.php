@extends('admin.master')
@section('title', 'User Add')
@section('main')
@include('admin.common.error')
<form action="" method="POST" style="width: 650px;">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>User Information</legend>
		<span class="form_label">Full name:</span>
		<span class="form_item">
			<input type="text" name="full_name" class="textbox" value="{!! old('full_name') !!}" />
		</span><br />
		<span class="form_label">Username:</span>
		<span class="form_item">
			<input type="text" name="username" class="textbox" value="{!! old('username') !!}" />
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
			<input type="text" name="email" class="textbox" value="{!! old('email') !!}" />
		</span><br />
		<span class="form_label">Level:</span>
		<span class="form_item">
			<input type="radio" name="level" value="1" checked="checked" @if(old('level') == 1) checked @endif /> Admin 
			<input type="radio" name="level" value="2" @if(old('level') == 2) checked @endif /> Member
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnUserAdd" value="Submit" class="button" />
		</span>
	</fieldset>
</form>
@endsection