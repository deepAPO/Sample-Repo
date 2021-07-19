@extends('layouts.app')

@section('title')
Basic CRUD
@endsection


@section('content')
<br>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div>
    <div class="card-body col-xs-3">
      <table class = "table table-bordered">
          <tr style= "align-content: center">
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
              </tr>
        @foreach ($students as $student)


        <tr>
            <td>{{++$i}}</td>
            <td>{{ $student->username }}</td>
            <td>{{ $student->email }} </td>
            <td>{{ $student->password }} </td>
            <td>
            <form action ="{{ route('students.destroy', $student->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  {!! $students->links() !!}
@endsection
