<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h5 mb-2 text-gray-800">TRF</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Test Request Form Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Trf no</th>
                        <th>Company name</th>
                        <th>Sample details</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Report Status</th>
                        <th class="text-center">...</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Trf no</th>
                        <th>Company name</th>
                        <th>Sample details</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Report Status</th>
                        <th class="text-center">...</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>TRF/899</td>
                        <td>Edinburgh</td>
                        <td>rice oil</td>
                        <td>$320,800</td>
                        <td>2011/04/25</td>
                        <td>
                            <ul class="flex flex-row list-unstyled">
                                <li data-toggle="tooltip" data-placement="top" title="Finalcial proposal"><span class="badge badge-success">FP</span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Proforma invoice"><span class="badge badge-light">PI</span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Tax invoice"><span class="badge badge-light">TI</span></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="flex flex-row list-unstyled">
                                <li data-toggle="tooltip" data-placement="top" title="Generate report status"><span class="badge badge-light">RT</span></li>
                                <li>1/4</li>
                            </ul>
                        </td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_trf.php?action=view_trf&uId=34445&trfId=34555">View</a>
                                    <a class="dropdown-item" href="./edit_trf.php?action=edit_trf&uId=34445&trfId=34555">Edit</a>
                                    <a class="dropdown-item" href="./pdf_trf.php?action=pdf_trf&uId=34445&trfId=34555">PDF</a>
                                    <a class="dropdown-item" href="./admin_create_workOrder.php?action=workorder_trf&uId=34445&trfId=34555">Work order</a>
                                    <a class="dropdown-item" href="./view_trf.php?action=create_pi">Create PI</a>
                                    <a class="dropdown-item user_delete_trf" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TRF/0099</td>
                        <td>Tokyo</td>
                        <td>Rice oil</td>
                        <td>$170,750</td>
                        <td>2011/07/25</td>
                        <td>
                            <ul class="flex flex-row list-unstyled">
                                <li data-toggle="tooltip" data-placement="top" title="Finalcial proposal"><span class="badge badge-success">FP</span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Proforma invoice"><span class="badge badge-success">PI</span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Tax invoice"><span class="badge badge-light">TI</span></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="flex flex-row list-unstyled">
                                <li data-toggle="tooltip" data-placement="top" title="Generate report status"><span class="badge badge-light">RT</span></li>
                                <li>2/4</li>
                            </ul>
                        </td>
                        <td class="text-center">
                            <div class="dropdown no-arrow">
                                <button class="btn btn-light dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./view_trf.php?action=view_trf&uId=34445&trfId=34555">View</a>
                                    <a class="dropdown-item" href="./edit_trf.php?action=edit_trf&uId=34445&trfId=34555">Edit</a>
                                    <a class="dropdown-item" href="./pdf_trf.php?action=pdf_trf&uId=34445&trfId=34555">PDF</a>
                                    <a class="dropdown-item" href="./admin_create_workOrder.php?action=workorder_trf&uId=34445&trfId=34555">Work order</a>
                                    <a class="dropdown-item" href="./view_trf.php?action=create_pi">Create PI</a>
                                    <a class="dropdown-item user_delete_trf" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <!-- Modal (user_delete_trf) -->
        <div class="modal fade" id="user_delete_trf_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test Request Form</h5>
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