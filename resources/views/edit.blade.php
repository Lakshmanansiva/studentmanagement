@extends('layouts.app')
@section('content')

@if(session()->has('msg'))
<div class="alert alert-success">
    {{session()->get('msg')}}
</div>
@endif
<h6><a class ="text-light" href="{{route('student.index')}}">Back to List</a></h6>
<div class="card">
            <div class="card-body">
                <p style="font-size:20px; font-weight:bold;">Update Student</p>
                <form action="{{route('student.update',$student->id)}}" class="was-validated" method="POST">
                    @method('PUT')  
                    @csrf 
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{$student->name}}" required> 
                        @if($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('name')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" value="{{$student->email}}" required>
                        @if($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control {{$errors->has('address')?'is-invalid':''}}" value="{{$student->address}}" required>
                        @if($errors->has('address'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('address')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control {{$errors->has('phone')?'is-invalid':''}}" value="{{$student->phone}}" required>
                        @if($errors->has('phone'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('phone')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="department">Department</label>
                        <input type="text" name="department" id="department" class="form-control {{$errors->has('department')?'is-invalid':''}}" value="{{$student->department}}" required>
                        @if($errors->has('department'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('department')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="year">Year</label>
                        <input type="text" name="year" id="year" class="form-control {{$errors->has('year')?'is-invalid':''}}" value="{{$student->year}}" required>
                        @if($errors->has('year'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('year')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation   ">
                        <label for="joining_date">Joining date</label>
                        <input type="date" name="joining_date" id="joining_date" class="form-control {{$errors->has('joining_date')?'is-invalid':''}}" value="{{$student->joining_date}}" required>
                        @if($errors->has('joining_date'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('joining_date')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-validation">
                        <label for="is_active">Active</label><br>
                        <input type="checkbox" name="is_active" id="is_active" class="{{$errors->has('is_active')?'is-invalid':''}}" value="1" {{$student->is_active=='1'?'checked':''}} required>
                        @if($errors->has('is_active'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('is_active')}}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
</div>
@endsection