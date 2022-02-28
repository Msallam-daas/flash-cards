@extends('layouts.app')

@section('content')
<h1>Card Update</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach

    </ul>
</div>
@endif

<form action="{{route('card.update', $card->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="icon" class="form-control mb-3" placeholder="card icon" value="{{$card['icon']}}"/>
        <input type="text" name="front" class="form-control mb-3" placeholder="card front" value="{{$card['front']}}"/>
        <input type="text" name="back" class="form-control mb-3" placeholder="card back" value="{{$card['back']}}"/>
        <input type="text" name="color" class="form-control mb-3" placeholder="card color" value="{{$card['color']}}"/>
        <button class="btn btn-primary float-end px-5" type="submit" >Submit</button>

</form>



@endsection