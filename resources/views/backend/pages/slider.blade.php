@extends('backend.layout.master')

@section('content')

@if(session('success'))
  <div class="alert alert-success mt-3">
      {{ session('success') }}
  </div>
@endif

<div class="container-fluid py-2">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
            <h6 class="text-white text-capitalize mb-0">Sliders Table</h6>
            <a href="{{route('admin.addSlider')}}"  class="btn btn-sm btn-light">Add Slider</a>
          </div>
        </div>

        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subtitle</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($sliders as $slider)
                  <tr>
                    <td class="text-sm">{{ $slider->id }}</td>
                    <td>
                      <img src="{{ asset('storage/' . $slider->image) }}" width="100" class="img-thumbnail" alt="Slider Image">
                    </td>
                    <td class="text-sm">{{ $slider->title }}</td>
                    <td class="text-sm">{{ $slider->subtitle }}</td>
                    <td class="text-center">
                      <a  class="btn btn-sm btn-primary">Edit</a>

                      {{-- <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Are you sure you want to delete this slider?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form> --}}
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="5" class="text-center text-muted py-4">No sliders found.</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
