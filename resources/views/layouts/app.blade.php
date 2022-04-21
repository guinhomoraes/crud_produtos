
<!DOCTYPE html>
<html>
<head>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<meta charset="UTF-8">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/paper-dashboard.css?v=2.0.1')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('js/paper-dashboard.min.js')}}"></script>
    <script src="{{asset('js/index')}}"></script>

</head>

<body  style="width: 100%;height: 100vh;">

	<div class="container-fluid w-100 h-100 border-danger">

            <div class="row h-100 border-danger">

                <div class="col-7 col-md-4 col-lg-7 d-none d-md-block d-xl-block border bg-dark" style="    background: #303266 !important;">
                    <div class="row w-100 h-100 p-0 ml-0 d-flex align-items-center">
                        <div class="col-12 d-flex justify-content-center">
                            
                        </div>
                    </div>
				</div>

                <div class="col-xs-12 col-md-8 col-lg-5 border d-flex align-items-center ml-0 fundo">

					@yield('content')

				</div>

			</div>
	</div>

</body>


</html>












