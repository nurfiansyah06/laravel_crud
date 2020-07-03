@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Jawaban dari pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No Pertanyaan</th>
            <th>Judul Pertanyaan</th>
            <th>Isi Pertanyaan</th>
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td>{{ $pertanyaan->id }}</td>
                  <td>{{ $pertanyaan->judul }}</td>
                  <td>{{ $pertanyaan->isi }}</td>
              </tr>
            </tbody>
        </table>
      </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No Jawaban</th>
          <th>Isi Jawaban</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($pertanyaan->jawabans as $i)
            <tr>
              <td>{{ $i->id }}</td>
              <td>{{ $i->isi }}</td> 
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">
                    Data Kosong
                </td>
            </tr>
            @endforelse
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Form Jawaban</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/jawaban/store" method="post">
                @csrf
              <div class="card-body">
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
