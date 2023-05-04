@extends('main')
@section('title', 'Dashboard')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Information</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-2 border-right">
                      <div class="mb-3">
                        <label for="yearAccepted" class="form-label"
                          >Student Number</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="yearAccepted"
                          name="yearAccepted"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="yearAccepted" class="form-label"
                          >Year Accepted:</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="yearAccepted"
                          name="yearAccepted"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="yearGraduated" class="form-label"
                          >Year Graduated:</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="yearGraduated"
                          name="yearGraduated"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label"
                          >Profile Picture</label
                        >
                        <input class="form-control" type="file" id="formFile" />
                      </div>
                    </div>
                    <!--Start of 1st Column-->
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="firstName" class="form-label"
                              >First Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstName"
                              name="firstName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="middleName" class="form-label"
                              >Middle Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="middleName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="lastName" class="form-label"
                              >Last Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="lastName"
                              name="lastName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
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
                        </div>
                      </div>
                      <!--End of 1st Column-->

                      <!--Start of 2nd Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="firstName" class="form-label"
                              >Birthdate</label
                            >
                            <input
                              type="date"
                              class="form-control"
                              id="firstName"
                              name="firstName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="middleName" class="form-label"
                              >Birthplace</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="middleName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="lastName" class="form-label">Age</label>
                            <input
                              type="number"
                              class="form-control"
                              id="lastName"
                              name="lastName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-control">
                              <option value="">Select Gender</option>
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
                        </div>
                      </div>
                      <!--End of 2nd Column-->

                      <!--Start of 3rd Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="firstName" class="form-label"
                              >Nationality</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstName"
                              name="firstName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="middleName" class="form-label"
                              >Status</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="middleName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="lastName" class="form-label"
                              >Medical Condition</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="lastName"
                              name="lastName"
                            />
                          </div>
                        </div>
                      </div>
                      <!--End of 3rd Column-->
                      <br />
                      <!--Start of 4th Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="firstName" class="form-label"
                              >House No.</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstName"
                              name="firstName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="middleName" class="form-label"
                              >Street</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="middleName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="lastName" class="form-label"
                              >Barangay</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="lastName"
                              name="lastName"
                            />
                          </div>
                        </div>
                      </div>
                      <!--End of 4th Column-->

                      <!--Start of 5th Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="firstName" class="form-label"
                              >City</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstName"
                              name="firstName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="middleName" class="form-label"
                              >Province</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="middleName"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="lastName" class="form-label"
                              >Zip Code</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="lastName"
                              name="lastName"
                            />
                          </div>
                        </div>
                      </div>
                      <!--End of 5th Column-->
                    </div>
                  </div>
                  <!--End of Row-->
                  <div class="row justify-content-end">
                    <div class="col-mt-3">
                      <button type="submit" class="mt-3 btn btn-primary">
                        Update
                      </button>
                      <button type="reset" class="mt-3 btn btn-danger">
                        Reset
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection