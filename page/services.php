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
        <div class="pagetitle">
            <h1>Services</h1>
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
                                <th>Ticket Number</th>
                                <th>Ticket Activities</th>
                                <th>Ticket Description</th>
                                <th>Ticket Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="pbody">
                            <tr>
                                <th scope="row">1</th>
                                <td>Computer</td>
                                <td>#445367</td>
                                <td>On call</td>
                                <td>Went to replace screen want to replace screen...</td>
                                <td><span class="badge text-bg-primary">Completd</span></td>
                                <td><i class="bi bi-eye-fill"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Computer</td>
                                <td>#445367</td>
                                <td>On call</td>
                                <td>Went to replace screen want to replace screen...</td>
                                <td><span class="badge text-bg-success">Assigned</span></td>
                                <td><i class="bi bi-eye-fill"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Computer</td>
                                <td>#445367</td>
                                <td>On call</td>
                                <td>Went to replace screen want to replace screen...</td>
                                <td><span class="badge text-bg-danger">Open</span></td>
                                <td><i class="bi bi-eye-fill"></i></td>
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
    <!-- Service Modal -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <!-- product Detials part -->
                            <section class='dashboard'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Product Details</h5>
                                        <div class="row mb-2">
                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;">Product Name:</span>
                                                <span>HP</span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;"><b>Product Tag:</b></span>
                                                <span>test</span>
                                            </div>

                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;"><b>Model Number:</b></span>
                                                <span>Hmps6x2</span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;"><b>Added Date:</b></span>
                                                <span>03/02/2023</span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;"><b>Serial Number:</b></span>
                                                <span>#445367</span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <!-- Empty span -->
                                                <span></span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 mt-4">
                                                <span style="font-weight: bold;"><b>Purchase Date:</b></span>
                                                <span>02/05/2023</span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6 mt-4">
                                                <span style="font-weight: bold;"><b>Product Note:</b></span>
                                                <span></span>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <span style="font-weight: bold;"><b>Warranty Start:</b></span>
                                                <span>10/05/2023</span>
                                                <span style="font-weight: bold;"><b>Warranty Ends:</b></span>
                                                <span>01/10/2023</span>
                                            </div>


                                            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit -->
                                            <div class="col-sm-12 col-lg-6">
                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class='dashboard'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Service Timeline</h5>

                                        <div class="activity">
                                            <div class='row mb-2'>
                                                <div class='col-6' style='font-weight: bold;'>Timeline</div>
                                                <div class='col-3' style='font-weight: bold;'>Location</div>
                                                <div class='col-3' style='font-weight: bold;'>Date</div>
                                            </div>

                                            <!-- start end -->
                                            <div class="activity-item">
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='d-flex'>
                                                            <div class="activite-label"></div>
                                                            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                                            <div class="activity-content">
                                                                Ticket Submited
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-3'>Office</div>
                                                    <div class='col-3'>12-12-2023</div>
                                                </div>

                                            </div><!-- End activity item-->
                                            <!-- start end -->
                                            <div class="activity-item">
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='d-flex'>
                                                            <div class="activite-label"></div>
                                                            <i class='bi bi-circle-fill activity-badge text-Secondary align-self-start'></i>
                                                            <div class="activity-content">
                                                                Ticket Open
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-3'>Office</div>
                                                    <div class='col-3'>12-12-2023</div>
                                                </div>

                                            </div><!-- End activity item-->
                                            <!-- start end -->
                                            <div class="activity-item">
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='d-flex'>
                                                            <div class="activite-label"></div>
                                                            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                                            <div class="activity-content">
                                                                Assigned to Ram Prasad
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-3'>Customer House</div>
                                                    <div class='col-3'>12-12-2024</div>
                                                </div>

                                            </div><!-- End activity item-->
                                            <!-- start end -->
                                            <div class="activity-item">
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='d-flex'>
                                                            <div class="activite-label"></div>
                                                            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                                            <div class="activity-content">
                                                                Service Started
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-3'>-</div>
                                                    <div class='col-3'>12-10-2023</div>
                                                </div>

                                            </div><!-- End activity item-->
                                            <!-- start end -->
                                            <div class="activity-item">
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <div class='d-flex'>
                                                            <div class="activite-label"></div>
                                                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                                            <div class="activity-content">
                                                                Service Completed
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-3'>Office</div>
                                                    <div class='col-3'>12-12-2023</div>
                                                </div>

                                            </div><!-- End activity item-->
                                        </div>
                                        <div class="mt-4 bg-success p-2 rounded text-white d-flex align-items-center justify-content-between">
                                            <p class="m-0">
                                                <strong class="mr-2">Quotation:</strong>
                                                <a href="#" class="text-white text-decoration-underline">Download</a>
                                            </p>
                                            <p class="m-0">
                                                <strong class="mr-2">Invoice:</strong>
                                                <a href="#" class="text-white text-decoration-underline">Download</a>
                                            </p>
                                            <p class="m-0">
                                                <strong class="mr-2">Total Charge:</strong>
                                                <span style="font-weight: 400;">&#8377;200</span>
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <!-- Ticket Detials part -->
                            <section class='dashboard'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ticket Details</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="content mb-4">
                                            <div class="row mb-2">
                                                <div class="col-sm-12 col-lg-6 mb-3">
                                                    <span class='font-weight-bold'><b>Ticket Number:</b></span>
                                                    <span>#656422</span>
                                                </div>
                                                <div class="col-sm-12 col-lg-6 mb-2">
                                                    <span class='font-weight-bold'><b>Date:</b> </span>
                                                    <span>02/03/2024</span>
                                                </div>
                                                <div class='col-12'>
                                                    <span class='font-weight-bold' style='color: #DD6257;'><b>Query</b></span>
                                                    <div class="p-2" style="border-radius: 8px; background: #FCF0F6;">
                                                        <span class='font-weight-bold'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id perspiciatis porro delectus praesentium sint harum</span>
                                                    </div>
                                                </div>

                                                <hr class="mb-3 mt-3">
                                                <div style="min-height: 300px;overflow-y:auto;">
                                                    <div class='col-12 mb-3'>
                                                        <div class='d-flex justify-content-between align-items-center mb-2'>
                                                            <span class='font-weight-bold' style='color: #0D6EFD;'><b>Support Agent</b></span>
                                                            <span>03/01/2024 - 2.00 Am</span>
                                                        </div>
                                                        <div class="p-2" style="border-radius: 8px; background: #F3F8FF;">
                                                            <span class='font-weight-bold'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id perspiciatis porro delectus praesentium sint harum</span>
                                                        </div>
                                                    </div>

                                                    <div class='col-12 mb-3'>
                                                        <div class='d-flex justify-content-between align-items-center mb-2'>
                                                            <span class='font-weight-bold' style='color: #0D6EFD;'><b>Customer</b></span>
                                                            <span>03/01/2024 - 2.00 Am</span>
                                                        </div>
                                                        <div class="p-2" style="border-radius: 8px; background: #F3F8FF;">
                                                            <span class='font-weight-bold'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id perspiciatis porro delectus praesentium sint harum</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Write here..." aria-label="Recipient's username" aria-describedby="button-addon2">

                                            <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="bi bi-send-fill"></i></button>

                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../part/js.link.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const eyeIcons = document.querySelectorAll('#product_list_table tbody tr td i.bi-eye-fill');

            eyeIcons.forEach((icon, index) => {
                icon.addEventListener('click', function() {

                    const row = this.closest('tr');
                    const productName = row.children[1].innerText;
                    const ticketNumber = row.children[2].innerText;

                    document.getElementById('exampleModalLabel').innerText = productName + ' Details';

                    // Show the modal
                    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
                    myModal.show();
                });
            });
        });
    </script>

</body>

</html>