@extends('layouts.main')

@section('container')

    <div class="title=top mb-5">
        <h2 class="fw-bold">Kritik dan saran</h2>
    </div>
    <form method="post" action="{{route('contacts.store')}}">
        {{csrf_field()}}
        <div class="form floating mb-3">
            <label for="inputname">Nama</label>
            <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        </div>
        <div class="form floating mb-3">
            <label for="inputemail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputemail" placeholder="email" name="email">
        </div>
        <div class="form floating mb-3">
        <label for="floatingTextarea2">Kritik dan saran</label>
            <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="weight: 100px" name="pesan"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

@endsection