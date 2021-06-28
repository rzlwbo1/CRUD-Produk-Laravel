@extends('../layout')

@section('content')
  <div class="card">
    <div class="card-body">
        <h3>Edit Produk</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="/produk" class="btn btn-primary mb-2">Kembali</a>
        </div>
        <form action="/produk/update" method="post">
            @csrf
            {{-- kita butuh id hidden --}}
            <input type="hidden" name="id" value="{{$produk->id}}">

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                {{-- attribute name disarankan sama dgn nama row di table db --}}
                <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">

                {{-- validasi error inputan --}}
                @if ($errors->has('nama_produk'))
                    <div class="text-danger">
                      {{$errors->first('nama_produk')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                @if ($errors->has('harga'))
                    <div class="text-danger">
                      {{$errors->first('harga')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">

                @if ($errors->has('stok'))
                    <div class="text-danger">
                      {{$errors->first('stok')}}
                    </div>
                @endif
            </div>
            <input type="submit" class="btn btn-primary mb-3" value="Simpan Data">
        </form>
    </div>
  </div>

@endsection