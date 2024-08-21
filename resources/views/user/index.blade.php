@extends('layouts.app')
@section('title', 'Data User')

@section('content')
<div class="table-responsive">
    <div align="right" class="mb-3"></div>
    <a href="{{route('user.create')}}" class="btn btn-primary">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                 <a href="{{route('user.edit', $user->id)}}" class="btn btn-success btn-xs">Edit</a>
                 {{-- <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger btn-xs">Delete</a> --}}
                 <form action="{{route('user.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-xs btn-danger" type="submit">
                        Delete
                    </button>
                 </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection