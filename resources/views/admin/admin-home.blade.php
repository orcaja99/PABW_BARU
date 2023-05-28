@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/adminpage.css">
<div class='d-flex'>
  <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Admin</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
        <a href="{{ route('admin.page.home') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.home' ? 'active' : '' }}" aria-current="page">
          Home
        </a>
        </li>

        <li class="nav-item">
          <a class="nav-link btn btn-toggle d-inline-flex align-items-center rounded border-0 text-white gap-2 {{ (Route::currentRouteName() == 'admin.page.user' || Route::currentRouteName() == 'admin.page.role') ? '' : 'collapsed' }}" data-bs-toggle="collapse" href="#home-collapse" aria-expanded="{{ (Route::currentRouteName() == 'admin.page.user' || Route::currentRouteName() == 'admin.page.role') ? 'true' : 'false' }}">
            <i class="uil uil-user"></i>  
            User Management
          </a>
          <div class="collapse {{ (Route::currentRouteName() == 'admin.page.user' || Route::currentRouteName() == 'admin.page.role') ? 'show' : '' }}" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text">
              <li class="nav-link"><a href="{{ route('admin.page.user') }}" class="link-body-emphasis text-white d-flex text-decoration-none rounded align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.user' ? 'active' : '' }}" aria-current="page">Users</a></li>
              <li class="nav-link"><a href="{{ route('admin.page.roles.index') }}" class="link-body-emphasis text-white d-flex text-decoration-none rounded align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.roles.index' ? 'active' : '' }}" aria-current="page">Roles</a></li>
            </ul>
          </div>
        </li>

        <!-- <li>
          <a href="{{ route('admin.page.user') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'admin.page.user' ? 'active' : '' }}" aria-current="page">
            <i class="uil uil-user"></i>
            User
          </a>
        </li> -->
        <li>
          <a href="{{ route('kamar_hotel.index') }}" class="nav-link text-white d-flex align-items-center gap-2 {{ Route::currentRouteName() == 'kamar_hotel.index' ? 'active' : '' }}" aria-current="page">
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
