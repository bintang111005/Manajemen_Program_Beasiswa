<!DOCTYPE html>

<html>

<head>

<title>

Manajemen Program Beasiswa

</title>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
background:#f5f7fa;
}

.navbar{
background:#102A43;
}

.btn-main{
background:#10B981;
color:white;
}

.card{
border:none;
border-radius:16px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

<div class="container">

<a
class="navbar-brand text-white"
href="/">

Beasiswa

</a>

<div>

<a
href="/program"
class="text-white me-3">

Program

</a>

<a
href="/faq"
class="text-white me-3">

FAQ

</a>

<a
href="/contact"
class="text-white">

Kontak

</a>

</div>

</div>

</nav>

<div class="container py-5">

@yield('content')

</div>

</body>

</html>