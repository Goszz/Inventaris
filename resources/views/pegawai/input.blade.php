@extends('layout')
@section('content')

{{-- <div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h2 class="m-b-10">{{ $judul }}</h2>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title text-dark" style="float: left"><b> Tambah Data Pegawai </b></h4>
      </div>
        <form action="storepegawai" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b> Nama Pegawai </b></label>
                    <div class="col-sm-10">
                      <input style="opacity: 80%" type="text" name="nama_pegawai" class="form-control" placeholder="Cth. Asep Kurasep">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b> No Pegawai </b></label>
                        <div class="col-sm-10">
                          <input style="opacity: 80%" type="number" name="nip" class="form-control" placeholder="Cth. 08X XXXX">
                      </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b> Alamat </b></label>
                    <div class="col-sm-10">
                      <input style="opacity: 80%" type="text" name="alamat" class="form-control" placeholder="Cth: Jl. Kehatimu, No.2, Kab. Karna Yang Pertama Masalalumu">
                  </div>
                </div>

                <div class="d-grid gap-2 d-md-block ">
                  <input class="btn btn-outline-success"  type="submit" name="submit" value="Tambah">
                  <button class="btn btn-outline-warning" type="reset" name="reset" >RESET</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection