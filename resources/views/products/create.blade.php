@extends('dashboard')

@section('meta')

<title>Create</title>
<meta name="_token" content="{{ csrf_token() }}">

@endsection

@section('content')

<div class="form-pos"><br>
	<form method="post"  action="{{ route('storeproduct')}}" class="">

		@csrf
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label for='product_name' class="form-label">Product Name : </label>
		<input name='product_name' type='text' required='true' class="form-control"><br>

		<label for='category' class="form-label">Category : </label>
		<input name='category' type='text' required='true' class="form-control"><br>

		<label for='description' class="form-label">Description : </label>
		<input name='description' type='text' required='true' class="form-control"><br>

		<label for='price' class="form-label">Price : </label>
		<input name='price' type='text' required='true' class="form-control"><br>

		<button type='submit' class="btn btn-outline-success btn-sm"><strong>CREATE</strong></button>
	</form>
</div>

@endsection
