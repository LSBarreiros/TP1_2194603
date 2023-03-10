@extends('layout.main')

@section('title', 'Edit Student')

@section('content')
    <div class="card mx-auto mb-5 mt-4 " pb-1 style="width: 50%;">
        <div class="card-header">
            <h3>Edit Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>
                <div class="form-group">
                    <label for="city_id">City</label>
                    <select class="form-control" id="city_id" name="city_id">
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}" {{ $student->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-4 mr-1">Update</button>
                <a href="{{route('students.index')}}" class="btn btn-secondary mt-4" role="button">Previous</a>
                
            </form>
        </div>
    </div>
@endsection
