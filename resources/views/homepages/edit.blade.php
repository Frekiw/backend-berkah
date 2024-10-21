@extends('layouts.admin_master')
@section('admincontent')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('homepages.index') }}">Homepage</a></li>
        <li class="breadcrumb-item active">Homepage Edit</li>
    </ol>
    
    <div class="">
        @foreach ($homepage as $homepages)
            <form action="{{ route('homepages.update', $homepages->id_homepage) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-3">
                            <h5>Data Homepage</h5>
                        </div>
                        <div class="col-3 text-end">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text1</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text1" name="text1">{{ $homepages->text1 }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text2</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text2" name="text2">{{ $homepages->text2 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text3</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text3" name="text3">{{ $homepages->text3 }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text4 X</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text4" name="text4">{{ $homepages->text4 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text5</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text5" name="text5">{{ $homepages->text5 }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text6</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text6" name="text6">{{ $homepages->text6 }}</textarea>
                        </div>
                    </div>
                </div>
                {{-- <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Text7</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="text7" name="text7">{{ $homepages->text7 }}</textarea>
                        </div>
                    </div>
                </div> --}}
            </form>
        @endforeach
    </div>
</div>
@endsection
