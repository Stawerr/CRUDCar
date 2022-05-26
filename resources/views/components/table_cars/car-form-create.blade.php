<div class="col-4 mx-auto mt-4">
    <h1>Add Car</h1>
    <form method="POST" action="{{ url('cars') }}">
        @csrf
        <div class="form-group ">
            <select name="brand" id="brand">
                @foreach($brands as $brand)
                    <option value="{{ $brand->name }}">{{ $brand->name }}</option>
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
                value="{{ old('registration') }}"
                required
                aria-describedby="nameHelp">

            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

            @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
            @enderror

        </div>

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
