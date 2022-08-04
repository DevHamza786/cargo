@if(!empty(config('admin.public.global.js')))
	@foreach(config('admin.public.global.js') as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif

@if(!empty(config('admin.public.pagelevel.js.'.$action)))
	@foreach(config('admin.public.pagelevel.js.'.$action) as $script)
			<script src="{{ asset($script) }}" type="text/javascript"></script>
	@endforeach
@endif
