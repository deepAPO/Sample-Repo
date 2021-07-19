@extends('layouts.app') @section('title') Basic CRUD @endsection @section('content')
<br>
<div class="container-fluid" style="margin-left: 10px; padding-left: 5px">

    @if ($errors->any())
    <script>
        function myFunction() {
            alert("You have Successfully Registered")
        }
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    </script>


    @endif
    <div class="card">

        <div class="card-body col-form-label-sm" style="background-color: lightblue">
            <div class="card-header bg-light text-black-50">

                <span class="text-info">Student Registration</span>

            </div>
            <br>


            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">

                    <div class="form-row">

                        <div class="col-sm">

                            <div class="input-group">
                                <label class="col-form-label" style="padding-right: 20px">Username</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                                <input type="text" class="form-control" maxlength="10" placeholder="Enter Your Username" name="username" value = "{{ $student->username}}" />
                            </div>

                        </div>

                        <div class="col-sm">

                            <div class="input-group">
                                <label class="col-form-label" style="padding-right: 20px">Email</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                                <input type="text" class="form-control" maxlength="10" placeholder="@gmail.com" name="email" value = "{{ $student->email}}" />
                            </div>

                        </div>

                        <div class="col-sm">

                            <div class="input-group">
                                <label class="col-form-label" style="padding-right: 20px">Password</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                                <input type="text" class="form-control" maxlength="10" placeholder="Password" name="password" value = "{{ $student->password}}" />
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="form-group" style="text-align: center">
                        <button class="btn btn-primary rounded">Update</button>
                        <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                    </div>

                </div>






        </div>
        @endsection


        <form> </form>
