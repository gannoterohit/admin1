
    <body data-sidebar="colored">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div class="container-fluid" style="height: 100vh;">
                        
            <div class="row login-row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                    <form action=""  class="needs-validation" novalidate>
                        <div class="card my-4">
                            <div class="card-body py-0 ps-lg-0">
                                <div class="row">
                                    <div class="col-lg-4 C11327 py-5 d-flex justify-content-center align-items-center" style="border-radius: 15px 0px 0px 15px !important;">
                                        <img src="<?= base_url(); ?>assets/images/white-logo-m.png" class="img-fluid px-2">
                                    </div>
                                    <div class="col-lg-8 py-3 px-4">
                                    
                                        <div class="row">
                                            <div class="col-lg-12 text-start">
                                                <label class="fw-light fs-4 mb-3">Sign Up</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <label class="mb-1">GST NO</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter GST Numbe" aria-label="Example text with button addon" aria-describedby="button-addon1" required>
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Validate</button>
                                                    <div class="invalid-feedback"> Please Enter a valid GST No.</div>
                                                </div>
                                               
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="mb-1">Email ID</label>
                                                <input type="text" class="form-control" placeholder="Enter Email ID" required>
                                                <div class="invalid-feedback"> Please Enter a valid Email ID</div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="mb-1">Password</label>
                                                <input type="Password" class="form-control" placeholder="Create Your Password" required>
                                                <div class="invalid-feedback"> Please Enter Password</div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="mb-1">Confirm Password</label>
                                                 <input type="Password" class="form-control" placeholder="Please Confirm Your Password" required>
                                                 <div class="invalid-feedback"> Please Enter Confirm Password</div>
                                            </div>                                            
                                        </div>
                                        
                                        <button type="submit" class="btn btn-dark w-100 mt-3">Submit</button>
                                        <div class="row mt-2">
                                            <div class="col-lg-12 text-center">
                                                <p class="">Already an Account? <a href="<?= base_url(); ?>">Sign In</a></p>
                                            </div>
                                        </div>                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- END layout-wrapper -->
