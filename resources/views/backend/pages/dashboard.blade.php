@extends('backend.layout.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
  <div class="row mb-4">
    <div class="col-12">
      <h3 class="fw-bold mb-1">Dashboard</h3>
      <p class="text-muted">Panelə qısa yollar.</p>
    </div>
  </div>

  <div class="row g-4">
    <!-- Xəbər əlavə et -->
    <div class="col-xl-3 col-sm-6">
      <a  class="text-decoration-none">
        <div class="card shadow-sm border-0 hover-shadow h-100">
          <div class="card-body p-3 d-flex justify-content-between align-items-center">
            <div>
              <p class="text-sm text-muted mb-1">Xəbər əlavə et</p>
              <h5 class="mb-0 fw-semibold">Yeni xəbər</h5>
            </div>
            <div class="bg-gradient-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
              <i class="material-symbols-rounded">post_add</i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Layihələr -->
    <div class="col-xl-3 col-sm-6">
      <a  class="text-decoration-none">
        <div class="card shadow-sm border-0 hover-shadow h-100">
          <div class="card-body p-3 d-flex justify-content-between align-items-center">
            <div>
              <p class="text-sm text-muted mb-1">Layihələr</p>
              <h5 class="mb-0 fw-semibold">Layihə siyahısı</h5>
            </div>
            <div class="bg-gradient-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
              <i class="material-symbols-rounded">apps</i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Servislər -->
    <div class="col-xl-3 col-sm-6">
      <a  class="text-decoration-none">
        <div class="card shadow-sm border-0 hover-shadow h-100">
          <div class="card-body p-3 d-flex justify-content-between align-items-center">
            <div>
              <p class="text-sm text-muted mb-1">Servislər</p>
              <h5 class="mb-0 fw-semibold">Servis siyahısı</h5>
            </div>
            <div class="bg-gradient-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
              <i class="material-symbols-rounded">build</i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Haqqımızda -->
    <div class="col-xl-3 col-sm-6">
      <a  class="text-decoration-none">
        <div class="card shadow-sm border-0 hover-shadow h-100">
          <div class="card-body p-3 d-flex justify-content-between align-items-center">
            <div>
              <p class="text-sm text-muted mb-1">Haqqımızda</p>
              <h5 class="mb-0 fw-semibold">Redaktə et</h5>
            </div>
            <div class="bg-gradient-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
              <i class="material-symbols-rounded">edit_note</i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

@endsection
