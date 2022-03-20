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
        <input type="text" name="icon" class="form-control mb-3" placeholder="card icon" />
        <input type="text" name="front" class="form-control mb-3" placeholder="card front" />
    
        <textarea class="form-control mb-3" name="back" rows="4" placeholder="card back"></textarea>
        <input type="text" name="color" class="form-control mb-3" placeholder="card color" />
        <select name="category_id">
        @foreach($Categories as $category)
   <option value={{$category->id}}>{{$category->name}}</option>
    @endforeach

        </select>
        <button class="btn btn-primary float-end px-5" type="submit" >Submit</button>

</form>

@endsection