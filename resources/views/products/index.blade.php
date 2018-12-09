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
                <th>User</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
                <td class="serial">4.</td>
                <td class="avatar">
                    <div class="round-img">
                        <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                    </div>
                </td>
                <td> {{ $product->id}} </td>
              <td>  <span class="name">{{ $product->name }}</span> </td>
              <td> <span class="name">{{ $product->user->name }}</span></td>
                <td>
                    <span class="badge badge-pending">Pending</span>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
@endsection