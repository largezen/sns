<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SNS</title>
  <?php include '../part/css.link.php'; ?>
</head>

<body>
  <?php include '../part/topbar.php'; ?>
  <?php include '../part/sidebar.php'; ?>
  <main id="main" class="main">
    <div class="row align-items-center">
      <div class="col-sm-12 col-lg-10">
        <div class="pagetitle">
          <h1>My Products</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">My Products</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-sm-12 col-lg-2">
        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Complaint</button>
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
                <th>ID</th>
                <th>Product Name</th>
                <th>Serial Number</th>
                <th>Model No</th>
                <th>Purchase Date</th>
                <th>Purchase Tag</th>
                <th>Purchase Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="pbody">
              <tr>
                <th scope="row">1</th>
                <td>Computer</td>
                <td>#445367</td>
                <td>#hkk567</td>
                <td>02/10/2023</td>
                <td><span class="badge text-bg-primary">Completd</span></td>
                <td><span class="badge text-bg-success">Active</span></td>
                <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye-fill"></i></a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Antivirus</td>
                <td>#445367</td>
                <td>#hkk567</td>
                <td>02/10/2023</td>
                <td><span class="badge text-bg-primary">Completd</span></td>
                <td><span class="badge text-bg-success" da>Active</span></td>
                <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-eye-fill"></i></a></td>
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
  <!-- modal  list -->
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Product name - McAfee Total Protection 2022</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="row mb-2">
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Id-</span>
                  <span>1</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Purchase Date-</span>
                  <span>02/10/2023</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Service Classification-</span>
                  <span>AMC with spare part</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Serial Number -</span>
                  <span>#656422</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Free Service Completed - </span>
                  <span>Check</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Start Date - </span>
                  <span>02/04/2023</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">Model No - </span>
                  <span>#656422</span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;"> </span>
                  <span> </span>
                </div>
                <div class="col-sm-4">
                  <span style="font-weight: bold;">End Date - </span>
                  <span>02/04/2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class='dashboard'>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service History</h5>
            </div>
            <div class="activity">
              <table class="table text-center" id="product_list_table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ticket Number</th>
                    <th>Ticket Activities</th>
                    <th>Ticket Description</th>
                    <th>Ticket Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="pbody">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>#456875</td>
                    <td>On Call</td>
                    <td>Want to repla...</td>
                    <td><span class="badge text-bg-primary">Completd</span></td>
                    <td><i class="bi bi-eye-fill"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>#456875</td>
                    <td>On Call</td>
                    <td>Want to repla...</td>
                    <td><span class="badge text-bg-success">Success</span></td>
                    <td><i class="bi bi-eye-fill"></i></td>
                  </tr>
                </tbody>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <?php include '../part/js.link.php'; ?>
</body>

</html>