@extends('admin.admin-home')

@section('admin-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 align-items-center">
            <div class="col">
                <a href="{{ route('admin.page.user.index') }}" class="card-link">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total User</p>
                            <h4 class="my-1 text-info">23</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.page.hotel') }}" class="card-link">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Hotel</p>
                            <h4 class="my-1 text-danger">12</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                            <i class="fa fa-dollar"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.page.maskapai.index') }}" class="card-link">
                    <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Maskapai</p>
                            <h4 class="my-1 text-success">3</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
