@extends('layouts.backend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card mt-5">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-header flex-column flex-md-row">
                    <!-- <div class="head-label text-center">
                        <h5 class="card-title mb-0">DataTable with Buttons</h5>
                    </div> -->
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons btn-group flex-wrap">
                            <div class="btn-group">
                                <!-- <button class="btn buttons-collection dropdown-toggle btn-label-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="bx bx-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span></span>
                                </button> -->
                            </div> 
                            <button id="createNewCategory" class="btn btn-secondary create-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="bx bx-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add Category</span></span></button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="">
                        <h5 class="">Category Details</h5>
                        <div class="table-responsive text-nowrap">
                          <table class="table category_list">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Detail</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                              
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="categoryModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="categoryForm" name="categoryForm" class="form-horizontal" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="category_name" class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category name" value="" required>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="category_detail">Category Detail</label>
                        <div class="col-sm-12">
                            <textarea id="category_detail" name="category_detail" required placeholder="Category Detail" class="form-control"></textarea>
                        </div>
                    </div>
        
                    <div class="col-sm-offset-2 col-sm-10 mt-2">
                        <button type="submit" class="btn btn-primary" id="savedata" value="create">Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.category_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('category.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'category_name',
                        name: 'category_name'
                    },
                    {
                        data: 'category_detail',
                        name: 'category_detail'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

            $('#createNewCategory').click(function() {
                $('#savedata').val("create-category");
                $('#id').val('');
                $('#categoryForm').trigger("reset");
                $('#modelHeading').html("Create New Category");
                $('#categoryModel').modal('show');
            });

            $('body').on('click', '.editCategory', function(e) {
                var id = $(this).data('id');
                $(this).html('');
                $.ajax({
                    url :"/category/"+id+"/edit",
                    dataType:"json",
                    success:function(data)
                    {
                        console.log(data.result.id);
                        $('#modelHeading').html("Edit Category");
                        $('#savedata').val("edit-user");
                        $('#categoryModel').modal('show');
                        $('#id').val(data.result.id);
                        $('#category_name').val(data.result.category_name);
                        $('#category_detail').val(data.result.category_detail);
                    }
                });
            });

            $('#savedata').click(function(e) {
                e.preventDefault();
                $(this).html('Save Changes..');
                $.ajax({
                    data: $('#categoryForm').serialize(),
                    url: "{{ route('category.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        $('#categoryForm').trigger("reset");
                        $('#categoryModel').modal('hide');
                        table.draw();
                        $('#savedata').html('Save');
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#savedata').html('Save Changes');
                    }
                });
            });

            $('body').on('click', '.deleteCategory', function() {
                var id = $(this).data("id");
                var delete_url = $(this).data("url");

                if (confirm("Are You sure want to delete !")) {
                    $.ajax({
                        url: delete_url,
                        type: "DELETE",
                        dataType: "json",
                        data: {
                            _token: "{{csrf_token()}}"
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.delete) {
                                /* delete_row.fadeOut(1000, function() {
                                    delete_row.remove();
                                    $('#supplier_table').DataTable().ajax.reload();
                                    toastr.success("{{__('messages.success')}}", "{{__('messages.Record Deleted Successfully')}}");
                                }); */
                                // table.draw();
                                $('.category_list').DataTable().ajax.reload();
                                alert('Data Deleted');
                            } else {
                                services_toastr("{{__('messages.error')}}", 'Danger', 'something went to wrong !!');
                            }
                        }
                    })
                }


                /* var id = $(this).data("id");
                confirm("Are You sure want to delete this Category!");
               $.ajax({
                    type: "DELETE",
                    url: "{{ route('category.store') }}" + '/' + id,
                    success: function(data) {
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });*/
            });

        });
    </script>
@endsection
