@extends('layout.main')
@section('title', 'Add Student')

@section('content')
    <div class="card mx-auto mb-5 mt-4 " pb-1 style="width: 50%;" >
        <div class="card-header">
            <h3>Add Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="form-group mb-3 ">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group mb-3">
                    <label for="city_id">City</label>
                    <select class="form-control" id="city_id" name="city_id">
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-4 mr-1">Add Student</button>
                <a href="{{route('students.index')}}" class="btn btn-secondary mt-4" role="button">Previous</a>
            </form>
        </div>
    </div>
@endsection
