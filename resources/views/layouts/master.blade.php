<!DOCTYPE html>
<html>
    <head>
        <title>LaraCMS</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">LaraCMS</div>
                <div class="description">Great CMS for your website</div>
                @include('navigation')

                @yield('content')
            </div>

            <div>
              @section('footer')
               This is the master footer.
              @show
            </div>
        </div>
    </body>
</html>
