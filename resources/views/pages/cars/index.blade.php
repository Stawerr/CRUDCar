@extends('master.main')

@section('content')

    @component('components.table_cars.cars', [
                       'cars' =>$cars,
                   ])
    @endcomponent

@endsection
