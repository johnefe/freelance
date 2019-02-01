<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CiervoLab</title>
    @include('layouts.section-ehead')
</head>

<body>

    @include('layouts.nav')

  <!--Main layout-->
        @yield('content')
  <!--Main layout-->
    @include('layouts/footer')
    @include('layouts.section-script')
</body>

</html>
