@extends('dashboard')

@section('meta')

<title>Create</title>
<meta name="_token" content="{{ csrf_token() }}">

@endsection

@section('content')

<div class="">
	<h2 class="">Create product.</h2>
</div><br>

<div>
    <div class="">
	<form method="post"  action="{{ route('storeproduct')}}" class="">

		@csrf
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label for='product_name' class="">Product Name : </label>
		<input name='product_name' type='text' required='true' class=""><br>

		<label for='category' class="">Category : </label>
		<input name='category' type='text' class=""><br><br>

		<label for='description' class="">Description : </label>
		<input name='description' type='text' class=""><br><br>

		<label for='price' class="">Price : </label>
		<input name='price' type='text' class=""><br><br>

		<button type='submit' class="" style="border: 1px solid black; border-radius: 0.2rem;"><b>CLICK TO CREATE</b></button>
	</form>
    </div>
</div>

@endsection
