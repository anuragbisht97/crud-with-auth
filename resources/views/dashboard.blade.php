<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <style>
        .link-button .link {
            color: grey;
            text-decoration: none;
            border: 0.1rem solid lightgrey;
            border-radius: 0.4rem;
            padding: 0.2rem;
        }

        .red {
            background-color: lightsalmon;
        }

        .green {
            background-color: lightgreen;
        }

        .product-table {
            margin: 2rem 2rem;
        }

        .product-head, .form-pos {
            margin: 2rem 4rem;
        }

        .content-pos {
            text-align: center;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 link-button">
                    <a class="link" href="{{ route('getproducts') }}"><strong>PRODUCTS</strong></a>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</x-app-layout>