<!DOCTYPE html>
<html>
    <head>
        <title>LaraCMS</title>
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

        <!-- Apps css -->
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

        <!-- include internal JS-->
        <script src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>
