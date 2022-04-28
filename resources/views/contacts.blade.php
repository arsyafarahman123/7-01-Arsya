@extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold">PRAKERINOTED</h2>
    </div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="imputname" placeholder="Nama" name="nama">
    <label for="imputname">Nama Siswa</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="imputemail" placeholder="Email" name="email">
    <label for="imputemail" class="form-label">Nama Tempat PKL</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Daerah Kota Tempat PKL</label>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection

