@extends('layout.main')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <a href="/pertanyaan/create" class="btn btn-sm btn-success">
          Tambah Pertanyaan
        </a>
        <thead>
        <tr>
          <th>No </th>
          <th>Judul</th>
          <th>Isi Pertanyaan</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($pertanyaans as $item)
          <tr> 
            <td>{{ $item->id }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->isi }}</td>
            <td>
              <a href="{{ route('jawaban', $item->id) }}" class="btn btn-sm btn-success d-inline">Jawab</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@push('addon-script')
<script src="{{ url('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
    
@endpush