<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/paper-dashboard.css?v=2.0.1')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

</head>
<body>  
    
    
	<div class="wrapper">

		@component('sidebar')
        @endcomponent

		<div class="main-panel">

            @component('navbar')
            @endcomponent

            <div class="content">
                {{ $slot }}
            </div>

            <footer class="footer p-2 mt-1">

            </footer>

		</div>

	</div>

    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('js/paper-dashboard.min.js')}}"></script>
    <script src="{{asset('js/index')}}"></script>

</body>
</html>