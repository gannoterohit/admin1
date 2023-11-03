<body data-sidebar="colored">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div class="container-fluid" style="height: 100vh;">

        <div class="row login-row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-6">

                <!-- alert -->
                <div class="row">
                    <div class="col-lg-12 ps-lg-0">
                        <div class="alert mb-0 alert-danger alert-top-border alert-dismissible fade show" role="alert">
                            Incorrect username and password combination
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="card my-4">
                        <div class="card-body py-0 ps-lg-0">
                            <div class="row">
                                <div class="col-lg-5 C11327 py-5 d-flex justify-content-center align-items-center"
                                    style="border-radius: 15px 0px 0px 15px !important;">
                                    <img src="<?= base_url(); ?>assets/images/white-logo-m.png" class="img-fluid px-2">
                                </div>
                                <div class="col-lg-7 py-3 px-4">

                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <label class="fw-light fs-4 mb-3">Sign In</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <input type="password" class="form-control"
                                                placeholder="Enter your password">
                                        </div>
                                    </div>

                                    <a href="<?= base_url(); ?>dashboard" class="btn btn-dark w-100 mt-3">Submit</a>
                                    <div class="row mt-2">
                                        <div class="col-lg-12 text-center">
                                            <p class="">New to Shaadi7? <a href="<?= base_url(); ?>signup">Create an
                                                    account</a></p>
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