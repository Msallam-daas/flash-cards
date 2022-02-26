

@extends('layouts.app')

@section('content')

<h1>Flash Card</h1>
<a class="btn btn-link float-end" href="{{route('card.create')}}">Create Card</a>
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<div class="container">

@foreach($cards as $card)

<div class="flip-card" style="background:{{$card['color']}}">
            <div class="flip-card-inner" >
              <div class="flip-card-front ">
                <p class="card-title">{{$card['front']}}</p>
              </div>
              <div class="flip-card-back ">
                <p class="card-context">{{$card['back']}}</p>
              </div>
            </div>
           
          </div>
          <a class="dropdown-item" href="{{route('card.edit', $card->id)}}">EDIT</a>
          <form action="{{route('card.destroy', $card->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="dropdown-item" type="submit">DELET</button>

</form>
      
          
@endforeach
</div>

@endsection


