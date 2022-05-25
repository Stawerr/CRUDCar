<h1>Brands</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">deleted_at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($brands as $brand)
        <tr>
            <td> {{$brand->id}}</td>
            <td> {{$brand->name}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>{{$brand->deleted_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
