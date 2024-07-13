@extends('admin.layouts.admin')

@section('content')

                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Team Records</h4>
                        <a href="{{ route('admin.team.create')}}">
                        <button type="button" class="btn btn-primary btn-fw ">Add New</button>
                        </a>
                        {{-- <p class="card-description"></code> --}}
                        </p>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Photo </th>
                              <th> Name </th>
                              <th> Description </th>
                              <th> role </th>
                              <th> Manage </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($portfolios as $portfolio)
                            <tr>
                              <td> {{ $portfolio->id }} </td>
                              <td> <img src="{{ asset($portfolio->photo) }}" alt="image"> </td>
                              {{-- <td> <i class="fab {{ $service -> icon }}"  aria-hidden="true"></i></td> --}}
                              <td> {{ $portfolio ->name }} </td>
                              <td> {{ $portfolio ->description }} </td>
                              <td> {{ $portfolio ->role }} </td>
                              <td>
                                <button type="button" class="btn btn-success btn-sm me-1 " onclick="location.href='{{ route('admin.team.edit', $portfolio->id) }}';">Edit</button>
                                  <form type="submit" method="POST" style="display: inline" action="{{ route('admin.team.destroy', $portfolio->id)}}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="style="display: inline">Delete</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
{{--
            </div>
        </div> --}}
@endsection
