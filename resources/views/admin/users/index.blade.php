@extends('layouts.app')


@section('content')



<div class ='container'>
<table class="table table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>View</th>
          <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @if($users)

        @foreach($users as $user)

      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
          @if($user->role_id = 1)

          <td>Administrator</td>

          @elseif($user->role_id = 2)

              <td>Worker</td>

          @endif

          @if($user->is_active = 1)

              <td>User active</td>

          @elseif($user->role_id =null)

              <td>Not active</td>

          @endif


        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>

         <td> <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger">Delete User</a> </td>
         <td> <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a> </td>
      </tr>




        @endforeach
        @endif
    </tbody>
  </table>
</div>




@endsection

