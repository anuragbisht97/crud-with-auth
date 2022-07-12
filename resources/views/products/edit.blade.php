@extends('dashboard')

@section('meta')

<title>Update</title>

@endsection

@section('content')

<div class="form-pos"><br>
	<form method="post"  action="{{ url('updateproduct/'.$data->pki_product_id)}}">

		@csrf
		@method('put')
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label for='product_id' class="form-label">Product Id : </label>
		<input id="auto_id" name='product_id' type='text' value="{{ $data->pki_product_id }}" required='true' readonly class="form-control"><br>

		<label for='product_name' class="form-label">Product Name : </label>
		<input name='product_name' type='text' value="{{ $data->product_name }}" required='true' class="form-control"><br>

		<label for='category' class="form-label">Category : </label>
		<input name='category' type='text' value="{{ $data->category }}" required='true' class="form-control"><br>

		<label for='description' class="form-label">Description : </label>
		<input name='description' type='text' value="{{ $data->description }}" required='true' class="form-control"><br>

		<label for='price' class="form-label">Price : </label>
		<input name='price' type='text' value="{{ $data->price }}" class="form-control"><br>

		<button type='submit' class="btn btn-outline-warning btn-sm"><b>UPDATE</b></button>

	</form>
</div>

@endsection
