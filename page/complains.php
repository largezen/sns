<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SNS | RaiseTickets</title>
  <?php include '../part/css.link.php'; ?>
</head>

<body>
  <?php include '../part/topbar.php'; ?>
  <?php include '../part/sidebar.php'; ?>
  <main id="main" class="main">
    <div class="row align-items-center">
      <div class="col-sm-12 col-lg-10">
        <div class="pagetitle">
          <h1>Raise Tickets</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Raise Tickets</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-sm-12 col-lg-2">
        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Product</button>
      </div>
    </div>
    <section class="section dashboard">
      <div class="card p-2 mt-2">
        <div id="all_desktop" class="d-none d-lg-block d-md-block d-sm-none">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <div>
              <select class="form-select" id="limit">
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
              </select>
            </div>
            <div>
              <input type="search" class="form-control" id="search" placeholder="Search" />
            </div>
          </div>

          <table class="table text-center" id="product_list_table">
            <thead>
              <tr>
                <th>Serial No</th>
                <th>Ticket Number</th>
                <th>Complaint</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="pbody">
              <tr>
                <th scope="row">1</th>
                <td>#445367</td>
                <td>My Antivirus is not working...</td>
                <td>02/10/2023</td>
                <td><span class="badge text-bg-primary">Completd</span></td>
                <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="ri-restart-fill"></i> <i class="bi bi-eye-fill"></i></a></td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>#445367</td>
                <td>My Antivirus is not working...</td>
                <td>02/10/2023</td>
                <td><span class="badge text-bg-success">Completd</span></td>
                <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="ri-restart-fill"></i> <i class="bi bi-eye-fill"></i></a></td>
              </tr>
            </tbody>
          </table>

          <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
              <ul class="pagination" id="pagination">

              </ul>
            </nav>
          </div>
        </div>
        <div id="all_mobile" class="d-lg-none d-md-none d-sm-block">
          <div class="input-group mb-3">
            <input type="search" class="form-control" placeholder="Search" id="searchmobile">
            <button class="btn btn-primary" type="button" id="searchbtn"><i class="bi bi-search"></i></button>
          </div>
          <div class="accordion mb-2" id="product_accor">

          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-primary d-none" id="loadmorebtn">Load More</button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- model for add rais -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Complaint</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Complain</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">New Product Query</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-sm-12 col-lg-4 mb-4">
                  <select class="form-select">
                    <option value="">Select Product</option>
                  </select>
                </div>
                <div class="col-sm-12 col-lg-4 mb-4">
                  <select class="form-select">
                    <option value="">Select Job Catagory</option>
                  </select>
                </div>
                <div class="col-sm-12 col-lg-4 mb-4">
                  <select class="form-select">
                    <option value="">Select Job Type</option>
                  </select>
                </div>
                <div class="col-sm-12 col-lg-3 mb-4">
                  <input type="text" name="modelno" placeholder="Serial / Model No" class="form-control">
                </div>
                <div class="col-sm-12 col-lg-3 mb-4">
                  <select class="form-select">
                    <option value="">Preferable Day</option>
                  </select>
                </div>
                <div class="col-sm-12 col-lg-3 mb-4">
                  <input type="date" name="dates" class="form-control">
                </div>
                <div class="col-sm-12 col-lg-3 mb-4">
                  <div class="input-group">
                    <input type="number" name="" class="form-control" placeholder="HH">
                    <input type="number" name="" class="form-control" placeholder="MM">
                  </div>
                </div>
                <div class="col-12">
                  <h6 class="mb-2"><b>Note for your Problem</b></h6>
                  <textarea rows="6" placeholder="Write a message" class="form-control"></textarea>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <h6 class="mb-2"><b>Write Your Product Query</b></h6>
              <textarea rows="6" placeholder="Write a message" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
  <?php include '../part/js.link.php'; ?>
</body>

</html>