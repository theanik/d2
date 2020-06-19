@extends('admin.partials.app')
@section ('title', 'service')
@section ('css')
<style>

</style>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pt-4" style="background-color: #009b97;; color: #ffff;">
                <h5>Contact</h5>
                </div>

                <div class="card-body">
                    <div>
                        <strong>Name : </strong><br>
                        {{$contact->name}}
                    </div>
                    <div>
                        <strong>Email : </strong><br>
                        {{$contact->email}}
                    </div>
                    <div>
                        <strong>Subject : </strong><br>
                        {{$contact->subject}}
                    </div>
                    <div>
                        <strong>Message : </strong><br>
                        {{$contact->message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    function deleteCategory(id){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
        })
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.value) {
           event.preventDefault();
           document.getElementById('delete-form-'+id).submit();
        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })
    }
   

</script>

@endsection