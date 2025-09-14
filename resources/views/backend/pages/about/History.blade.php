   @extends('backend.layout.master')

      @section('content')
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
                <h6 class="text-white text-capitalize ps-3">History list</h6>
                <a href="{{route('admin.about.history.create')}}" class="btn btn-sm btn-light">Add</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Setting</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($history as $his)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                    
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$his->id}}</h6>
                   
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$his->year}}</p>
                   
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$his->title}}</p>
                   
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$his->content}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  @endforeach

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