<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLASH CARDS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">
       <!-- Styles -->
       <link rel="stylesheet" type="text/css" href="{{url('css/card.css')}}" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>
<body style="width:100% !important">
    
    <div class="container w-90 mt-5">
        <nav>
        <a class="navbar-brand" href="{{route('card.index')}}">
            <img src="{{asset('images/flash_cards.png')}}" alt="logo" />
        </a>
    <ul class="nav justify-content-center">
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.index')}}">HOME</a>
  </li>
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.create')}}">Create</a>
  </li>
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.index')}}">How to use</a>
  </li>
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.index')}}">Profile</a>
  </li>
</ul>
</nav>


        

@yield('content')
    </div>
</body>
</html>