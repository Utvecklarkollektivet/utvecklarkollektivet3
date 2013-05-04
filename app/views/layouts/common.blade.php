@section('scripts')
	<script src="{{ URL::to_asset('js/jquery.min.js'); }}"></script>
    <script src="{{ URL::to_asset('js/app.js'); }}"></script>
@endsection

@section('css')
    <link href="{{ URL::to_asset('css/app.css'); }}" rel="stylesheet" />
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Utvecklarkollektivet</title>

    <!-- Le styles and scripts-->
    @yield('scripts')
    @yield('css')

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
</head>

<body>
	@yield('content')
</body>
</html>