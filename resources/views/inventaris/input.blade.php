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
        <h2 class="card-title text-dark" style="float: left"><b>{{ $judul }}</b></h2>
      </div>
        <form action="storeinventaris" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Nama</b></label>
                    <div class="col-sm-10">
                      <input style="opacity: 80%" type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Kondisi</b></label>
                        <div class="col-sm-10">
                          <input style="opacity: 80%" type="text" name="kondisi" class="form-control" placeholder="Kondisi">
                      </div>
                </div>
                <input type="text" hidden name="keterangan" class="form-control" placeholder="Kondisi" value="Tersedia">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-10">
                      <input style="opacity: 80%" type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Jenis</b></label>
                    <div class="col-sm-10">
                        <select name="id_jenis" class="form-control" id="">
                            <option value="">-- Jenis --</option>                            
                            @foreach ($detail_jenis as $item)
                            <option value="{{ $item['id_jenis'] }}">{{ $item['nama_jenis'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="date" name="tanggal_register" class="form-control" placeholder="Tanggal Register" value="<?php echo date('Y-m-d'); ?>" hidden>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Ruang</b></label>
                    <div class="col-sm-10">
                        <select name="id_ruang" class="form-control" id="">
                            <option value="">-- Ruang --</option>                            
                            @foreach ($detail_ruang as $item)
                            <option value="{{ $item['id_ruang'] }}">{{ $item['nama_ruang'] }}</option>
                            @endforeach
                        </select>
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Kode Inventaris</b></label>
                    <div class="col-sm-10">
                      <input style="opacity: 80%" type="text" name="kode_inventaris" class="form-control" placeholder="Jumlah" required="">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"><b>Petugas</b></label>
                    <div class="col-sm-10">
                        <select name="id_petugas" class="form-control" id="">
                            <option value="">-- Petugas --</option>                            
                            @foreach ($detail_petugas as $item)
                            <option value="{{ $item['id_petugas'] }}">{{ $item['nama_petugas'] }}</option>
                            @endforeach
                        </select>
                  </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <input class="btn btn-outline-success"  type="submit" name="submit" value="Tambah">
                  <button class="btn btn-outline-warning" name="reset" type="reset">RESET</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection