<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'CRUD operation using Laravel')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">CRUD operation on MySQL using Laravel</h2>
        <h3 class="text-center" style="margin-top: 5px; padding-top: 0;">Part 10: Final tweaks</h3>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div style="position: fixed; bottom: 10px; right: 10px; color: green">
        <strong>
           Copyright
        </strong>
    </div>
</body>
</html>