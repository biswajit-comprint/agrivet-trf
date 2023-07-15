<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h5 mb-2 text-gray-800">NIRS Lab Report list</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">NIRS Lab Report</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Trf no</th>
                        <th title="LB(laboratory), WO(work order)">Work order no</th>
                        <th>Report no</th>
                        <th>Laboratory</th>
                        <th>No of item</th>
                        <th title="Report uplode date">Date</th>
                        <th title="Assign by admin name">Assign by admin</th>
                        <th title="Done by this report">Done by</th>
                        <th>Status</th>
                        <th class="text-center">...</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Trf no</th>
                        <th title="LB(laboratory), WO(work order)">Work order no</th>
                        <th>Report no</th>
                        <th>Laboratory</th>
                        <th>No of item</th>
                        <th title="Report uplode date">Date</th>
                        <th title="Assign by admin name">Assign by admin</th>
                        <th title="Done by this report">Done by</th>
                        <th>Status</th>
                        <th class="text-center">...</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TRF/674</td>
                        <td title="LB(laboratory), WO(work order)">LB-2/WO-4525</td>
                        <td title="LB(lab), LBR(lab report)">LB-2/LBR-6525</td>
                        <td>NIRS</td>
                        <td>2</td>
                        <td>2011/04/25</td>
                        <td>Sayantani di</td>
                        <td>Monirul da</td>
                        <td><p class="text-success">Success</p></td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_report.php?action=view_report&rtId=45256">View report</a>
                                    <a class="dropdown-item" href="./edit_report.php?action=view_report&rtId=45256">Edit</a>
                                    <a class="dropdown-item" href="./pdf_report.php?action=view_report&rtId=45256">PDF</a>
                                    <a class="dropdown-item user_delete_report_all" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TRF/3440</td>
                        <td title="LB(laboratory), WO(work order)">LB-2/WO-2885</td>
                        <td title="LB(lab), LBR(lab report)">LB-2/LBR-552</td>
                        <td>NIRS</td>
                        <td>6</td>
                        <td>2011/04/25</td>
                        <td>Sayantani di</td>
                        <td>Monirul da</td>
                        <td><p class="text-success">Success</p></td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_report.php?action=view_report&rtId=45256">View report</a>
                                    <a class="dropdown-item" href="./edit_report.php?action=view_report&rtId=45256">Edit</a>
                                    <a class="dropdown-item" href="./pdf_report.php?action=view_report&rtId=45256">PDF</a>
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