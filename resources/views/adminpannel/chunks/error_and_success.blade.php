@if (count($errors) > 0 || session('status_ok') || session('success') || session('warning'))
<div class="span12">
	<div class="widget">
		<div class="widget-header"> <i class="icon-ok"></i>
			<h3>Server Response :)</h3>
		</div>
		<div class="widget-content">
			<div class="control-group">
				<label class="control-label">Alerts</label>
				<div class="controls">
					@if (count($errors) > 0)
					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">×</button>
						@foreach ($errors->all() as $error)
						<strong>Warning!</strong>{{ $error }}<br>
						@endforeach
						
					</div>
					@endif
					@if (session('status_ok'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Success!</strong>{{ session('status_ok') }}.
					</div>
					@endif
					@if (session('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Success!</strong>{{ session('success') }}.
					</div>
					@endif
					@if (session('warning'))
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Warning!</strong> {{ session('warning') }}
					</div>

					@endif
				</div> <!-- /controls -->	
			</div>
		</div>
	</div>
</div>

@endif