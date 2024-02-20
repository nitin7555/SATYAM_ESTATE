<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Satyam Real Estate</title>
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg sticky-top">
         <div class="container-fluid">
            <a class="navbar-brand" style="color: white" href="{{ url('/listing') }}">SATYAM</a>
            <button
               class="navbar-toggler"
               type="button"
               data-bs-toggle="collapse"
               data-bs-target="#navbarNav"
               aria-controls="navbarNav"
               aria-expanded="false"
               aria-label="Toggle navigation"
               >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="background-color: #006ac2; z-index: 3" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a
                        class="nav-link active btn"
                        aria-current="page"
                        href="{{ url('/listing') }}"
                        >Home</a
                        >
                  </li>
                  <li class="nav-item">
                     <div class="dropdown">
                        <a
                           class="dropdown-toggle nav-link active btn"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false"
                           >
                        Residential
                        </a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">New Launches</a></li>
                           <li><a class="dropdown-item" href="#">Under Construction</a></li>
                           <li><a class="dropdown-item" href="#">Completed</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item">
                     <div class="dropdown map">
                        <a
                           class="dropdown-toggle nav-link active btn"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false"
                           >
                        Commercial
                        </a>
                        <ul class="dropdown-menu">
                           <li><a class="dropdown-item" href="#">New Launches</a></li>
                           <li><a class="dropdown-item" href="#">Under Construction</a></li>
                           <li><a class="dropdown-item" href="#">Completed</a></li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active btn" aria-current="page" href="/property-for-sale"
                        >&nbsp;&nbsp;&#8226; Property For Sale</a
                        >
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active btn" aria-current="page" href="/post-requirement"
                        >&#8226; Post Requirement</a
                        >
                  </li>
                  <li class="nav-item map">
                     <a class="nav-link active btn" aria-current="page" href="#"
                        >&#8226; Gurgoan Maps</a
                        >
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active btn" aria-current="page" href="/contact-us"><i class="fa-solid fa-phone"></i> Contact us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active btn" aria-current="page" href="/search">&nbsp;Search Property&nbsp;<i class="fa-solid fa-magnifying-glass"></i></a>
                  </li>
               </ul>
               <div class="ms-auto" style="display: flex; justify-content:center; margin-bottom: 2px">
                  <div class="dropdown">
                  <button class="btn dropdown-toggle" style="background-color: white !important" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user" style="color: #006ac2"></i></button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="/listing/create">Post Property</a></li>
                    @if(!Session::has('loginId'))
                     <li><a class="dropdown-item" href="/login">Login\SignUp</a></li>
                     @endif
                     @if(Session::has('loginId'))
                     <li><a class="dropdown-item" href="/logout">Logout</a></li>
                     @endif
                  </ul>
               </div>
               </div>
            </div>
         </div>
      </nav>
