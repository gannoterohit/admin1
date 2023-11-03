<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        
        
        <!-- Hisaab - Noida -->
        <div class="row">
            <div class="col-xl-12">
                
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upload GST(2B File)</h4>
                    </div>
                    <div class="card-body">  
                        <form action="">
                            <div class="row">
                                <div class="col-lg-8 mb-2">
                                    <label>Choose File</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="customFile">
                                    </div>
                                </div>
                            </div>
                        

                            <div class="row">
                                <div class="col-lg-4 mb-2">
                                    <a class="btn btn-success px-5 my-4" data-bs-toggle="modal" data-bs-target="#UploadGST">Upload GST(2B File)</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Vandor 
                            <a href="<?= base_url(); ?>project" class="float-end btn btn-warning btn-sm mx-1 my-1">Add Expense</a>
                            <a href="<?= base_url(); ?>project" class="float-end btn btn-info btn-sm mx-1 my-1">Add Categories </a>
                            <a href="<?= base_url(); ?>project" class="float-end btn btn-success btn-sm mx-1 my-1">Add Account</a>
                            <a href="<?= base_url(); ?>project" class="float-end btn btn-danger btn-sm mx-1 my-1">Add Project</a>
                        </h4>
                    </div>
                    <div class="card-body">  
                        <form action="" class="border-bottom border-light pb-3">
                            <div class="row mt-2 d-flex justify-content-center align-items-end">
                                <div class="col-lg-2 mb-2 pe-lg-1">
                                    <label>Vandor Name</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>GSTIN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>PAN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>State</label>
                                    <select class="form-select select2"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>Address</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Category</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a Category</option>
                                        <option value="Category-1">Category 1</option>
                                        <option value="Category-2">Category 2</option>
                                        <option value="Category-3">Category 3</option>
                                        <option value="Category-4">Category 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Project</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Project</option>
                                        <option value="Project-1">Project 1</option>
                                        <option value="Project-2">Project 2</option>
                                        <option value="Project-3">Project 3</option>
                                        <option value="Project-4">Project 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Account</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Account</option>
                                        <option value="Account-1">Account 1</option>
                                        <option value="Account-2">Account 2</option>
                                        <option value="Account-3">Account 3</option>
                                        <option value="Account-4">Account 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 ps-lg-1 mt-1">
                                <a class="btn btn-success mt-4 w-100 add-button px-0">Submit</a>
                                </div>
                            </div>
                        </form>
                        <form action="" class="border-bottom border-light pb-3">
                            <div class="row mt-2 d-flex justify-content-center align-items-end">
                                <div class="col-lg-2 mb-2 pe-lg-1">
                                    <label>Vandor Name</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>GSTIN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>PAN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>State</label>
                                    <select class="form-select select2"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>Address</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Category</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a Category</option>
                                        <option value="Category-1">Category 1</option>
                                        <option value="Category-2">Category 2</option>
                                        <option value="Category-3">Category 3</option>
                                        <option value="Category-4">Category 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Project</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Project</option>
                                        <option value="Project-1">Project 1</option>
                                        <option value="Project-2">Project 2</option>
                                        <option value="Project-3">Project 3</option>
                                        <option value="Project-4">Project 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Account</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Account</option>
                                        <option value="Account-1">Account 1</option>
                                        <option value="Account-2">Account 2</option>
                                        <option value="Account-3">Account 3</option>
                                        <option value="Account-4">Account 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 ps-lg-1 mt-1">
                                <a class="btn btn-success mt-4 w-100 add-button px-0">Submit</a>
                                </div>
                            </div>
                        </form>
                        <form action="" class="border-bottom border-light pb-3">
                            <div class="row mt-2 d-flex justify-content-center align-items-end">
                                <div class="col-lg-2 mb-2 pe-lg-1">
                                    <label>Vandor Name</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>GSTIN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>PAN</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>State</label>
                                    <select class="form-select select2"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 mb-2 px-lg-1">
                                    <label>Address</label>
                                    <input class="form-control">
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Category</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select a Category</option>
                                        <option value="Category-1">Category 1</option>
                                        <option value="Category-2">Category 2</option>
                                        <option value="Category-3">Category 3</option>
                                        <option value="Category-4">Category 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Project</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Project</option>
                                        <option value="Project-1">Project 1</option>
                                        <option value="Project-2">Project 2</option>
                                        <option value="Project-3">Project 3</option>
                                        <option value="Project-4">Project 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 px-lg-1">
                                    <label>Account</label>
                                    <select class="form-select"  aria-label="Default select example" id="state_dropdown">
                                        <option value="">Select Account</option>
                                        <option value="Account-1">Account 1</option>
                                        <option value="Account-2">Account 2</option>
                                        <option value="Account-3">Account 3</option>
                                        <option value="Account-4">Account 4</option>
                                    </select>
                                </div>
                                <div class="col-lg-1 mb-2 ps-lg-1 mt-1">
                                <a class="btn btn-success mt-4 w-100 add-button px-0">Submit</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                        
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="alternative-page-datatable-GST" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Vendor Name</th>
                                        <th>GST Number</th>
                                        <th>Project</th>
                                        <th>Account</th>
                                        <th>Extends Category</th>
                                            <th style="width: 110px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            3
                                        </td>
                                        <td>Nitesh Malviya</td>
                                        <td>962541*******45</td>
                                        <td>Lottery Project</td>
                                        <td>962541*******45</td>
                                        <td>________</td>
                                        <td>
                                            <button title="Delete" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                            <button title="Edit" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></button>
                                            <button title="Copy" class="btn btn-outline-info btn-sm"><i class="fa-solid fa-copy"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pop Upload GST -->
                <div class="modal fade" id="UploadGST" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Upload GST(2B File) Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label>Vendor Name</label>
                                            <input class="form-control" placeholder="Enter Account No.">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>GST Number</label>
                                            <input class="form-control" placeholder="Enter Account No.">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>Project</label>
                                            <select class="form-control select2">
                                                <option value="">Select</option>
                                                <option value="1">Project 1</option>
                                                <option value="2">Project 2</option>
                                                <option value="3">Project 3</option>
                                                <option value="4">Project 4</option>
                                                <option value="5">Project 5</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>Account</label>
                                            <input class="form-control" placeholder="Enter Account No.">
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label>Extends Category</label>
                                            <input class="form-control" placeholder="Enter Account No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary waves-effect waves-light px-5">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END ROW Hisaab - Noida -->

    </div>
    <!-- container-fluid -->
                