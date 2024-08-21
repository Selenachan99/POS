@extends('layouts.app')
@section('title','Tambah User')

@section('content')
<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Nama Lengkap</label>
        </div>
        <div class="col-sm-5">
            <input required type="text" class="form-control" name="name" placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Email</label>
        </div>
        <div class="col-sm-5">
            <input required type="email" class="form-control" name="email" placeholder="email@example.com">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="" class="form-label">Password</label>
        </div>
        <div class="col-sm-5">
            <input required type="password" class="form-control" name="password" placeholder="password">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
          <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
        </div>
    </div>
</form>
@endsection
