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
              <li class="breadcrumb-item active">Edit Student</li>
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
                @csrf
                  <div class="row">
                    <div class="col-md-2 border-right">
                      <div class="mb-3">
                        <label for="" class="form-label"
                          >Student Number</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="studentNumber"
                          name=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label"
                          >Year Accepted:</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="dateAccepted"
                          name="DA"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label"
                          >Year Graduated:</label
                        >
                        <input
                          type="number"
                          class="form-control"
                          id="yearGraduated"
                          name="DG"
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
                            <label for="" class="form-label"
                              >First Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="firstName"
                              name="fname"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Middle Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="middleName"
                              name="mname"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Last Name:</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="lastName"
                              name="lname"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label">Suffix</label>
                            <select name="suffix" class="form-control">
                              <option value=""disabled selected>Select Suffix</option>
                              <option value="">N/A</option>
                              <option value="Jr.">Jr.</option>
                              <option value="Sr.">Sr.</option>
                              <option value="I">I</option>
                              <option value="II">II</option>
                              <option value="III">III</option>
                              <option value="IV">IV</option>
                              <option value="V">V</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!--End of 1st Column-->

                      <!--Start of 2nd Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Birthdate</label
                            >
                            <input
                              type="date"
                              class="form-control"
                              id="birthDate"
                              name="bdate"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Birthplace</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="birthPlace"
                              name="bplace"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label">Age</label>
                            <input
                              type="number"
                              class="form-control"
                              id="age"
                              name="age"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-control">
                              <option value=""disabled selected>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!--End of 2nd Column-->

                      <!--Start of 3rd Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Nationality</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="nationality"
                              name="nationality"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                          <label class="form-label">Gender</label>
                            <select name="Mstatus" class="form-control">
                            <option value=""disabled selected>Select Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                            </select>
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Medical Condition</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="medicalCondition"
                              name="medcom"
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
                            <label for="" class="form-label"
                              >House No.</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="houseNumber"
                              name="house_no"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Street</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="street"
                              name="street"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Barangay</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="barangay"
                              name="barangay"
                            />
                          </div>
                        </div>
                      </div>
                      <!--End of 4th Column-->

                      <!--Start of 5th Column-->
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >City</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="city"
                              name="city"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Province</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="province"
                              name="province"
                            />
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label for="" class="form-label"
                              >Zip Code</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="Zip_Code"
                              name="Zip_Code"
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
                        Add
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