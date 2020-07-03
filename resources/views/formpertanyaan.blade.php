@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Form Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/pertanyaan/store" method="post">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi Pertanyaan</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" name="isi" placeholder="Masukkan Isi Pertanyaan"></textarea>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
    <!-- /.card-body -->
  </div>
@endsection