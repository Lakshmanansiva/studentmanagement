@extends('layouts.app')
@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
<div class="row">
            <div class="col-2"></div>
            <div class="col-15"></div>
                <div class="card">
                    <div class="card-body">
                        <strong>Student List</strong>
                        <a href="{{route('login')}}"  class="btn btn-primary btn-xs float-end py-0 mx-1">Logout</a>
                        <a href="{{route('student.create')}}" class="btn btn-primary btn-xs float-end py-0 mx-1">Create Student</a>
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Department</th>
                                    <th>Year</th>
                                    <th>Joining Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key =>$student)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->department}}</td>
                                    <td>{{$student->year}}</td>
                                    <td>{{$student->joining_date}}</td>
                                    <td><span type="button" class="btn {{$student->is_active ==1?'btn-success':'btn-danger'}} btn-xs py-0">{{$student->is_active == 1?'Active':'InActive'}}</span></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('student.show',$student->id)}}" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                            <form action="{{route('student.delete',$student->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                            </form>
                                        </div>
                                       
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links()}}
                    </div>
            </div>
</div>
@endsection
    