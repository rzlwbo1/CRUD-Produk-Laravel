@extends('layout')

@section('content')
  <div class="card p-3">
    <div class="card">
      <div class="card-body row">
        <div class="col-md-9">
          <h2>Data Produk</h2>
        </div>
        <div class="col-md-3 text-right">
          <div class="d-flex justify-content-end">
            <a href="/produk/tambah" class="btn btn-primary text-right shadow fw-bold">Tambah</a>
          </div>
        </div>
      </div>
    </div>

    <div class="table-responsive mt-4 p-2">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>stok</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produk as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->nama_produk}}</td>
              <td>{{$row->harga}}</td>
              <td>{{$row->stok}}</td>
              <td>
                <a class="btn btn-warning btn-sm" href="/produk/edit/{{ $row->id }}">Edit</a>
                <a class="btn btn-danger btn-sm mt-3 mt-sm-3 mt-md-0" href="/produk/hapus/{{ $row->id }}" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
            </td>

            </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
  </div>
@endsection