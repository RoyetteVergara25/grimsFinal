@extends('main')
@section('title', 'Student')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
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
          <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img
                  class="profile-user-img img-fluid"
                  src="../../dist/img/James.jpg"
                  alt="User profile picture"
                  style="width: 200px; height: 200px;"
                />
              </div>
              <h3 class="profile-username text-center">James Garlit</h3>
              <p class="text-muted text-center">
                Software Quality Assurance Analyst
              </p>
            </div>
            <!-- /.card-body -->
          </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Student</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Birthdate</strong>
                <p class="text-muted">
                  2006
                </p>
                <hr />
                <strong><i class="fas fa-book mr-1"></i>Birthplace</strong>
                <p class="text-muted">
                  Quezon City
                </p><hr>
                <strong><i class="fas fa-book mr-1"></i>Age</strong>
                <p class="text-muted">
                  15
                </p><hr>
                <strong><i class="fas fa-book mr-1"></i>Gender</strong>
                <p class="text-muted">
                  Male
                </p><hr>
                <strong><i class="fas fa-book mr-1"></i>Nationality</strong>
                <p class="text-muted">
                  Pure Filipino
                </p><hr>
                <strong
                  ><i class="fas fa-map-marker-alt mr-1"></i>Address</strong>
                <p class="text-muted">Quezon City, Philippines</p>
                <hr />
                <strong><i class="fas fa-book mr-1"></i>Status</strong>
                <p class="text-muted">
                  Not Applicable to answer
                </p><hr>
                <strong><i class="far fa-file-alt mr-1"></i>Contact</strong>
                <p class="text-muted">09230201340</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i>Records</strong>
                <p class="text-muted">
                  <span class="tag tag-danger">BirthCertificate</span><br>
                  <span class="tag tag-success">ID</span><br>
                  <span class="tag tag-info">TOR</span><br>
                  <span class="tag tag-warning">Sticker</span><br>
                  <span class="tag tag-primary">Copy and Paste</span><br>
                </p>
                <hr />
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Malayo pa tayo pero malayo na tayo</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection