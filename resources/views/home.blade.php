@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pt-4" style="background-color: #009b97;; color: #ffff;">
                <h5>Designer Country Dashboard</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-success" role="alert">
                        Successfully You're Logged In!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
