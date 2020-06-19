@extends('admin.partials.app')
@section ('title', 'service')
@section ('css')
<style>

</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Email</th>
                  <th>Quantity</th>
                  <th>Desired Turnaround Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($quotes as $item)
                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->quantity}}</td>
                        <td>{{ $item->sellection}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('quote.show', $item->id) }}"><i class="fa fa-eye"></i></a>
                            <button onclick="deleteCategory({{ $item->id }})" type="button" class="btn btn-danger btn-sm waves-effect">
                              </i><i class="fa fa-trash"></i>
                          </button>
                          <form id="delete-form-{{ $item->id }}"
                              style="dispaly:none"
                               action="{{ route('quote.destroy',$item->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                          </form>
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