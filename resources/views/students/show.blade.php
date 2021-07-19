@extends('layouts.app')

@section('content')

<div class="card-body col-xs-3">
    <table class = "table table-bordered">
        <tr style= "align-content: center">

            <th>Username</th>
            <th>Email</th>
            <th>Password</th>

            </tr>



      <tr>

          <td>{{ $student->username }}</td>
          <td>{{ $student->email }} </td>
          <td>{{ $student->password }} </td>


          </form>
          </td>
      </tr>

    </table>
  </div>
</div>

@endsection
