// #user part model for delete (trf, pi, ti)
var user_delete_trf_btns = document.getElementsByClassName("user_delete_trf");
var user_delete_ti_btns = document.getElementsByClassName("user_delete_ti");
var user_delete_pi_btns = document.getElementsByClassName("user_delete_pi");
var user_delete_report_all_btns = document.getElementsByClassName("user_delete_report_all");
	
// var addSelectClass = function(){
//     removeSelectClass();
//     this.classList.add('selected');	
// }

// var removeSelectClass = function(){
//     for (var i =0; i < button.length; i++) {
//         button[i].classList.remove('selected')
//     }
// }

// #user view fp
for (var i =0; i < user_delete_trf_btns.length; i++) {
    user_delete_trf_btns[i].addEventListener("click",function(){
        // alert('hi');
        $('#user_delete_trf_modal').modal('show');
    });
}
// #user view pi
for (var i =0; i < user_delete_ti_btns.length; i++) {
    user_delete_ti_btns[i].addEventListener("click",function(){
        // alert('hi');
        $('#user_delete_ti_modal').modal('show');
    });
}
// #user view ti
for (var i =0; i < user_delete_pi_btns.length; i++) {
    user_delete_pi_btns[i].addEventListener("click",function(){
        // alert('hi');
        $('#user_delete_pi_modal').modal('show');
    });
}
// #user view ti
for (var i =0; i < user_delete_report_all_btns.length; i++) {
    user_delete_report_all_btns[i].addEventListener("click",function(){
        // alert('hi');
        $('#user_delete_report_all_modal').modal('show');
    });
}

// tooltip for all
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

// user :: create trf page
// add dynamic fields (careate trf page)
$('#btn_create_trf_item_dynamic_fields').on('click', function(){
    let rowCountDefine = 1;
    // alert('add row btn click');
    $('#create_trf_item_dynamic_fields').append(tableIncrementStruct());
    // $("select").each(function() {
    //     $(this).select2();
    // });
    rowCountDefine ++;
});

// add dynamic fields (careate trf page)
$('#btn_edit_trf_item_dynamic_fields').on('click', function(){
    let rowCountDefine = 1;
    // alert('add row btn click');

    $('#edit_trf_item_dynamic_fields').append(tableIncrementStruct());
    // $("select").each(function() {
    //     $(this).select2();
    // });
    rowCountDefine ++;
});

// admin :: edit trf page
// add dynamic fields (careate trf page)
$('#btn_admin_create_trf_item_dynamic_fields').on('click', function(){
    let rowCountDefine = 1;
    // alert('add row btn click');
    $('#admin_create_trf_item_dynamic_fields').append(tableIncrementStruct());
    // $("select").each(function() {
    //     $(this).select2();
    // });
    rowCountDefine ++;
});

// create row for create trf page
let rowCountDefine = 1;
function tableIncrementStruct(){
    let tableRow = '';
    tableRow +='<tr>';
        tableRow +='<td>1</td>';
        tableRow +='<td>';
            tableRow +='<select class="form-control form-control-sm">';
                tableRow +='<option>Select sample type</option>';
            tableRow +='</select>';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<select class="form-control form-control-sm">';
                tableRow +='<option>Select sample name</option>';
            tableRow +='</select>';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<select class="form-control form-control-sm">';
                tableRow +='<option>Select parameter</option>';
            tableRow +='</select>';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<select class="form-control form-control-sm">';
                tableRow +='<option>Select process</option>';
            tableRow +='</select>';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<input type="text" class="form-control form-control-sm">';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<input type="text" class="form-control form-control-sm">';
        tableRow +='</td>';
        tableRow +='<td>';
            tableRow +='<input type="text" class="form-control form-control-sm">';
        tableRow +='</td>';
        tableRow +='<td class="text-center">';
            tableRow +='<i class="fas fa-trash-alt icon-bg-hover-shadow user_delete_report_all"></i>';
        tableRow +='</td>';
    tableRow +='</tr>';

    rowCountDefine++;
    return tableRow;
}