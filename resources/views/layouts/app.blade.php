```php
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Manajemen Program Beasiswa</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

<style>

:root{

--bg:#FFFFFF;

--navbar:#002B2B;

--text:#001A1A;

--primary:#008080;

--secondary:#2BC4C4;

--text-soft:#667575;

}



/* ======================
GLOBAL
====================== */

*{

margin:0;

padding:0;

box-sizing:border-box;

font-family:'Plus Jakarta Sans',sans-serif;

}

html{

scroll-behavior:smooth;

}

body{

background:var(--bg);

color:var(--text);

overflow-x:hidden;

}



/* ======================
NAVBAR
====================== */

.navbar{

background:var(--navbar);

padding:18px 0;

position:sticky;

top:0;

z-index:1000;

box-shadow:

0 3px 15px rgba(0,0,0,.08);

}



.navbar-brand{

color:#FFFFFF !important;

font-size:30px;

font-weight:800;

letter-spacing:-1px;

}



.nav-link{

color:#FFFFFF !important;

margin-left:28px;

font-size:15px;

font-weight:500;

text-decoration:none;

transition:.3s;

}



.nav-link:hover{

opacity:.8;

}



/* ======================
BUTTON
====================== */

.btn-main{

background:var(--primary);

color:#FFFFFF;

padding:14px 34px;

border-radius:14px;

font-weight:600;

text-decoration:none;

border:none;

display:inline-block;

transition:.3s;

}



.btn-main:hover{

background:var(--secondary);

transform:

translateY(-3px);

color:#FFFFFF;

}



.btn-outline-main{

border:

2px solid var(--primary);

padding:14px 34px;

border-radius:14px;

font-weight:600;

text-decoration:none;

color:var(--primary);

transition:.3s;

}



.btn-outline-main:hover{

background:var(--primary);

color:#FFFFFF;

}



/* ======================
HERO
====================== */

.hero-section{

position:relative;

padding:120px 0;

overflow:hidden;

animation:

heroLoad 1s ease;

}



.hero-badge{

display:inline-block;

background:#E8F8F8;

color:var(--primary);

padding:10px 18px;

border-radius:30px;

font-size:14px;

font-weight:600;

}



.hero-title{

font-size:64px;

font-weight:800;

line-height:1.08;

letter-spacing:-2px;

max-width:650px;

}



.hero-text{

margin-top:24px;

font-size:18px;

line-height:1.8;

color:var(--text-soft);

max-width:540px;

}



/* ======================
IMAGE
====================== */

.hero-visual{

position:relative;

display:flex;

justify-content:center;

align-items:center;

}



.hero-image{

width:100%;

max-width:560px;

height:430px;

object-fit:cover;

border-radius:30px;

box-shadow:

0 20px 50px rgba(0,43,43,.10);

transition:.5s;

}



.hero-image:hover{

transform:

translateY(-8px);

}



/* ======================
MESH BACKGROUND
====================== */

.mesh-left{

position:absolute;

width:450px;

height:450px;

left:-180px;

top:100px;

background:#002B2B;

opacity:.06;

filter:blur(160px);

border-radius:50%;

}



.mesh-right{

position:absolute;

width:420px;

height:420px;

right:-120px;

bottom:50px;

background:#2BC4C4;

opacity:.12;

filter:blur(160px);

border-radius:50%;

}



/* ======================
SECTION
====================== */

.section{

padding:100px 0;

}



/* ======================
CARD
====================== */

.stat-card,

.category-card{

background:#FFFFFF;

padding:36px;

border-radius:24px;

box-shadow:

0 8px 25px rgba(0,0,0,.05);

transition:.3s;

}



.category-card:hover{

transform:

translateY(-8px);

}



.stat-card h2{

font-size:50px;

font-weight:800;

color:var(--primary);

}



.icon{

font-size:55px;

margin-bottom:20px;

}



/* ======================
TESTIMONIAL
====================== */

.testimonial{

padding:80px;

border-radius:30px;

background:

linear-gradient(

135deg,

#002B2B,

#004545

);

color:#FFFFFF;

}



/* ======================
FOOTER
====================== */

footer{

padding:50px 0;

text-align:center;

color:#667575;

}



/* ======================
ANIMATION
====================== */

.fade-up{

opacity:0;

transform:

translateY(50px);

transition:

all .9s ease;

}



.fade-up.show{

opacity:1;

transform:

translateY(0);

}



@keyframes heroLoad{

from{

opacity:0;

transform:

translateY(30px);

}

to{

opacity:1;

transform:

translateY(0);

}

}



/* ======================
RESPONSIVE
====================== */

@media(max-width:992px){

.hero-title{

font-size:46px;

letter-spacing:-1px;

}



.hero-text{

font-size:16px;

}



.hero-image{

height:auto;

max-width:100%;

}



.hero-visual{

margin-top:50px;

}



.nav-link{

margin-left:12px;

}



.mesh-left,

.mesh-right{

display:none;

}

}

</style>

</head>

<body>



<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="/">

ScholarHub

</a>



<div>

<a class="nav-link d-inline" href="/">

Beranda

</a>

<a class="nav-link d-inline" href="/program">

Program

</a>

<a class="nav-link d-inline" href="#cara-kerja">

Cara Kerja

</a>

<a class="nav-link d-inline" href="/contact">

Kontak

</a>

<a href="#" class="btn btn-main ms-4">

Masuk

</a>

</div>

</div>

</nav>



@yield('content')



<script>

const observer =

new IntersectionObserver(

(entries)=>{

entries.forEach(

(entry)=>{

if(entry.isIntersecting){

entry.target.classList.add('show');

}

}

);

},

{

threshold:0.15

}

);



document

.querySelectorAll('.fade-up')

.forEach(

(el)=>observer.observe(el)

);

</script>

</body>

</html>
```
