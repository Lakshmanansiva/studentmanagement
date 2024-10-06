@extends('layouts.app')
@section('content')
<div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Student details</p>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$student->name}}" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{$student->email}}" readonly>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{$student->address}}" readonly>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" value="{{$student->phone}}" readonly>
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" value="{{$student->department}}" readonly>
                </div>

                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" value="{{$student->year}}" readonly>
                </div>

                <div class="form-group">
                    <label for="joining_date">Joining date</label>
                    <input type="date" class="form-control" value="{{$student->joining_date}}" readonly>
                </div>

                <div class="form-group">
                    <label for="is_active" >Active</label><br>
                    <input type="checkbox" {{$student->is_active=='1'?'checked':''}} readonly />
                </div>
                <a href="{{route('student.index')}}" class="btn btn-primary">Back</a>
            </div>
</div>
@endsection
 