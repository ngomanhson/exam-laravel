@extends("layouts.layout")
@section("title")
@section("main")
        <div class="container">
            <div class="row m-3">
                <div class="col">
                    <h1>List Students</h1>
                    <a href="{{url("/add-student")}}" class="btn btn-primary">Add Student</a>
                </div>
            </div>
            <div class="row">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Address</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $st)
                                <tr>
                                <th scope="row">{{$st->id}}</th>
                                <td>{{$st->name}}</td>
                                <td>{{$st->age}}</td>
                                <td>{{$st->address}}</td>
                                <td>{{$st->telephone}}</td>
                                <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
@endsection
