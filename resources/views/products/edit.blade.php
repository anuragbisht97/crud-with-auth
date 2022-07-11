@extends('dashboard')

@section('meta')

<title>Update</title>

@endsection

@section('content')

<div class="">

	<h2 class="">Update product.</h2>

</div><br>

<div>
    <div class="">
	<form method="post"  action="{{ url('updateproduct/'.$data->pki_product_id)}}">

		@csrf
		@method('put')
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label for='product_id' class="">Product Id : </label>
		<input id="auto_id" name='product_id' type='text' value="{{ $data->pki_product_id }}" required='true' readonly class=""><br><br>

		<label for='product_name' class="">Product Name : </label>
		<input name='product_name' type='text' value="{{ $data->product_name }}" required='true' class=""><br>

		<label for='category' class="">Category : </label>
		<input name='category' type='text' value="{{ $data->category }}" class="" placeholder="Require"><br><br>

		<label for='description' class="">Description : </label>
		<input name='description' type='text' value="{{ $data->description }}" class=""><br><br>

		<label for='price' class="">Price : </label>
		<input name='price' type='text' value="{{ $data->price }}" class=""><br><br>

		<button type='submit' class="" style="border: 1px solid black; border-radius: 0.2rem;"><b>CLICK TO UPDATE</b></button>

	</form>
    </div>
</div>

@endsection
