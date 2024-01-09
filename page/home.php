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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
	<section class="section dashboard">
		<div class="row">
			<!-- Request Card -->
			<div class="col-sm-12 col-lg-3">
				<div class="card sales-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="bi bi-stickies"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Total Request
		                    </div>
	                    </div>
	                    <div class="font-40">10</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- End request Card -->
            <!-- Open Card -->
			<div class="col-sm-12 col-lg-3">
				<div class="card revenue-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="bi bi-folder2-open"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Open
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- End request Card -->
            <!-- Assigned Card -->
			<div class="col-sm-12 col-lg-3">
				<div class="card assigned-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-user-shared-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Assigned
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- End Assigned Card -->
            <!-- Onhold Card -->
			<div class="col-sm-12 col-lg-3">
				<div class="card customers-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-admin-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	On Hold
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- End Onhold Card -->		
            <!-- Pending Card -->
            <div class="col-sm-12 col-lg-3">
				<div class="card pending-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-admin-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Pending
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- Pending Card End -->
            <!-- Completed Card -->
            <div class="col-sm-12 col-lg-3">
				<div class="card completed-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-user-follow-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Completed
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- Completed Card End -->
            <!-- Canceled Card -->
            <div class="col-sm-12 col-lg-3">
				<div class="card cancel-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-user-follow-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Canceled
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- Canceled Card End -->
            <!-- Canceled Card -->
            <div class="col-sm-12 col-lg-3">
				<div class="card completed-card">
					<div class="px-2 pt-3 pb-3">
					<div class="d-flex justify-content-between align-items-center">
	                    <div class="d-flex align-items-center">
		                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
		                      <i class="ri-user-star-line"></i>
		                    </div>
		                    &nbsp;&nbsp;
		                    <div class="font-20">
		                    	Rescheduled
		                    </div>
	                    </div>
	                    <div class="font-40">02</div>
                  	</div>
					</div>
				</div>
			</div>
            <!-- Canceled Card End -->
            <!-- Charts -->
            <div class="col-sm-12 col-lg-6">
            	<div class="card p-3">
            	<h5 class="card-title">Service Ticket Chart</h5>
              <!-- Bar Chart -->
	              <canvas id="barChart" style="height: 400px;"></canvas>
	              <script>
	                document.addEventListener("DOMContentLoaded", () => {
	                  new Chart(document.querySelector('#barChart'), {
	                    type: 'bar',
	                    data: {
	                      labels: ['Total Request', 'Open', 'Assigned', 'On Hold', 'Pending', 'Completed', 'Canceled', 'Rescheduled'],
	                      datasets: [{
	                        label: 'Bar Chart',
	                        data: [65, 59, 80, 81, 56, 55, 40, 20],
	                        backgroundColor: [
	                          'rgba(255, 99, 132, 0.2)',
	                          'rgba(255, 159, 64, 0.2)',
	                          'rgba(255, 205, 86, 0.2)',
	                          'rgba(75, 192, 192, 0.2)',
	                          'rgba(54, 162, 235, 0.2)',
	                          'rgba(153, 102, 255, 0.2)',
	                          'rgba(201, 203, 207, 0.2)'
	                        ],
	                        borderColor: [
	                          'rgb(255, 99, 132)',
	                          'rgb(255, 159, 64)',
	                          'rgb(255, 205, 86)',
	                          'rgb(75, 192, 192)',
	                          'rgb(54, 162, 235)',
	                          'rgb(153, 102, 255)',
	                          'rgb(201, 203, 207)'
	                        ],
	                        borderWidth: 1
	                      }]
	                    },
	                    options: {
	                      scales: {
	                        y: {
	                          beginAtZero: true
	                        }
	                      }
	                    }
	                  });
	                });
	              </script>
            	</div>
            </div>
            <div class="col-sm-12 col-lg-6">
            	<div class="card p-3">
            	<h5 class="card-title">Ticket Activities</h5>
	              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'On Call',
                        'Warranty',
                        'AMC with spare part',
                        'AMC without spare part'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [300, 50, 100],
                        backgroundColor: [
                          '#75B798',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          '#FFDA6A'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->
            	</div>
            </div>
            <!-- Products -->
            <div class="col-sm-12 col-lg-6">
            	<div class="card p-3 mb-2">
            		<h5 class="card-title">Products</h5>
	            	<div class="card sales-card">
						<div class="px-3 pt-3 pb-3">
						<div class="d-flex justify-content-between align-items-center">
		                    <div class="d-flex align-items-center">
			                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
			                      <i class="ri-archive-line"></i>
			                    </div>
			                    &nbsp;&nbsp;
			                    <div class="font-20">
			                    	Total Product
			                    </div>
		                    </div>
		                    <div class="font-40">10</div>
	                  	</div>
						</div>
					</div>
					<div class="card assigned-card">
						<div class="px-3 pt-3 pb-3">
						<div class="d-flex justify-content-between align-items-center">
		                    <div class="d-flex align-items-center">
			                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
			                      <i class="bi bi-arrow-repeat"></i>
			                    </div>
			                    &nbsp;&nbsp;
			                    <div class="font-20">
			                    	Renewal Product
			                    </div>
		                    </div>
		                    <div class="font-40">15</div>
	                  	</div>
						</div>
					</div>
					<div class="card revenue-card">
						<div class="px-3 pt-3 pb-3">
						<div class="d-flex justify-content-between align-items-center">
		                    <div class="d-flex align-items-center">
			                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
			                      <i class="bi bi-patch-check"></i>
			                    </div>
			                    &nbsp;&nbsp;
			                    <div class="font-20">
			                    	Renewal Product
			                    </div>
		                    </div>
		                    <div class="font-40">15</div>
	                  	</div>
						</div>
					</div>
				</div>
            </div>
            <div class="col-sm-12 col-lg-6">
            	<div class="card p-3 mb-2">
            		<div class="filter">
	                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
	                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
	                    <li class="dropdown-header text-start">
	                      <h6>Filter</h6>
	                    </li>

	                    <li><a class="dropdown-item" href="#">Today</a></li>
	                    <li><a class="dropdown-item" href="#">Week</a></li>
	                    <li><a class="dropdown-item" href="#">This Month</a></li>
	                    <li><a class="dropdown-item" href="#">This Year</a></li>
	                  </ul>
	                </div>
	                <div class="card-body">
	                	<h5 class="card-title">Product Renewal and Warranty Remainder <span> | Today</span></h5>
	                	<div class="mb-2">
	                		<button type="button" class="btn btn-warning rounded-pill">Renewal</button>
	                		&nbsp;
	                		<button type="button" class="btn btn-primary rounded-pill">Warranty</button>
	                	</div>
	                	<div class="mt-3">
		                	<div class="row mb-2">
		                		<div class="col-7">
		                			<b>Product Name</b>
		                		</div>
		                		<div class="col-5">
		                			<b>Renewal</b>
		                		</div>
		                	</div>
		                	<div class="w-100" style="height:253px;overflow-y: auto; overflow-x: hidden;">
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
			                	<div class="row mb-2">
			                		<div class="col-7">
			                			<i class='ri-circle-fill activity-badge text-warning align-self-start'></i>
			                			&nbsp;
			                			Product name ...
			                		</div>
			                		<div class="col-5">
			                			5th January 2025
			                		</div>
			                	</div>
		                	</div>
	                	</div>
	                </div>
            	</div>
            </div>
		</div>
	</section>
</main>
<?php include '../part/js.link.php';?>
</body>
</html>