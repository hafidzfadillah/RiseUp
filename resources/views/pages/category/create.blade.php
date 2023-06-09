@extends('layouts.default')
@section('title','Create Category')

@section('content')
<div class="content bg-white p-2 px-4">
    <div class=" mt-5">
        <form enctype="multipart/form-data" action="{{route('categories.store')}}" method="post">

            @csrf
            <div class="form-group  mb-5">
                <label for="name" class="mb-2">Category</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Category">
            </div>
            <button type=" submit" class="btn btn-primary-green ">Submit</button>
        </form>
    </div>
</div>
@stop
