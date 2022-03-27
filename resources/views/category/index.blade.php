@extends('layouts.app')

@section('content')
<Style>
  .item1 {
  grid-area: myArea;
  

}

.grid-container {
  display: grid;
  grid-template-areas: 'myArea myArea myArea myArea ';
  grid-gap: 10px;

  padding: 10px;
  margin-top:1rem;
 
}

.grid-container > div {
 
  text-align: center;
  padding: 20px 0;
  font-size: 18px;
  
}

.flex-container {
  display: flex;
justify-content: center

}

.flex-container > div {
  font-size: 30px;
}
@media (max-width: 1024px){
    .grid-container {

grid-template-areas: 'myArea myArea myArea';


}
}
@media (max-width: 775px){
    .grid-container {

grid-template-areas: 'myArea myArea';
 margin-left:5rem;

}
}
  @media (max-width: 765px){
    .grid-container {

grid-template-areas: 'myArea';
margin-left:0rem;

}


footer{
  margin-top:575px;
 
}

}
</Style>

    <div class="  mt-5">
    <h1 class="mb-3 mt-5 text-center " >Categories</h1>

<a class="btn btn-link float-end mb-5" href="{{route('category.create')}}">Create Category</a>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@else
<div class="alert alert-error" style="background-color:#ff4500;color:white">
    {{session('error')}}
</div>
@endif


  <!-- <div class="grid-container mb-5 mt-5">
  @foreach($Categories as $category)
  <div class="item" style="background:{{$category['color']}};color:white;border-radius: 15px;text-align:center">
    <h3 class="card-title">{{$category['name']}}</h3>

  </div>
  @endforeach
  </div> -->

  
  <div class="grid-container mb-5">

@foreach($Categories as $category)
<div class="card-all">
<div class="flip-card" >
  <a href="{{route('card.show',$category->id)}}">
            <div  style="background:{{$category['color']}}; 
    width: 100%;
    height: 100%;
    text-align: center;

    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" >
              <div class="flip-card-front ">
                <p class="card-title" >{{$category['name']}}</p>
              </div>
              </a>
            </div>
           
          </div>
          <div class="flex-container">
          <div>
          <a  style="margin:0.5em" class="btn btn-dark" href="{{route('category.edit', $category->id)}}"><i class="fas fa-edit"></i></a>
          </div>
          <div>
          <form action="{{route('category.destroy', $category->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-dark" type="submit"><i class="fas fa-trash"></i></button>

</form>
</div>
</div>
      
</div >       
@endforeach



</>

</div>

<!-- Footer Section -->
<footer class=" text-center text-whit mt-5"  style="background-color:#000000">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3"  style="background-color:#000000">
    <a class="text-white" href="https://mdbootstrap.com/" style="text-decoration: none;">  © 2020 Copyright:FlashCards.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--End Footer Section -->

@endsection


