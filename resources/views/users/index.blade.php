@extends('layouts.master')
@section('content')
<div class="table-stats order-table ov-h">
    <table class="table ">
        <thead>
            <tr>
                <th class="serial">#</th>
                <th class="avatar">Avatar</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
                <td class="serial">4.</td>
                <td class="avatar">
                    <div class="round-img">
                        <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                    </div>
                </td>
                <td> {{ $user->id}} </td>
              <td>  <span class="name">{{ $user->name }}</span> </td>
                <td> <span class="email">{{ $user->email }}</span> </td>
                <td>
                    <span class="badge badge-pending">Pending</span>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
@endsection