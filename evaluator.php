<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EVALUATOR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"
     />
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="evaluator.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>ONOF</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="https://cdn.vectorstock.com/i/1000x1000/85/85/evaluation-icon-on-white-background-vector-28848585.webp" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Evaluator #4</h6>
                        <span></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="evaluator.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="letter.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Sanction Letter</a>
                    
                    <a href="schedule.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Schedule</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <a><?php echo( "<button class=btn btn-dark border-0 w-100 onclick= \"location.href='/ChatApp/index.php'\">Messages</button>");?></a>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="https://cdn.vectorstock.com/i/1000x1000/85/85/evaluation-icon-on-white-background-vector-28848585.webp" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon sent you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="https://cdn.vectorstock.com/i/1000x1000/85/85/evaluation-icon-on-white-background-vector-28848585.webp" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jack send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="https://cdn.vectorstock.com/i/1000x1000/85/85/evaluation-icon-on-white-background-vector-28848585.webp" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jimmy send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="https://cdn.vectorstock.com/i/1000x1000/85/85/evaluation-icon-on-white-background-vector-28848585.webp" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Evaluator #4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a><?php echo( "<button class=btn btn-dark border-0 w-100 onclick= \"location.href='/Final/Landing_page_final.php'\">Logout</button>");?></a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

			
            <!-- Info Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Problem Statements</p>
                                <h6 class="mb-0">5</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Problem Statements Seen</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Proposals Received</p>
                                <h6 class="mb-0">7</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Sanction Letters Sent</p>
                                <h6 class="mb-0">2</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Info End -->


            <!-- Recent Projects -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0" id="example">
                            <thead>
                                <tr class="text-dark">
                                    
                                    <th scope="col">Problem statement</th>
                                    <th scope="col">Project Id</th>
                                    <th scope="col">Agency Name</th>
                                    <th scope="col">Category</th>
									<th scope="col">Domain</th>
									<th scope="col">Amount</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Action</th>
									<th scope="col">Proposals</th>
                                </tr>
                            </thead>
                            <tbody>
							
								<tr>
                                    
                                    <td>Runtime remote video quality assessment</td>
                                    <td>PS-01</td>
                                    <td>ISRO</td>
									<td>Software</td>
									<td>Miscellaneous</td>
                                    <td>₹30000</td>
                                    <td>2022-05-07</td>
                                    <td><a class="btn btn-sm btn-primary" href="proOrg1.html">Detail</a></td>
									<td><a class="btn btn-sm btn-primary" href="proposals.php">View</a></td>
                                </tr>
								<tr>
                                    
                                    <td>Open Innovation</td>
                                    <td>PS-07</td>
                                    <td>AICTE</td>
									<td>Software</td>
									<td>Miscellaneous</td>
                                    <td>₹10000</td>
                                    <td>2022-03-31</td>
                                    <td><a class="btn btn-sm btn-primary" href="proOrg1.html">Detail</a></td>
									<td><a class="btn btn-sm btn-primary" href="proposals.php">View</a></td>
                                </tr>
								<!-- to fetch data from rows-->
								
								<!--
                                
                                
                                <tr>
                                    
                                    <td>Scholarship website</td>
                                    <td>INV-0123</td>
                                    <td>AICTE</td>
                                    <td>$1200</td>
                                    <td>2 months</td>
                                    <td><a class="btn btn-sm btn-primary" href="proOrg.html">Detail</a></td>
                                </tr>
								-->
								
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Projects End -->

            <br> <br>
            
            <div class="col-sm-6 col-md-12 col-xl-12S">
                <div class="h-100 bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Calender</h6>
                        <a href="">Show All</a>
                    </div>
                <div id="calender"></div>
            </div>
            </div>
                    
            <!-- Widgets End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
    $(function(){
      $("#example").dataTable();
    })
    </script>
</body>

</html>