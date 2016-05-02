@if (Session::has('notification'))
<div class="{!! Session::get('notification') !!}">
    {!! Session::get('notification_message') !!}
</div>
@endif
