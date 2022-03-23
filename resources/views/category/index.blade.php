@extends('layouts.app')

@section('content')

    <div class="container w-90 mt-5">

        <!-- <nav>
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
  <a class="breadcrumb-item" href="{{route('card.index')}}">How to Use</a>
  </li>
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.index')}}">Study Plan</a>
  </li>
  <li class="nav-item">
  <a class="breadcrumb-item" href="{{route('card.index')}}">Profile</a>
  </li>
</ul>
</nav> -->

<h1>Categories</h1>
<a class="btn btn-link float-end" href="{{route('category.create')}}">Create Category</a>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="card-container">

@foreach($Categories as $category)
<div class="card-all">
<div class="flip-card" >
  <a href="{{route('card.show',$category->id)}}">
            <div class="flip-card-inner" style="background:{{$category['color']}}" >
              <div class="flip-card-front ">
                <p class="card-title">{{$category['name']}}</p>
              </div>
              </a>
            </div>
           
          </div>
          
          <a  style="margin:0.5em" class="btn btn-dark" href="{{route('category.edit', $category->id)}}">EDIT</a>
          <form action="{{route('category.destroy', $category->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-dark" type="submit">DELET</button>

</form>
      
</div >       
@endforeach
</>

</div>
@endsection


