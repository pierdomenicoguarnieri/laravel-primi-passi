<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>

  <body class="bg-dark">
    <nav class="navbar bg-black bg-opacity-25 position-fixed top-0 left-0 w-100">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
          <img src="logo.png" width="50">
        </a>

        <ul class="navbar-nav flex-row">
          <li class="nav-item px-2">
            <a class="nav-link text-white" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link text-white" href="{{route('about')}}">About Us</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link text-white" href="{{route()}}">Contacts</a>
          </li>
        </ul>
      </div>
    </nav>
  </body>
</html>
