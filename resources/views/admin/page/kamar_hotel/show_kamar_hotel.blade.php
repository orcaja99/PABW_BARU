@extends('admin.admin-home')

@section('admin-content') 
<section class="p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $kamar_hotel->nama_kamar }}</h2>
            </div>
            <div class="pull-left mt-3">
                <p>Deskripsi kamar hotel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sollicitudin tellus, sit amet dapibus risus. Vivamus tempus mattis erat, sit amet venenatis ligula pulvinar et. Nullam tempus purus ut sapien sodales tempus. Vestibulum risus orci, mattis eu turpis vitae, sollicitudin dapibus augue. Mauris feugiat diam ut molestie gravida. Nullam vulputate, sapien eget euismod mollis, tellus tellus ultricies orci, in laoreet sapien metus sit amet nisl. Maecenas laoreet, nibh quis rhoncus malesuada, tortor magna vestibulum elit, ut porta enim purus vitae velit. Integer laoreet orci vel lacinia gravida. Nullam ac elit molestie, scelerisque turpis non, luctus lacus. Curabitur eleifend varius luctus. Morbi vehicula quam sit amet leo sagittis porttitor. Nunc quis ligula ac lectus semper rutrum.</p>
            </div>
            
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0 fs-5">Details</h6>
    
        <div class="d-flex text-body-secondary pt-3">
            <strong class="d-block text-gray-dark fs-6">Hotel: </strong>
            <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">
            {{ $kamar_hotel->hotel }}
            </p>
        </div>
    
        <div class="d-flex text-body-secondary pt-3">
            <strong class="d-block text-gray-dark fs-6">Harga: </strong>
            <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">
            {{ $kamar_hotel->tanggal }}
            </p>
        </div>
    
        <div class="d-flex text-body-secondary pt-3">
            <strong class="d-block text-gray-dark fs-6">Fasilitas: </strong>
            <p class="pb-3 mb-0 small lh-sm border-bottom ms-3 fs-6">
            text here
            </p>
        </div>
    </div>



    <div class="mt-5 d-flex justify-content-end">
        <a class="btn btn-primary rounded-pill text-white" href="{{ route('kamar_hotels.index') }}"> Back</a>
    </div>

</section>
@endsection