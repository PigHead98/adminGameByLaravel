<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- third party css -->
    <link href="{{ asset("assets/libs/datatables/dataTables.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/libs/datatables/responsive.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/libs/datatables/buttons.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/libs/datatables/select.bootstrap4.css") }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />
</head>