@extends('admin.partials.app')
@section ('title', 'Dhashboard')
@section('content')
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i> Form Samples</h1>
      <p>Sample forms</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Vertical Form</h3>
        <div class="tile-body">
          <form>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input class="form-control" type="text" placeholder="Enter full name">
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input class="form-control" type="email" placeholder="Enter email address">
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Gender</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender">Male
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="gender">Female
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Identity Proof</label>
              <input class="form-control" type="file">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">I accept the terms and conditions
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="tile-footer">
          <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Register</h3>
        <div class="tile-body">
          <form class="form-horizontal">
            <div class="form-group row">
              <label class="control-label col-md-3">Name</label>
              <div class="col-md-8">
                <input class="form-control" type="text" placeholder="Enter full name">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Email</label>
              <div class="col-md-8">
                <input class="form-control col-md-8" type="email" placeholder="Enter email address">
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-8">
                <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-9">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender">Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender">Female
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="control-label col-md-3">Identity Proof</label>
              <div class="col-md-8">
                <input class="form-control" type="file">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-8 col-md-offset-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">I accept the terms and conditions
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="tile-footer">
          <div class="row">
            <div class="col-md-8 col-md-offset-3">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearix"></div>
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Subscribe</h3>
        <div class="tile-body">
          <form class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Name</label>
              <input class="form-control" type="text" placeholder="Enter your name">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" placeholder="Enter your email">
            </div>
            <div class="form-group col-md-4 align-self-end">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
