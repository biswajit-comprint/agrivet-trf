<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h5 mb-2 text-gray-800">Tax Invoice</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tax Invoice Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th data-toggle="tooltip" data-placement="top" title="TRF no">No</th>
                        <th data-toggle="tooltip" data-placement="top" title="Compant name">Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th data-toggle="tooltip" data-placement="top" title="Payment method">Payment</th>
                        <th data-toggle="tooltip" data-placement="top" title="Date of creation">Date</th>
                        <th class="text-center" data-toggle="tooltip" data-placement="top" title="Options">...</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Payment</th>
                        <th>Date</th>
                        <th class="text-center">...</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>System Architect</td>
                        <td>tokyo@gmail.com</td>
                        <td>9051757287</td>
                        <td><span>$</span>170,750</td>
                        <td>2011/07/25</td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_ti.php?action=view_ti&uId=4525&tiId=5236552">View</a>
                                    <a class="dropdown-item" href="./pdf_ti.php?action=pdf_ti&uId=4525&tiId=5236552">PDF</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>System Architect</td>
                        <td>tokyo@gmail.com</td>
                        <td>9051757287</td>
                        <td><span>$</span>170,750</td>
                        <td>2011/07/25</td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_ti.php">View</a>
                                    <a class="dropdown-item" href="./pdf_ti.php">PDF</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <!-- Modal (user_delete_ti) -->
        <div class="modal fade" id="user_delete_ti_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tax Invoice</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>