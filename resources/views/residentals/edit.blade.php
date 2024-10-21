@extends('layouts.admin_master')
@section('admincontent')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('residentals.index') }}">Residental</a></li>
                            <li class="breadcrumb-item active">Residental Edit</li>
                        </ol>
                        @foreach ($residental as $item)
                            <div class="">
                                <form action="{{ route('residentals.update', $item-> id_residental) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <div class="row pb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="col-3">
                                                <h5>Data Residental</h5>
                                            </div>
                                            <div class="col-3 text-end">
                                                <button type="submit" class="btn btn-warning">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-6">
                                            <label class="fw-bold mb-2" for="">Text 1</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="text1" name="text1">{{ $item->text1 }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="fw-bold mb-2" for="">Text 2</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="text2" name="text2">{{ $item->text2 }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row py-3">
                                        <div class="col-6">
                                            <label class="fw-bold mb-2" for="">Text 3</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="text3" name="text3">{{ $item->text3 }}</textarea>
                                            </div>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        @endforeach
                    </div>
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
