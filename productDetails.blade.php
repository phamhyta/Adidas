@extends('layout.adminHeader')
@section('adminContent')
<div class="mx-24 mt-10">
    <h1 class="text-3xl mb-5">Shoes id 00001</h1>
    <form action="">
        <label class="mr-5" for="name">Product name</label>
        <input class="bg-gray-200 my-5 mr-60 w-1/4" type="text" name="name" id="name">
        
        <label class="mr-5" for="type">Type</label>
        <input class="bg-gray-200 my-5 mr-96 w-1/4" type="text" name="type" id="type">
        
        <label class="mr-20" for="color">Color</label>
        <input class="bg-gray-200 my-5 mr-60 w-1/4" type="text" name="color" id="color">
        
        <label class="mr-5" for="price">Price</label>
        <input class="bg-gray-200 my-5 mr-96 w-1/4" type="text" name="price" id="price">
        
        <label class="mr-20" for="size">Size</label>
        <input class="bg-gray-200 my-5 mr-60 w-1/4" type="text" name="size" id="size">
        
        <label class="mr-5" for="discount">Discount</label>
        <input class="bg-gray-200 my-5 mr-96 w-1/4" type="text" name="discount" id="discount">
        
        <label class="mr-14" for="function">Function</label>
        <input class="bg-gray-200 my-5 mr-60 w-1/4" type="text" name="function" id="function">

        <button class="border ml-48 px-4 py-2 hover:bg-red-500">Save edit</button>
    </form>

    <div class="mt-10">Image</div>
</div>
@endsection