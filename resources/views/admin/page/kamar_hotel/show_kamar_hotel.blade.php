@extends('admin.admin-home')

@section('admin-content') 
<section class="p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $kamar_hotel->nama_kamar }}</h2>
            </div>
            <div class="pull-left mt-3">
                <p>{{ $kamar_hotel->lokasi }}</p>
            </div>
            
        </div>
    </div>

    <div class="card my-3">
        <div class="card-body p-3">
            <h6 class="border-bottom pb-2 mb-0 fs-5">Details</h6>
    
            <div class="d-flex text-body-secondary pt-3">
                <strong class="d-block text-gray-dark fs-6">Hotel:</strong>
                <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">{{ $kamar_hotel->hotel }}</p>
            </div>
    
            <div class="d-flex text-body-secondary pt-3">
                <strong class="d-block text-gray-dark fs-6">Harga:</strong>
                <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">{{ $kamar_hotel->tanggal }}</p>
            </div>
    
            <div class="d-flex text-body-secondary pt-3">
                <strong class="d-block text-gray-dark fs-6">Fasilitas:</strong>
                <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">{{ $kamar_hotel->fasilitas }}</p>
            </div>
        </div>
    </div>
    



    <div class="mt-5 d-flex justify-content-end">
        <a class="btn btn-primary rounded-pill text-white" href="{{ route('kamar_hotels.index') }}"> Back</a>
    </div>

</section>
@endsection