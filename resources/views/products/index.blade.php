@extends('dashboard')

@section('meta')

<title>Index</title>
<meta name="_token" content="{{ csrf_token() }}">

@endsection

@section('content')

<div class="d-flex flex-column">
	<div class="link-button product-head">
		<a href = "{{ route('createproduct') }}" class="link green">
			<strong>ADD</strong>
		</a>
	</div>

	<div class="table-responsive product-table content-pos">
		<table class="table table-borderless table-hover">
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
					<td class="d-flex justify-content-evenly">
						<div class="link-button">
							<a href = "{{ url('editproduct/'.$d->pki_product_id) }}" class="link green">
								<strong>EDIT</strong>
							</a>
						</div>
						<div class="link-button">
							<a href = "{{ url('deleteproduct/'.$d->pki_product_id) }}" class="link red">
								<strong>DELETE</strong>
							</a>
						</div>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>
	</div>
</div>

@endsection
