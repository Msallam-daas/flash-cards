@extends('layouts.app')

@section('content')
<h1>Category Update</h1>
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

<form action="{{route('category.update', $category->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="icon" class="form-control mb-3" placeholder="category icon" value="{{$category['icon']}}"/>
        <input type="text" name="name" class="form-control mb-3" placeholder="category front" value="{{$category['name']}}"/>
        <input type="text" name="color" class="form-control mb-3" placeholder="category back" value="{{$category['color']}}"/>
        <button class="btn btn-primary float-end px-5" type="submit" >Submit</button>

</form>



@endsection