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
                        <th>No</th>
                        <th>Trf no</th>
                        <th>PI no</th>
                        <th>Ti no</th>
                        <th>Company name</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th title="Payment status">Payment</th>
                        <th class="text-center">...</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Trf no</th>
                        <th>PI no</th>
                        <th>Ti no</th>
                        <th>Company name</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th title="Payment status">Payment</th>
                        <th class="text-center">...</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TRF/445</td>
                        <td>PI/788</td>
                        <td>TI/445</td>
                        <td>Excel agrivet</td>
                        <td>$320,800</td>
                        <td>2011/04/25</td>
                        <td>Pending</td>
                        <td>
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_ti.php?action=view_ti&uId=5235&tiId=54525">View</a>
                                    <a class="dropdown-item" href="./edit_ti.php?action=edit_ti&uId=5235&tiId=54525">Edit</a>
                                    <a class="dropdown-item" href="./pdf_ti.php?action=pdf_ti&uId=5235&tiId=54525">PDF</a>
                                    <a class="dropdown-item user_delete_ti" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TRF/445</td>
                        <td>PI/788</td>
                        <td>TI/445</td>
                        <td>Excel agrivet</td>
                        <td>$320,800</td>
                        <td>2011/04/25</td>
                        <td>Pending</td>
                        <td>
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_ti.php?action=view_ti&uId=5235&tiId=54525">View</a>
                                    <a class="dropdown-item" href="./edit_ti.php?action=edit_ti&uId=5235&tiId=54525">Edit</a>
                                    <a class="dropdown-item" href="./pdf_ti.php?action=pdf_ti&uId=5235&tiId=54525">PDF</a>
                                    <a class="dropdown-item user_delete_ti" href="#">Delete</a>
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