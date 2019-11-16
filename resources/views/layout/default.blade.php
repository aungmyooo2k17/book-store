<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>


    <div class="container">


    @yield('content')



    </div>





</body>

@include('includes.footer')

</html>