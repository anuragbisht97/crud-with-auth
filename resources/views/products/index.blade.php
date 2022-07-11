@extends('dashboard')

@section('meta')

<title>Index</title>
<meta name="_token" content="{{ csrf_token() }}">

@endsection

@section('content')

<div class="">
	<h2 class=""><b>Products</b></h2>
	<a href = "{{ route('createproduct') }}" style="border: 1px solid black; border-radius: 0.2rem;">
		CLICK TO ADD
	</a>
</div>

<div class="">
	<table class="" id="productTable">
		<thead class="">
			<tr>
				<th class="">#</th>
				<th class="">PRODUCT NAME</th>
				<th class="">CATEGORY</th>
				<th class="">DESCRIPTION</th>
				<th class="">PRICE</th>
				<th class="">OPERATIONS</th>
			</tr>
		</thead>
		@foreach($data as $d)
		<tbody>
			<tr>
				<td>{{ $d->pki_product_id }}</td>
				<td>{{ $d->product_name }}</td>
				<td>{{ $d->category }}</td>
				<td>{{ $d->description }}</td>
				<td>{{ $d->price }}</td>
				<td>
					<a href = "{{ url('editproduct/'.$d->pki_product_id) }}"
						style="border: 1px solid black; border-radius: 0.2rem;">
						CLICK TO EDIT
					</a>
					<a href = "{{ url('deleteproduct/'.$d->pki_product_id) }}"
						style="border: 1px solid black; border-radius: 0.2rem;">
						CLICK TO DELETE
					</a>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</div>

@endsection
