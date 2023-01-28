<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section>
        <header>
            <a href="/"><img src="images/logo.png" class='logo'></a>
            <div class="toggle" onclick="ToggleMenu();"></div>
            <ul class='navigation'>
                <li><a href="/">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="/contact">Contact</a></li>
                <li class="log"><a href="/login">Login</a></li>
                <li class="buttonLogin">
                    <a href="#">
                      <span id="cartCouter" style="margin-right: 10px;">0</span>
                      <i class="fas fa-shopping-cart" id="shopcart"></i>
                    </a>
                </li>
            </ul>
        </header>
        @yield('section')
        </section>


    <script src="{{asset('js/app.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <div id='copyright'>
       <div class='wrapper'>
           &copy; 2018. <b>Kokumi World</b> All Right Reserved.
       </div>
    </div>


</body>
</html>
