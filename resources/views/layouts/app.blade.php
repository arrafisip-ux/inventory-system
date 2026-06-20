<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventaris Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

<button id="theme-toggle" class="theme-btn">
    <i class='bx bx-moon'></i>
</button>

<div class="container-fluid">
    <div class="row">

        @include('partials.sidebar')

        <main class="col-md-10 ms-sm-auto px-md-4 py-4">

            @include('partials.navbar')

            @yield('content')

        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const themeToggle = document.getElementById('theme-toggle');

    const savedTheme = localStorage.getItem('theme');

    if(savedTheme === 'light'){
        document.body.classList.add('light-mode');
        themeToggle.innerHTML = "<i class='bx bx-sun'></i>";
    }

    themeToggle.addEventListener('click', function () {

        document.body.classList.toggle('light-mode');

        if(document.body.classList.contains('light-mode')){

            localStorage.setItem('theme', 'light');

            themeToggle.innerHTML =
                "<i class='bx bx-sun'></i>";

        }else{

            localStorage.setItem('theme', 'dark');

            themeToggle.innerHTML =
                "<i class='bx bx-moon'></i>";
        }

    });

});
</script>

</body>
</html>