<h1>Cars</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Brand</th>
        <th scope="col">Registration</th>
        <th scope="col">Year of Manufacture</th>
        <th scope="col">Color</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Deleted_at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr>
            <td> {{$car->id}}</td>
            <td>{{$car->brand->name}}</td>
            <td> {{$car->registration}}</td>
            <td>{{$car->year_of_manufacture}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>

        </tr>
    @endforeach
    </tbody>
</table>
