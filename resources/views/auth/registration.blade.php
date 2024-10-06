@extends("default")
@section("title","Register")
@section("content")
        <main class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('User Created success')}}
                            
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-success">
                                {{session()->get('error')}}
                            
                            </div>
                        @endif
                        <div class="card">
                            <h3 class="card-header text-center">Register</h3>
                            <div class="card-body">
                                <form method="POST" action="{{route('register.post')}}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="name"
                                                id="name" class="form-control" name="name"  autofocus>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="email" placeholder="Email"
                                                id="email" class="form-control" name="email"  autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password"
                                                id="password" class="form-control" name="password"  autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                                <strong>{{$errors->first('password')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Sign up</button>                                  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection