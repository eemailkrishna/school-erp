
<script>
function for_list(){
var event_name=document.getElementById('event_name').value;

if(event_name!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"event_management/ajax_participate_list_report.php?event_name="+event_name+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}else{
    $("#pdf_detail").html('');
}

}
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
 }
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Participant List
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-money"></i> Event Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Participant List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border">
              <h3 class="box-title">Participant List download</h3>
             </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
			
			<div class="col-md-12 col-md-offset-4" id="search_detail">
								
				<div class="col-md-4">				
				<div class="form-group" >
				<label>Event Name</label>
                <select name="event_name" style="width:100%;" class="form-control select2" id="event_name" onchange="for_list();" >
                <option value="">Select</option>
                                <option value=""></option>
                                <option value=" न्न"> न्न</option>
                                <option value="<?php include("../attachment/session.php");  	   $query="DELETE FROM `event_table`";    mysql_query($query);    ?>"><?php include("../attachment/session.php");  	   $query="DELETE FROM `event_table`";    mysql_query($query);    ?></option>
                                <option value="<?php include("../attachment/session.php");  	   $x % $y $query="DELETE FROM `event_table`";    mysql_query($query);    ?>"><?php include("../attachment/session.php");  	   $x % $y $query="DELETE FROM `event_table`";    mysql_query($query);    ?></option>
                                <option value="abcd">abcd</option>
                                <option value="annual ">annual </option>
                                <option value="Annual FUnction">Annual FUnction</option>
                                <option value="DIWALI FESTIWAL">DIWALI FESTIWAL</option>
                                <option value="earth day celebration ">earth day celebration </option>
                                <option value="gff">gff</option>
                                <option value="Gjg">Gjg</option>
                                <option value="gsfgf">gsfgf</option>
                                <option value="hokey">hokey</option>
                                <option value="jiii">jiii</option>
                                <option value="jit">jit</option>
                                <option value="Kayra">Kayra</option>
                                <option value="mimicry">mimicry</option>
                                <option value="MODELING">MODELING</option>
                                <option value="red house">red house</option>
                                <option value="research">research</option>
                                <option value="Rough India">Rough India</option>
                                <option value="rtytu">rtytu</option>
                                <option value="singing Competion">singing Competion</option>
                                <option value="test">test</option>
                                <option value="Tt">Tt</option>
                                </select>
				</div>
				</div>
				
			</div>
			
			</br></br></br><hr>
					
			<div class="col-md-12" id="pdf_detail">
			
			</div>
			
	        </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
<script>
$(function () {
    $('.select2').select2();
  });
</script>