@extends('layouts.app')

@section('content')
<h1>Card Create</h1>
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

<form action="{{route('card.store')}}" method="post">
        @csrf
        <input type="text" name="icon" class="form-control mb-3" placeholder="movie Name" />
        <input type="text" name="front" class="form-control mb-3" placeholder="movie gener" />
        <textarea class="form-control mb-3" name="back" rows="4" placeholder="Description"></textarea>
        <input type="text" name="color" class="form-control mb-3" placeholder="movie gener" />
        <button class="btn btn-primary float-end px-5" type="submit" >Submit</button>

</form>

@endsection