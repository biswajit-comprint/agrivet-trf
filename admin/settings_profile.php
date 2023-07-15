<?php require('header.php'); ?>

<!-- Page Heading -->
<h1 class="h5 mb-2 text-gray-800">Profile Settings</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="row justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <lable>Name</lable>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <lable>Contact</lable>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <lable>Laboratory</lable>
                        <select class="form-control">
                            <option>Select</option>
                            <option>Lab 1</option>
                            <option>Lab 2</option>
                            <option>Lab 3</option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <lable>Old password</lable>
                        <input type="password" class="form-control" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <lable>New password</lable>
                        <input type="password" class="form-control" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-sm btn-primary mt-3">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


<?php require('footer.php'); ?>