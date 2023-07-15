<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h5 mb-2 text-gray-800">View report</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

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
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Issued to</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter Issued to">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Company Address</label>
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
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Sample details</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter Sample details">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Sample no</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter Sample no">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Mark on sample</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter Mark on sample">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Drawn by</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter Name Drawn by">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Sample received date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="date" id="id1" placeholder="Enter Sample received date">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Sample Receive Date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Enter your User Name">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Analysis date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="date" id="id1" placeholder="Enter Analysis date">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Report no</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Your Report no">
                    </div>
                </div>
                <div class="form-group row has-success">
                    <label class="control-label col-sm-4 font-weight-bold" for="id1">Report date</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="id1" placeholder="Your Report date">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
               <h4 class="text-center">ckeditor</h4>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <!-- observation -->
                    <div class="flex-grow-1">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row has-success">
                                <label class="control-label col-sm-4 font-weight-bold" for="id1">Issued to</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="id1" placeholder="Enter Issued to">
                                </div>
                            </div>
                            <div class="form-group row has-success">
                                <label class="control-label col-sm-4 font-weight-bold" for="id1">Company Address</label>
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
                        </div>
                    </div>
                    <!-- signature -->
                    <div class="">
                        logo
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mb-5">
    <div class="flex flex-row justify-content-end">
        <div>
            <button type="button" class="btn btn-danger btn-icon-split mx-1">
                <span class="icon text-white-50">
                    <i class="fas fa-file-pdf"></i>
                </span>
                <span class="text">PDF</span>
            </button>
            <a href="./edit_report.php?action=edit_report&rtId=45256" type="button" class="btn btn-primary btn-icon-split mx-1">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Edit</span>
            </a>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>