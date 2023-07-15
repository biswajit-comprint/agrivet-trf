<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">View Proforma Invoice Details</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- alert section -->
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Alert!</strong> You can update only basic details of client.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<!-- end alert section -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <!-- header -->
        <div class="row">
            <div class="col-12">
                <div class="flex flex-row align-content-center align-items-center">
                    <div class="flex-fill text-left" style="width: 33.33%">
                        <img src="https://trf.agrivet.in/assets/images/logo-arapl.png" style="width: 200px;"/>
                    </div>
                    <div class="flex-fill text-center" style="width: 33.33%"><h4>Proforma Invoice</h4></div>
                    <div class="flex-fill text-right" style="width: 33.33%">
                        <h6 class="font-weight-bold">Agrivet Research &amp; Advisory Private Limited</h6>
                        <p class="d-block font-bold line-height-sm mb-0">714, Block A, Lake Town, Kolkata,700089</p>
                        <p class="d-block mb-0">+91 33 4005 0857 / 0858</p>
                        <p class="d-block mb-0">centrallaboratory@agrivet.in | www.agrivet.in</p>
                        <p class="d-block mb-0">PAN: AAKCA8095L | GSTIN/UIN: 19AAKCA8095L1ZV</p>
                        <p class="d-block mb-0">CIN: U01403WB2012PTC184502</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- details -->
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Company Name</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Contact Person</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Company Address</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">State</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Contact No</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Email</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Mode of Delivery</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Tax Invoice No</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">TRF No</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Proforma Invoice</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Sample Receive Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Pan No</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">GSTIN</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Mode of Payment</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
            </div>
        </div>

        <!-- items -->
        <div class="row mt-5">
            <!-- item list table-->
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="font-weight-bold">Total</td>
                                <td class="font-weight-bold">$170,750</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Amount in words</td>
                                <td colspan="4">Total amount in word</td>
                                <td class="font-weight-bold">$170,750</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- bank details -->
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <td colspan="5">
                                    <span class="font-weight-bold">Declaration:</span> We declare that this invoice shows the actual price 
                                    of the goods/services, and all particulars are true and correct. 
                                    For further query, please feel free to contact our Central 
                                    Laboratory @ +919330022177
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="4" class="font-weight-bold">Bank Details</td>
                                <td rowspan="5" style="display: table-cell; vertical-align: middle">
                                    <img src="https://trf.agrivet.in/assets/images/stamp-agrivet-research-and-advisory.png" />
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Beneficiary Name</td>
                                <td colspan="4">Agrivet Research & Advisory Private Limited</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Bank</td>
                                <td>IDFC BANK LTD</td>
                                <td class="font-weight-bold">Branch</td>
                                <td>Lake Town</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Account Number</td>
                                <td>10081266144</td>
                                <td class="font-weight-bold">SWIFT CODE: & IFSC CODE:</td>
                                <td>SW1234456 & IDFB0060114</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mb-5">
    <div class="flex flex-row justify-content-end">
        <div class="mx-1">
            <button class="btn btn-primary">Update & Save</button>
        </div>
        <div class="mx-1">
            <a href="./pdf_pi.php" class="btn btn-danger">PDF</a>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>