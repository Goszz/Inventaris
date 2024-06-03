@extends('layout')
@section('content')

{{-- <div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">{{ $judul }}</h5>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title text-dark" style="float: left"><b>{{ $judul }}</b></h2>
      </div>
        @foreach ($pegawai as $d)
        <form action="updatepegawai" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <input type="hidden" name="id_pegawai" value="{{ $d->id_pegawai }}">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Nama Pegawai</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="{{ $d->nama_pegawai }}">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>No Pegawai</b></label>
                        <div class="col-sm-10">
                          <input type="number" name="nip" class="form-control" placeholder="No Pegawai" value="{{ $d->nip }}">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Alamat</b></label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $d->alamat }}">
                  </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <input class="btn btn-outline-success"  type="submit" name="submit" value="Update">
                  <button class="btn btn-outline-danger" name="reset" type="reset">RESET</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
  </div>
</div>

@endsection