@extends('master.main')

@section('content')

    @component('components.table_brands.brands', [
                       'brands' =>$brands,
                   ])
    @endcomponent

@endsection
