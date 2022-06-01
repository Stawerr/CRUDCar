<div class="col-4 mx-auto mt-4">
    <h1>Show Car</h1>
    <div class="form-group">
        <label for="id">Id</label>
        <input
            class="form-control"
            type="text"
            id="id"
            name="id"
            autocomplete="id"
            value="{{$car->id}}"
            required
            disabled
            aria-describedby="nameHelp">

        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

        <label for="brand">Brand</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->brand->name }}"
            required
            disabled
            aria-describedby="nameHelp">

        <label for="registration">Registration</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->registration }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="year_of_manufacture">Year of Manufacture</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->year_of_manufacture }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="color">Color</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->color }}"
            required
            disabled
            aria-describedby="nameHelp">
        <label for="created_at">Created_at</label>
        <input
            class="form-control"
            type="text"
            id="brand"
            name="brand"
            autocomplete="brand"
            value="{{ $car->created_at }}"
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
            value="{{ $car->updated_at }}"
            required
            disabled
            aria-describedby="nameHelp">
    </div>

    <a class="mt-2 mb-5 btn btn-primary" href="{{url('cars/')}}">Back</a>
</div>
