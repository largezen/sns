<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SNS</title>
	<?php include '../part/css.link.php';?>
</head>
<body>
<?php include '../part/topbar.php';?>
<?php include '../part/sidebar.php';?>
<main id="main" class="main">
	<div class="pagetitle">
      <h1>My Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">My Products</li>
        </ol>
      </nav>
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
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="pbody"></tbody>
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
<?php include '../part/js.link.php';?>
</body>
</html>