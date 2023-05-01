@extends('main')
@section('title', 'Dashboard')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
           <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Basic Info</h5>
                </div>
                <div class="card-body">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Middle Name</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 10 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Suffix</label>
                          <select class="form-control">
                            <option value="">Select Suffix</option>
                            <option value="">N/A</option>
                            <option value="">Jr.</option>
                            <option value="">Sr.</option>
                            <option value="">I</option>
                            <option value="">II</option>
                            <option value="">III</option>
                            <option value="">IV</option>
                            <option value="">V</option>
                          </select>
                        </div>
                        <!-- column 12 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Birthdate</label>
                          <input type="date" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Birthplace</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 10 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Age</label>
                          <input type="number" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Gender</label>
                          <select class="form-control">
                            <option value="">Select Gender</option>
                            <option value="">Male</option>
                            <option value="">Female</option>
                            <option value="">Prefer not to say</option>
                          </select>
                        </div>
                        <!-- column 12 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">House No.</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Street</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Barangay</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Province</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Zip Code</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Nationality</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>

                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Medical Condition</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Status</label>
                          <select class="form-control">
                            <option value="">Select Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                          </select>
                        </div>
                        <!-- column 12 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Student ID</label>
                          <input type="number" class="form-control" />
                        </div>
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Year Accepted</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <label class="form-label">Year Graduated</label>
                          <input type="text" class="form-control" />
                        </div>
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="mb-3">
                          <label for="formFile" class="form-label"
                            >Default file input example</label
                          >
                          <input
                            class="form-control"
                            type="file"
                            id="formFile"
                          />
                        </div>
                        <!-- column 10 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <!-- column 11 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <!-- column 9 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <!-- column 10 content -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                          Update
                        </button>
                        <button type="reset" class="btn btn-danger">
                          Reset
                        </button>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <!-- column 13 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <!-- column 14 content -->
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <!-- column 15 content -->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection