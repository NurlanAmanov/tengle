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
            <a href="{{route('admin.sliders.create')}}"  class="btn btn-sm btn-light">Add Slider</a>
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
  <td class="text-sm">
    {{ \Illuminate\Support\Str::limit($slider->subtitle, 30, '...') }}
</td>

      <td class="text-center">
        <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-sm btn-primary">Edit</a>

        <!-- Delete button opens modal -->
        <button type="button" class="btn btn-sm btn-danger" 
                data-bs-toggle="modal" 
                data-bs-target="#deleteModal{{ $slider->id }}">
          Delete
        </button>
      </td>
    </tr>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal{{ $slider->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $slider->id }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="deleteModalLabel{{ $slider->id }}">Confirm Delete</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete <strong>{{ $slider->title }}</strong>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Yes, Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
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
