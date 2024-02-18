@extends('layouts.backend.main')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">Supplier Overview</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table supplier_list">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Products</th>
                                <th>Registered Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              <!-- <tr>
                                <td>
                                  <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                                  <span class="fw-medium">Angular Project</span>
                                </td>
                                <td>Albert Cook</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Lilian Fuller">
                                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Sophia Wilkerson">
                                      <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar avatar-xs pull-up"
                                      title="Christina Parker">
                                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                  </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                      >
                                      <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                      >
                                    </div>
                                  </div>
                                </td>
                              </tr> -->
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function() {
      $(function () {
          
        var table = $('.supplier_list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('supplierList') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'products', name: 'products'},
                {data: 'email', name: 'email'},
                {data: 'created_date', name: 'created_date'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
      });
  });
</script>
@endsection
