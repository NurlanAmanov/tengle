@extends('backend.layout.master')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
            <h6 class="text-white text-capitalize mb-0">Projects Table</h6>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-light">Add Project</a>
          </div>
        </div>

        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table table-sm align-items-center mb-0 text-xs">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Image</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Title</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Vessel</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Company</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Year</th>
                  <th class="text-uppercase text-secondary font-weight-bolder opacity-7">Dimensions</th>
                  <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse($projects as $project)
                  <tr>
                    <td class="text-xs">{{ $project->id }}</td>
                    <td>
                      @if($project->image_url)
                        @if(Str::startsWith($project->image_url, ['http://','https://']))
                          <img src="{{ $project->image_url }}" width="50" height="50" class="img-thumbnail">
                        @else
                          <img src="{{ asset('storage/'.$project->image_url) }}" width="50" height="50" class="img-thumbnail">
                        @endif
                      @else
                        <span class="text-muted">No image</span>
                      @endif
                    </td>
                    <td class="text-xs">{{ $project->project_title }}</td>
                    <td class="text-xs">{{ $project->vessel_name }}</td>
                    <td class="text-xs">{{ $project->company_or_owner }}</td>
                    <td class="text-xs">{{ $project->completion_year }}</td>
                    <td class="text-xs">{{ $project->dimensions }}</td>
                    <td class="text-center">
                      <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary btn-xs">Edit</a>
                      <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Layihəni silmək istədiyinizə əminsiniz?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger btn-xs">Delete</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="8" class="text-center text-muted py-4">No projects found.</td>
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
