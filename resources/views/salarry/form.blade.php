@extends('layout.material')
@section('my-content')
        <div class="row">
          <div class="col-12 ">
            <div class="card">
              <form>
                <div class="card-header">
                  <h4>Tables form</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Postition</label>
                    <input type="email" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Office</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="form-group mb-0">
                    <label>Age</label>
                    <input type="email" class="form-control">
                  </div><br>
                  <div class="form-group mb-0">
                    <label>Start Date</label>
                    <input type="email" class="form-control">
                  </div><br>
                  <div class="form-group mb-0">
                    <label>Sallary</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
  </div>
@endsection