<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
       <!-- Dahboard Row -->
       <div class="row">
            <div class="col-xl-12">
                <div class="card dash-card">
                   <div class="card-body dash-card-body px-0">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <img src="<?= base_url(); ?>assets/images/total-sales.png" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Sales</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">34,123.20 <span class="font-size-16">Rs </span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 2.8% Increase</span></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <img src="<?= base_url(); ?>assets/images/sales-expance.png" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Sales Expense</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">63,234 <span class="font-size-16">Rs </span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 23% Increase</span></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <img src="<?= base_url(); ?>assets/images/revenue-sales.png" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Receivable Revenue</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">425,34 <span class="font-size-16">Rs </span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 4.6% Receivable</span></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <img src="<?= base_url(); ?>assets/images/pending-sales.png" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-2">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Pending Payments</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">26,482.46 <span class="font-size-16">Rs </span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-danger text-danger font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-bottom-left"></i> 7.8% Pending</span></p>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Dashboard Row -->
    
         <!-- Data Table Row-->
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Sales Order</h4>
                  
                    <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            <tr>
                                <td>Tata Telecome</td>
                                <td>System Architect</td>
                                <td>Bhopal</td>
                                <td>61</td>
                                <td>2023/04/25</td>
                                <td>Rs 320,800</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Airtle India</td>
                                <td>Accountant</td>
                                <td>Noida</td>
                                <td>63</td>
                                <td>2023/07/25</td>
                                <td>Rs 170,750</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zee Business</td>
                                <td>Junior Technical Author</td>
                                <td>Punjab</td>
                                <td>66</td>
                                <td>2023/01/12</td>
                                <td>Rs 86,000</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zee Business</td>
                                <td>Senior Javascript Developer</td>
                                <td>Bhopal</td>
                                <td>22</td>
                                <td>2023/03/29</td>
                                <td>Rs 433,060</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Nagar Nigam Bhopal</td>
                                <td>Accountant</td>
                                <td>Noida</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>Rs 162,700</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Agnito Technologies</td>
                                <td>Integration Specialist</td>
                                <td>Indore</td>
                                <td>61</td>
                                <td>2023/12/02</td>
                                <td>Rs 372,000</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cato Tech Bhopal</td>
                                <td>Sales Assistant</td>
                                <td>Punjab</td>
                                <td>59</td>
                                <td>2023/08/06</td>
                                <td>Rs 137,500</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Noida</td>
                                <td>55</td>
                                <td>2023/10/14</td>
                                <td>Rs 327,900</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen HuRs t</td>
                                <td>Javascript Developer</td>
                                <td>Punjab</td>
                                <td>39</td>
                                <td>2023/09/15</td>
                                <td>Rs 205,500</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Bhopal</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>Rs 103,600</td>
                                <td>
                                    <a href="purchase-order-print" title="Print View" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-print"></i></a>
                                    <a title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    <a title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                                    <a title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
        </div>
        <!-- end Data Table Row-->

    </div>
    <!-- container-fluid -->
                