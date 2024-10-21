@extends('layouts.admin_master')
@section('admincontent')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item "><a class="text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Mechanic</li>
                        </ol>
                        @if (session('status'))
                        <div class="row">
                            <div class="col-md-4 ms-auto ">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                        @foreach ($mechanic as $item)
                            <div class="">
                                <div class="row pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-3">
                                            <h5>Data Mechanic</h5>
                                        </div>
                                        <div class="col-3 text-end">
                                            <a href="{{ route('mechanics.edit',$item-> id_mechanic) }}" type="button" class="btn btn-warning">
                                                <small>Edit Data</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row py-3">
                                        <div class="col-6">
                                            <label class="fw-bold mb-2" for="">Text 1</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->text1 }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="fw-bold mb-2" for="">Text 2</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->text2 }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                            {{-- <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center py-3">
                                    <h5>Modal Mechanic</h5>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info">
                                        <small>Tambah Data</small>
                                    </a>
                                </div>
                            </div>
                            @foreach ($modal_mechanic as $modal_mechanics)
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Judul</th>
                                                    <th>Isi</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Judul</th>
                                                    <th>Isi</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $modal_mechanics->id_modalmechanic }}</td>
                                                    <td>{{ $modal_mechanics->judul }}</td>
                                                    <td>{{ $modal_mechanics->isi }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <div class="mb-2" style="width:150px; height:150px;">
                                                                <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$modal_mechanics->picture) }}" alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <a type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{ $modal_mechanics->id_modalmechanic }}" class="btn btn-warning">
                                                                <small>Edit Data</small>
                                                            </a>
                                                            <form action="{{ route('modal_mechanics.destroy', $modal_mechanics->id_modalmechanic) }}" onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" method="POST">
                                                                {!! method_field('DELETE') !!}
                                                                {!! csrf_field() !!}
                                                                <button type="submit" class="mx-2 btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach --}}
                    </div>
{{-- @foreach ($modal_mechanic as $modal_mechanics)
    <div class="modal fade" id="EditModal{{ $modal_mechanics->id_modalmechanic }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Modal Mechanic</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('modal_mechanics.update', $modal_mechanics->id_modalmechanic) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row py-3">
                        <div class="col-6">
                            <label class="fw-bold mb-2" for="">Judul Modal</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="judul" name="judul">{{ $modal_mechanics->judul }}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="fw-bold mb-2" for="">Isi Modal</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="isi" name="isi">{{ $modal_mechanics->isi }}</textarea>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-6">
                            <label class="fw-bold mb-2" for="">Gambar Modal </label>
                            <div class="mb-2" style="height: 260px;">
                                <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$modal_mechanics->picture) }}" alt="">
                            </div>
                            <div class="input-group ">
                                <input type="file" name="picture" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-warning my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Modal mechanic</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('modal_mechanics.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label class="fw-bold mb-2" for="">Judul Modal </label>
                            <div class="form-floating">
                                <textarea class="form-control" id="judul" name="judul" placeholder="Masukkan Judul"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="fw-bold mb-2" for="">Isi Modal </label>
                            <div class="form-floating">
                                <textarea class="form-control" id="isi" name="isi" placeholder="Masukkan Isi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-12">
                            <label class="fw-bold mb-2" for="">Gambar Modal </label>
                            <div class="input-group ">
                                <input type="file" name="picture" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-warning my-3">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div> --}}
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admindashboard/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admindashboard/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('admindashboard/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('admindashboard/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
@endsection
