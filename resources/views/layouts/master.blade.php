<!DOCTYPE html>
<html>
    <head>
        <title>LaraCMS</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">LaraCMS</div>
                <div class="description">Great CMS for your website</div>
                <div class="container">
                  @include('navigation')

                  @yield('content')
              </div>
            </div>

            <div class="footer">
              @section('footer')
               This is the master footer.
              @show
            </div>
        </div>
    </body>
</html>
