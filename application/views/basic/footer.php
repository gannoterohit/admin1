</div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar bg-white user-profile">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <!-- <h5 class="m-0 me-2">Profile</h5> -->

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
               
                <ul>
                    <li><a href="<?= base_url(); ?>"><i class="fa-solid fa-user"></i> Manage Profile</a></li>
                    <li><a href="<?= base_url(); ?>"><i class="fa-solid fa-lock"></i> Change Password</a></li>
                    <li><a href="<?= base_url(); ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>


            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url(); ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="<?= base_url(); ?>assets/js/bundle.js"></script>

        <!-- <script src="<?= base_url(); ?>assets/libs/select2/js/select2.min.js"></script> -->
        <!-- <script src="<?= base_url(); ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->
        <script src="<?= base_url(); ?>assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

        <!-- apexcharts -->
        <!-- <script src="<?= base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script> -->

        <!-- Vector map-->
        <!-- <script src="<?= base_url(); ?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script> -->
        <!-- <script src="<?= base_url(); ?>assets/libs/jsvectormap/maps/world-merc.js"></script> -->

        <!-- <script src="<?= base_url(); ?>assets/js/pages/dashboard.init.js"></script> -->

        <!-- <script src="<?= base_url(); ?>assets/js/pages/form-advanced.init.js"></script> -->

        <!-- App js -->
        <script src="<?= base_url(); ?>assets/js/app.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url(); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url(); ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/jszip/jszip.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        

        <script src="<?= base_url(); ?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="<?= base_url(); ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="<?= base_url(); ?>assets/js/pages/datatables.init.js"></script>
        
        <script src="<?= base_url(); ?>assets/select/select2.min.js"></script>
        <script src="<?= base_url(); ?>assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/pages/form-validation.init.js"></script>

        <script>
       $(document).ready(function() {
            var rowTemplate = `
                <div class="row mt-1">
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
                    <div class="col-lg-2 mb-2 mt-1">
                        <button class="btn btn-danger w-100 mt-4 remove-button">Remove</button>
                    </div>
                </div>
            `;

            $('.add-button').click(function() {
                var newRow = $(rowTemplate);
                $('#item-list').append(newRow);
                newRow.find('.remove-button').click(function() {
                    $(this).closest('.row').remove();
                });
            });
        });
        </script>

    <script>
        $(document).ready(function() {
            $('.print-button').click(function() {
                window.print();
            });
       
            $("#alternative-page-datatable-GST").DataTable({
                pagingType: "full_numbers",
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $(".dataTables_length select").addClass("form-select form-select-sm")
                }
            }),
            $("#alternative-page-datatable-BANK").DataTable({
                pagingType: "full_numbers",
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $(".dataTables_length select").addClass("form-select form-select-sm")
                }
            }),
            $("#alternative-page-datatable-purchase-order").DataTable({
                 pagingType: "full_numbers",
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                    $(".dataTables_length select").addClass("form-select form-select-sm");
                },
                buttons: [
                    'copy', 
                    'excel' 
                ]
            })
        });
        
        $(document).ready(function() {
            $(".select2").select2();
        });
        
    </script>

    </body>


<!-- Design By Nitesh Malviya nmalviya575@gmail.com -->
</html>