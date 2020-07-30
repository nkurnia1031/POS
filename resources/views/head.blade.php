
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    .bg-1 {
        background: #7F7FD5;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
     .bg-2{
          background: #7F00FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #E100FF, #7F00FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #E100FF, #7F00FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

    </style>
    <!-- Styles -->
</head>
