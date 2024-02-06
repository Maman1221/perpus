@extends('layouts/app')
@section('content')
<form action="{{url('buku/'.$data->id)}}" method="post">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Edit Buku</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$data->judul}}">
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" class="form-control" name="penulis" value="{{$data->penulis}}">
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="{{$data->penerbit}}">
                </div>

                <div class="form-group">
                    <label>TahunPenerbit</label>
                    <input type="text" class="form-control" name="tahunterbit" value="{{$data->tahunterbit}}">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection
