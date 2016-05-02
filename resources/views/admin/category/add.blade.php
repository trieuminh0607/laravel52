@extends('admin.master')
@section('title', 'Category Add')
@section('main')
<form action="" method="POST" style="width: 650px;">
    @include('admin.common.error')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Category Information</legend>
		<span class="form_label">Category parent:</span>

		<span class="form_item">
			<select name="category_type" class="select">
				<option value="0">---root---</option>
				<?php selectboxCategory($categories, 0, '', old('category_type')); ?>
			</select>
		</span><br />
		<span class="form_label">Category name:</span>
		<span class="form_item">
			<input type="text" name="category_name" class="textbox" value="{!! old('category_name') !!}" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnCateAdd" value="Submit" class="button" />
		</span>
	</fieldset>
</form>
@endsection