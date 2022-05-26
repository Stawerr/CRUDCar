@if (session('status'))<div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('status') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">            <span aria-hidden="true">&times;</span>        </button>    </div>@endif

<h1>Brands</h1>
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">deleted_at</th>
        <th scope="col">Status</th>

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
            <td><a class="btn btn-success" href="{{url('brands/'.$brand->id)}}">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('brands/'.$brand->id. '/edit')}}">Edit</a></td>
            <form action="{{url('brands/' . $brand->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$brands->links()}}
</div>
