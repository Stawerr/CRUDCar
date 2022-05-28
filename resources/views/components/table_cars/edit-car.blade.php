<div class="col-4 mx-auto mt-4">
    <h1>Add Car</h1>
    <form method="POST" action="{{ url('cars/' . $car->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <select name="brand" id="brand">
                @foreach($brands as $brand)
                    <option name="brand_id" value="{{ $car->brand_id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
            <p></p>
            <label for="registration">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="Type registration"
                class="form-control
            @error('registration') is-invalid @enderror"
                value="{{ $car->registration }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="year_of_manufacture">Year of Manufacture</label>
            <input
                type="text"
                id="year_of_manufacture"
                name="year_of_manufacture"
                autocomplete="year_of_manufacture"
                placeholder="Type a Year (AAAA-MM-DD)"
                class="form-control
            @error('year_of_manufacture') is-invalid @enderror"
                value="{{ $car->year_of_manufacture }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('year_of_manufacture')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror
            <label for="color">Color</label>
            <input
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                placeholder="Type a Color"
                class="form-control
            @error('color') is-invalid @enderror"
                value="{{ $car->color }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('color')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror

        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
