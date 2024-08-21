@extends('layouts.app')
@section('title', 'Tambah User')

@section('content')
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori</label>
            </div>
            <div class="col-sm-5">
                <select name="category_id" id="" class="form-control">
                    <option value="">pilih Kategori</option>
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{
                        $category->category_name}}</option>
                    @endforeach

                </select>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Produk</label>
            </div>
            <div class="col-sm-5">
                <input required type="text" class="form-control" name="product_name" placeholder="Nama Produk">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Qty</label>
            </div>
            <div class="col-sm-5">
                <input required type="number" class="form-control" name="product_qty" placeholder="Jml Produk">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Harga Produk</label>
            </div>
            <div class="col-sm-5">
                <input required type="number" class="form-control" name="product_price" placeholder="Harga Produk">
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
