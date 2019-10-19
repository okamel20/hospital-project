@include('admin.layouts.header')
@include('admin.layouts.nav')

<div class="main-panel">
	@include('admin.layouts.menu')
	
	<div class="content">
		{{-- @include('admin.layouts.headerPage') --}}
		@include('admin.layouts.msg')
    	@yield('content')
	</div>
    
        
 
@include('admin.layouts.footer')
