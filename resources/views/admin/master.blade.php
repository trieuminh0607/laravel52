<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <link rel="stylesheet" href="{!! asset('admin/css/style.css')!!}" />
	<title>@yield('title')</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Administration :: @yield('title')
    </div>
    <div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="{!! url('administration') !!}">Home</a> |
					<a href="{!! url('administration/user') !!}">User</a> |
					<a href="{!! url('administration/category') !!}">Cageterory</a> |
					<a href="">News</a>
				</td>
				<td align="right">
					Welcome {!! Auth::user()->username !!}!| <a href="{!! url('administration/logout') !!}">Logout</a>
				</td>
			</tr>
		</table>
    </div>
    <div id="main">
    @include('admin.common.notification')
    @yield('main')
	</div>
    <div id="bottom">
        Copyright © 2016 by https://www.facebook.com/trieuminh0607
    </div>
</div>
<script type="text/javascript" src="{!! asset('admin/js/jquery-2.2.3.min.js')!!}"></script>
<script type="text/javascript" src="{!! asset('admin/js/notification.js')!!}"></script>
</body>
</html>