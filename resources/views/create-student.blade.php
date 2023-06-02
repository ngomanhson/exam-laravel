@extends("layouts.layout")
@section("title","Add Student")
@section("main")
    <div class="container">
        <div class="row m-3">
            <div class="col">
                <h1>Add Student</h1>
                <a href="{{url("/")}}" class="btn btn-primary">List Student</a>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="{{url("/add-student")}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                        @error("name")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                        @error("age")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                        @error("address")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control" name="telephone" id="telephone">
                        @error("telephone")
                        <p class="text-danger"><i>{{$message}}</i></p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>

        </div>
    </div>
@endsection
