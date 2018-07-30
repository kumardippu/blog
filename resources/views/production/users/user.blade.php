@include('production.common.sidebar')

@include('production.common.menu-footer')

@include('production.common.top-navigation')

<!-- page content -->
<div class="right_col" role="main">
	<h1>This is test only</h1>
	<p>User id is {{ $id }} </p>
</div>

@include('production.common.footer')

<!-- Custom Theme Scripts -->
<script src="{{ asset('public/build/js/custom.min.js') }}"></script>


