<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Reports</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Reports Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl no</th>
                        <th>Trf sl no</th>
                        <th>Report id</th>
                        <th>Laboratory</th>
                        <th>Date of trf submition</th>
                        <th>Report upload date</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sl no</th>
                        <th>Trf sl no</th>
                        <th>Report id</th>
                        <th>Laboratory</th>
                        <th>Date of trf submition</th>
                        <th>Report upload date</th>
                        <th>...</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TRF/667</td>
                        <td>YRF/577/899</td>
                        <td>Edinburgh</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_report.php?action=view_report&trfId=5236552&reportId=4525">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item user_delete_report_all" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TRF/667</td>
                        <td>YRF/577/899</td>
                        <td>Tokyo</td>
                        <td>2011/04/25</td>
                        <td>2011/07/25</td>
                        <td>
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item user_delete_report_all" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <!-- Modal (user_delete_ti) -->
        <div class="modal fade" id="user_delete_report_all_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete report</h5>
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