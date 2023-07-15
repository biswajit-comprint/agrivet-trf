<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create TRF</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tax Invoice Details</h6>
    </div> -->
    <div class="card-body">
        <form action="/action_page.php">
                
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5 class="display-5">Billing Details:</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="company_name" class="form-label">Company name:</label>
                    <input type="text" class="form-control" id="company_name" placeholder="Enter Company name" name="company_name">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="billing_address" class="form-label">Billing address:</label>
                    <input type="text" class="form-control" id="billing_address" placeholder="Enter Billing address" name="billing_address">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="contact_person" class="form-label">Contact person:</label>
                    <input type="text" class="form-control" id="contact_person" placeholder="Enter contact person" name="contact_person">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="contact_number" class="form-label">Contact number:</label>
                    <input type="text" class="form-control" id="contact_number" placeholder="Enter contact number" name="contact_number">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="gstin_no" class="form-label">GSTN:</label>
                    <input type="text" class="form-control" id="gstin_no" placeholder="Enter gstin no" name="gstin_no">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="state_name" class="form-label">State name:</label>
                    <input type="text" class="form-control" id="state_name" placeholder="Enter State name" name="state_name">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="pan_no" class="form-label">PAN no:</label>
                    <input type="text" class="form-control" id="pan_no" placeholder="Enter Pan no" name="pan_no">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                    <div class="check-box-contener my-3">
                        <label>
                            <input type="checkbox" name="remember">
                            <div class="checkbox"></div>
                            Remember me
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5 class="display-5">Reporting address:</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="company_name" class="form-label">Company name:</label>
                    <input type="text" class="form-control" id="company_name" placeholder="Enter Company name" name="company_name">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="billing_address" class="form-label">Billing address:</label>
                    <input type="text" class="form-control" id="billing_address" placeholder="Enter Billing address" name="billing_address">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="contact_person" class="form-label">Contact person:</label>
                    <input type="text" class="form-control" id="contact_person" placeholder="Enter contact person" name="contact_person">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="contact_number" class="form-label">Contact number:</label>
                    <input type="text" class="form-control" id="contact_number" placeholder="Enter contact number" name="contact_number">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="gstin_no" class="form-label">GSTN:</label>
                    <input type="text" class="form-control" id="gstin_no" placeholder="Enter gstin no" name="gstin_no">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="state_name" class="form-label">State name:</label>
                    <input type="text" class="form-control" id="state_name" placeholder="Enter State name" name="state_name">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="pan_no" class="form-label">PAN no:</label>
                    <input type="text" class="form-control" id="pan_no" placeholder="Enter Pan no" name="pan_no">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h5 class="display-5">Payment details:</h5>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="payment_mode" class="form-label">Payment mode:</label>
                    <input type="text" class="form-control" id="payment_mode" placeholder="Enter Payment mode" name="payment_mode">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_collected_by" class="form-label">Sample collected by:</label>
                    <input type="text" class="form-control" id="sample_collected_by" placeholder="Enter sample collected by" name="sample_collected_by">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_collection_date" class="form-label">Sample collection date:</label>
                    <input type="date" class="form-control" id="sample_collection_date" placeholder="Enter sample collection date" name="sample_collection_date">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_shift_by" class="form-label">Sample shift by:</label>
                    <input type="text" class="form-control" id="sample_shift_by" placeholder="Enter sample shift by" name="sample_shift_by">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_shifing_date" class="form-label">Sample shifing date:</label>
                    <input type="date" class="form-control" id="sample_shifing_date" placeholder="Enter sample shifing date" name="sample_shifing_date">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_received_by" class="form-label">Sample received by:</label>
                    <input type="text" class="form-control" id="sample_received_by" placeholder="Enter sample received by" name="sample_received_by">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <label for="sample_received_date" class="form-label">Sample received date:</label>
                    <input type="text" class="form-control" id="sample_received_date" placeholder="Enter sample received date" name="sample_received_date">
                </div>
            </div>

            <div class="row mb-4 mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="check-box-contener my-3">
                        <label>
                            <input type="checkbox" name="option1" checked>
                            <div class="checkbox"></div>
                            Courier
                        </label>
                        <label>
                            <input type="checkbox" name="option2">
                            <div class="checkbox"></div>
                            Collected by Person
                        </label>
                        <label>
                            <input type="checkbox" name="option3">
                            <div class="checkbox"></div>
                            E-mail
                        </label>
                        <label>
                            <input type="checkbox" name="option3">
                            <div class="checkbox"></div>
                            Whatsapp
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-4 mt-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                    <button type="submit" class="btn btn-primary">Save & Next</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mt-5">
    <div class="card-body">
        <h5 class="display-5">Sample Details:</h5>
        
        <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm">
            <table class="table table-sm table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sl no</th>
                        <th>Sample Type</th>
                        <th>Sample Name</th>
                        <th>Parameter</th>
                        <th>Process</th>
                        <th>Mark on Sample</th>
                        <th>Rate</th>
                        <th>Amount</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>61</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
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
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-6">
                <button href="#" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                    </span>
                    <span class="text">Add row</span>
                </button>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="btn btn-light btn-icon-split">
                    <span class="icon text-gray-600">
                        Total Amount
                    </span>
                    <span class="text">1500.00</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 mb-3">
    <div class="col-12 text-right">
        <button href="#" class="btn btn-primary btn-icon-split">
            <!-- <span class="icon text-white-50">
                <i class="fas fa-check" aria-hidden="true"></i>
            </span> -->
            <span class="text">Save</span>
        </button>
    </div>
</div>

<?php require('footer.php'); ?>