@if(Session::has('message'))
<div id="alerts">
	<div class="alert alert-dismissable alert-{{ Session::get('alert-class', 'success') }}">{{ Session::get('message') }}
		<button class="close" role="close" data-dismiss="alert">&times;</button>
	</div>
</div>
@endif
