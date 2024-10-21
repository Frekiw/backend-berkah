@extends('layouts.admin_master')
@section('admincontent')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('contacts.index') }}">Social Media</a></li>
        <li class="breadcrumb-item active">Social Media Edit</li>
    </ol>
    
    <div class="">
        @foreach ($contact as $contacts)
            <form action="{{ route('contacts.update', $contacts->id_contact) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-3">
                            <h5>Data Social Media</h5>
                        </div>
                        <div class="col-3 text-end">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Whatsapp</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="whatsapp" name="whatsapp">{{ $contacts->whatsapp }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Facebook</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="facebook" name="facebook">{{ $contacts->facebook }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Instagram</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="instagram" name="instagram">{{ $contacts->instagram }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Twitter X</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="twitter" name="twitter">{{ $contacts->twitter }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Gmail</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="gmail" name="gmail">{{ $contacts->gmail }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Gmaps</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="gmaps" name="gmaps">{{ $contacts->gmaps }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-6">
                        <label class="fw-bold mb-2" for="">Gambar QR Code</label>
                        <div class="mb-2" style="width: 60px;">
                            <img class="w-100 h-100 object-fit-cover" src="{{  asset('storage/'.$contacts->qr_code) }}" alt="">
                        </div>
                        <div class="input-group ">
                            <input type="file" name="qr_code" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
</div>
@endsection
