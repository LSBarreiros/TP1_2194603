@extends('layout.main')

@section('title', 'View Student')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>View Student</h3>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>City:</strong> {{ $student->city->name }}</p>
        </div>
    </div>
@endsection
