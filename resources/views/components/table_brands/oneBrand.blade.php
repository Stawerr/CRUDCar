<div class="col-4 mx-auto mt-4">
    <h1>Show Brand</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            autocomplete="id"
            value="{{$brand->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="name">Name</label>
        <input
            class="form-control"
            type="text"
            id="name"
            name="name"
            autocomplete="brand"
            value="{{ $brand->name }}"
            required
            disabled
            aria-describedby="nameHelp">

        <label for="cars">Cars</label>
        @foreach($brand->cars as $car)
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->registration}}"
            required
            disabled
            aria-describedby="nameHelp">
        @endforeach
        <label for="created_at">Created_at</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $brand->created_at }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="updated_at">Updated_at</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $brand->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('brands/')}}">Back</a>
</div>
