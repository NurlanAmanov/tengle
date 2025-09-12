  @php
  use Illuminate\Support\Facades\Storage;
  use Illuminate\Support\Str;
@endphp
  @extends('backend.layout.master')

      @section('content')
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
                <h6 class="text-white text-capitalize ps-3">Services</h6>
                <a class="btn btn-sm btn-light" href="{{route('admin.service.addservice')}}">Add</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setting</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
<tbody>
  {{-- WHAT WE DO (services) --}}
  @if(isset($service) && $service->count())
    <tr class="table-light">
      <td colspan="5"><strong>What We Do</strong></td>
    </tr>
    @foreach($service as $row)
      @if(($row->section ?? 'what_we_do') === 'what_we_do')
        <tr>
          {{-- ID + badge --}}
          <td class="align-middle">
            <div class="d-flex flex-column">
              <span class="text-sm mb-1">#{{ $row->id }}</span>
              <span class="badge bg-gradient-info">What We Do</span>
            </div>
          </td>

          {{-- Image (icon fayl yolu) --}}
          <td class="align-middle">
            @php $img = $row->icon ? Storage::url($row->icon) : null; @endphp
            @if($img)
              <img src="{{ $img }}" class="avatar avatar-sm me-3 border-radius-lg" alt="{{ $row->title }}">
            @else
              <span class="text-secondary text-xs">No Image</span>
            @endif
          </td>

          {{-- Content --}}
          <td class="align-middle text-center text-sm">
            <div class="d-flex flex-column">
              <strong>{{ $row->title }}</strong>
              <span class="text-xs text-secondary mt-1">
                {{ Str::limit(strip_tags($row->description), 120) }}
              </span>
            </div>
          </td>

          {{-- Setting (yalnız tarix göstərək) --}}
          <td class="align-middle text-center">
            <span class="text-secondary text-xs">
              {{ optional($row->created_at)->format('d.m.Y') }}
            </span>
          </td>

          {{-- Actions (route adlarını öz layihənə uyğunlaşdır) --}}
          <td class="align-middle">
            <a href="{{ route('admin.services.edit', $row->id) }}" class="text-secondary font-weight-bold text-xs me-3">Edit</a>
            <form action="{{ route('admin.services.destroy', $row->id) }}" method="POST" class="d-inline">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-link text-danger text-xs p-0 m-0">Delete</button>
            </form>
          </td>
        </tr>
      @endif
    @endforeach
  @endif

  {{-- OUR PROCESS (process_steps) --}}
  @if(isset($procses) && $procses->count())
    <tr class="table-light">
      <td colspan="5"><strong>Our Process: From Start to Finish</strong></td>
    </tr>
    @foreach($procses as $row)
      <tr>
        {{-- ID + badge --}}
        <td class="align-middle">
          <div class="d-flex flex-column">
            <span class="text-sm mb-1">#{{ $row->id }}</span>
            <span class="badge bg-gradient-secondary">Our Process</span>
          </div>
        </td>

        {{-- Image (process image) --}}
        <td class="align-middle">
          @php $img = $row->image ? Storage::url($row->image) : null; @endphp
          @if($img)
            <img src="{{ $img }}" class="avatar avatar-sm me-3 border-radius-lg" alt="{{ $row->title }}">
          @else
            <span class="text-secondary text-xs">No Image</span>
          @endif
        </td>

        {{-- Content --}}
        <td class="align-middle text-center text-sm">
          <div class="d-flex flex-column">
            <strong>{{ $row->title }}</strong>
            <span class="text-xs text-secondary mt-1">
              {{ Str::limit(strip_tags($row->description), 120) }}
            </span>
          </div>
        </td>

        {{-- Setting (yalnız tarix) --}}
        <td class="align-middle text-center">
          <span class="text-secondary text-xs">
            {{ optional($row->created_at)->format('d.m.Y') }}
          </span>
        </td>

        {{-- Actions (route adlarını öz layihənə uyğunlaşdır) --}}
        <td class="align-middle">
          <a href="{{ route('admin.process_steps.edit', $row->id) }}" class="text-secondary font-weight-bold text-xs me-3">Edit</a>
          <form action="{{ route('admin.process_steps.destroy', $row->id) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-link text-danger text-xs p-0 m-0">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  @endif

  {{-- Heç nə yoxdursa --}}
  @if( (!isset($service) || !$service->count()) && (!isset($procses) || !$procses->count()) )
    <tr>
      <td colspan="5" class="text-center text-secondary py-4">Heç bir məlumat yoxdur.</td>
    </tr>
  @endif
</tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </section>
      @endsection