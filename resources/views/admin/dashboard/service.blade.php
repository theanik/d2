@extends('admin.partials.app')
@section ('title', 'service')
@section ('css')
<style>

</style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Service List</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="card-options">
                        <button class="btn btn-primary float-right add_service"> <i class="fas fa-plus-circle"></i>     Service</button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table id="ServiceTable" class="table table-striped table-borderd table-hover" style="width:100%">
                                        
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ServiceModel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example-Modal3">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="roleForm" method="post" action="">
                <div class="modal-body">
                    <input type="hidden" name="role_id" id="role_id" class="role_id">
                    <div class="form-group">
                        <label for="" class="form-control-label">Title</label>
                        <input type="text" class="form-control form-control-sm rolename" name="" id="" placeholder="Enter Title">
                    </div> 
                    <div class="form-group">
                        <label for="" class="form-control-label">Image</label>
                        <input type="file" id="myfile" name="myfile" class="form-control form-control-sm rolename">
                    </div> 
                    <div class="form-group">
                        <label for="rolename" class="form-control-label">Article</label><br>
                        <textarea id="" rows="4" class="rounded" style="width:100%;">

                        </textarea>
                    </div> 
                    <div class="form-group">
                        <label for="rolename" class="form-control-label">Category</label>
                        <input type="text" class="form-control form-control-sm rolename" name="rolename" id="rolename" placeholder="Enter Article">
                    </div> 
                    <div class="form-group">
                        <label for="guard_name" class="form-control-label">Status</label>
                        <select name="guard_name" id="guard_name" class="form-control">
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </select>
                    </div> 
                    </div> 
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#ServiceTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'',
            columns: [
                { title: "SL", data: 'id'},
                { title: "Title", data: 'title'},
                { title: "Image", data: 'image'},
                { title: "Article", data: 'article'},
                { title: "Category", data: 'category'},
                { title: "Status", data: 'Status'},
                { title: "Action", data: 'action'},
            ]
        });

        $('#roleForm').ajaxForm({
            beforeSend: formBeforeSend,
            beforeSubmit: formBeforeSubmit,
            error: formError,
            success: function (responseText, statusText, xhr, $form) {
                formSuccess(responseText, statusText, xhr, $form);
                $('#ServiceModel').modal('hide');
                $('#ServiceTable').DataTable().draw(true);
            },
            clearForm: true,
            resetForm: true
        });
    });

    $(document).on('click','.add_service',function(){
        $("#ServiceModel").modal("toggle");
    });

    // $(document).on("click",".roleEdit", function(){
    //     var id = $(this).attr('id');
    //     var name = $(this).attr('name');
    //     $('#ServiceModel').modal('show');
    //     $("#role_id").val(id);
    //     $("#rolename").val(name);
    // });


    // $(document).on("click",".roleDelete", function(){
    //     var Id = $(this).attr('id');
        
    //     $(this).ajaxSubmit({
    //         error: formError,
    //         data: { "id": Id },
    //         dataType: 'json',
    //         method: 'GET',
    //         url: "",
    //         success: function (responseText) {
    //             $("#ServiceTable").DataTable().draw(true)
    //         }
    //     });
    // });
</script>

@endsection