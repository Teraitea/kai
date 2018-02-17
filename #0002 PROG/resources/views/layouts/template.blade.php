<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Stylesheet Bootstrap and FontAwesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Personal StyleSheet -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <title> @yield('title') </title>
    </head>

    <body>
        {{-- ici on mettra le contenu principale --}}
        <div id="main">
            <div class="container-fluid">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Javascript library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Personal JavaScript -->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>