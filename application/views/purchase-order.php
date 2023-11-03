<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        
        
        <!-- Hisaab - Noida -->
        <div class="row">
            <div class="col-xl-12">

                <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                   <span class="fw-medium">Success</span>  - Record Save Successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                   <span class="fw-medium">Deleted</span> - Record Deleted
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Generate New Purchase Order</h4>
                    </div>
                    <div class="card-body">  
                        <form action="">
                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <label>Company</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Select Company</option>
                                        <option value="CP-1">Company 1</option>
                                        <option value="CP-2">Company 2</option>
                                        <option value="CP-3">Company 3</option>
                                        <option value="CP-4">Company 4</option>
                                        <option value="CP-5">Company 5</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label>PO Number</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <label>PO Date</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <label>Delivery Date</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label>Subject</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label>Project</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Select Project</option>
                                        <option value="CP-1">Project 1</option>
                                        <option value="CP-2">Project 2</option>
                                        <option value="CP-3">Project 3</option>
                                        <option value="CP-4">Project 4</option>
                                        <option value="CP-5">Project 5</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <label>Vendor</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Select Vendor</option>
                                        <option value="CP-1">Vendor 1</option>
                                        <option value="CP-2">Vendor 2</option>
                                        <option value="CP-3">Vendor 3</option>
                                        <option value="CP-4">Vendor 4</option>
                                        <option value="CP-5">Vendor 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-header px-0">
                                <h4 class="card-title">Add Items or Services</h4>
                            </div>

                            <div class="row mt-2">
                                <div class="col-lg-2 mb-2 pe-lg-1">
                                    <label>Item/Service</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>Item/Service Description</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>SAC Code</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Qty</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Price</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>CGST</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>SGST</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 ps-lg-1 mt-1">
                                  <a class="btn btn-dark mt-4 w-100 add-button">ADD</a>
                                </div>
                            </div>
                            <div class="row-template" id="item-list"></div>

                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <button type="submit" name="submit" class="btn btn-success px-5 my-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ROW Hisaab - Noida -->

    </div>
    <!-- container-fluid -->
                