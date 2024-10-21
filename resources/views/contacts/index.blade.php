@extends('layouts.admin_master')
@section('admincontent')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item "><a class="text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Social Media</li>
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
                        @foreach ($contact as $item)
                            <div class="">
                                <div class="row pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="col-3">
                                            <h5>Data Social Media</h5>
                                        </div>
                                        <div class="col-3 text-end">
                                            <a href="{{ route('contacts.edit',$item-> id_contact) }}" type="button" class="btn btn-warning">
                                                <small>Edit Data</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Whatsapp</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->whatsapp }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Facebook</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->facebook }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Instagram</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->instagram }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Twitter X</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->twitter }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Gmail</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->gmail }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">gmaps</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" readonly>{{ $item->gmaps }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-6">
                                        <label class="fw-bold mb-2" for="">Qr Code</label>
                                        <div class="" style="width: 100px;">
                                            <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$item->qr_code) }}" alt="">
                                        </div>
                                    </div>
                                </div>
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
