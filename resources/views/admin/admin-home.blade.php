@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/adminpage.css">
<div class='d-flex' style="width: 100%">
  <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh">
      <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Admin</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
        <a href="{{ route('admin.page.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.index' ? 'active' : '' }}" aria-current="page">
          <i class="uil uil-estate"></i>
          Home
        </a>
        </li>
        <li>
          <a href="{{ route('admin.page.user') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.user' ? 'active' : '' }}" aria-current="page">
            <i class="uil uil-user"></i>
            User
          </a>
        </li>
        <li>
          <a href="{{ route('admin.page.hotel') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.hotel' ? 'active' : '' }}" aria-current="page">
            <i class="uil uil-building"></i>
            Hotel
          </a>
        </li>
        <li>
          <a href="{{ route('admin.page.maskapai') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.maskapai' ? 'active' : '' }}" aria-current="page">
            <i class="uil uil-plane-departure"></i>
            Maskapai 
          </a>
        </li>
      </ul>
      </hr>
  </div>

  <div class="flex-grow-1">
    <main class="py-0 mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            @yield('admin-content')
          </div>
        </div>
      </div>
    </main>
  </div>

</div>
@endsection
