@extends('admin.partials.app')
@section ('title', 'service')
@section ('css')
<style>

</style>
@endsection
@section('content')
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>     
 @endif

</div>
<div class="row">

    <div class="col-md-6">
       
        <div class="card">
            <div class="card-header">
                Update Passwrod
            </div>
            <div class="card-body">
                
                <form action="{{ route('update.password') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="oldpassword">Enter Old Password</label>
                      <input type="password" class="form-control" id="oldpassword" placeholder="Enter Old Password" name="oldpassword">
                    </div>
                    <div class="form-group">
                      <label for="newpasseord">New Password</label>
                      <input type="password" class="form-control" id="newpasseord" placeholder="New Password" name="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
        

    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Update Info
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email" value="{{ auth()->user()->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
        

    </div>
</div>
@endsection

@section('js')

<script type="text/javascript">
    
</script>

@endsection