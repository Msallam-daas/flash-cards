@extends('layouts.app')

@section('content')
<h1>Category Create</h1>
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

<form action="{{route('category.store')}}" method="post">
        @csrf
        <input type="text" name="icon" class="form-control mb-3" placeholder="category icon" />
        <input type="text" name="name" class="form-control mb-3" placeholder="category name" />
        <input type="text" name="color" class="form-control mb-3" placeholder="category color" />
        <button class="btn btn-primary float-end px-5" type="submit" >Submit</button>

</form>

@endsection