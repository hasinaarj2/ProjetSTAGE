<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<!--CONTENU--
<h1>Page de garde</h1>

<p>par andrianasolo hasina
</p>
<h2>lien de anisah</h2>
<p>op c est la fin du texte:</p>

<a href="https://www.w3schools.com">This is a link</a>

-->
    @include('layouts.navbar')
    <div class="container">
        @yield('contenu')

    </div>
</body>
</html>
