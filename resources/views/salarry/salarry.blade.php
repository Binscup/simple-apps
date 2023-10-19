@extends('layout.material')

@section('my-content')
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
            </div>
            <div class="card-body">
                <h4 style="margin-bottom: 20px;">Data Employes Salarry</h4>
                  <a href="/EmployeSalarry/Form" type="button" class="btn btn-icon btn-info" > Add New</a>
                  <hr>
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                      </tr>
                    </thead>
                    <tbody>
                 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </div>
 
@endsection