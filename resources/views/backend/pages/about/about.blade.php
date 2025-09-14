@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-2">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
            <h6 class="text-white text-capitalize ps-3">About us</h6>
            <a href="{{ route('admin.about.add') }}" class="btn btn-sm btn-light">Add</a>
          </div>
        </div>

        @if (session('success'))
          <div class="px-3">
            <div class="alert alert-success mt-3 mb-0">{{ session('success') }}</div>
          </div>
        @endif

        @if ($errors->any())
          <div class="px-3">
            <div class="alert alert-danger mt-3 mb-0">
              <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          </div>
        @endif

        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setting</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>

              <tbody>
              @forelse ($about as $ab)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $ab->id }}</h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $ab->title }}</p>
                  </td>

                  <td class="align-middle">
                    @if ($ab->image)
                      <img src="{{ asset('storage/' . $ab->image) }}"
                           alt="{{ $ab->title }}"
                           class="avatar avatar-sm me-2 border-radius-lg">
                    @else
                      <span class="badge badge-sm bg-gradient-secondary">No Image</span>
                    @endif
                  </td>

                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold" title="{{ strip_tags($ab->content) }}">
                      {{ \Illuminate\Support\Str::limit(strip_tags($ab->content), 50, '...') }}
                    </span>
                  </td>

                  <td class="align-middle text-center">
                    <a href="{{ route('admin.about.edit', $ab->id) }}" class="btn btn-sm btn-primary me-2">
                      <i class="bi bi-pencil"></i> Edit
                    </a>

                    <!-- Delete düyməsi modal açır -->
                    <button type="button"
                            class="btn btn-sm btn-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $ab->id }}">
                      <i class="bi bi-trash"></i> Delete
                    </button>
                  </td>
                </tr>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{ $ab->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $ab->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteModalLabel{{ $ab->id }}">Confirm Delete</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        Delete <strong>{{ $ab->title }}</strong>?
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <form action="{{ route('admin.about.destroy', $ab->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Yes, delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @empty
                <tr>
                  <td colspan="6" class="text-center py-4 text-muted">No records found.</td>
                </tr>
              @endforelse
              </tbody>
            </table>
          </div>

          {{-- (İstəyə bağlı) səhifələmə --}}
          @if(method_exists($about, 'links'))
            <div class="px-3 mt-3">
              {{ $about->links() }}
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
