
<script>
function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_class_section.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		 $("#student_class_section").html(detail);
		 for_list();
	  }
   });
}

function for_list(){
var class_name=document.getElementById('std_class').value;
var section_name=document.getElementById('student_class_section').value;
var student_bus=document.getElementById('student_bus').value;
var student_fee_head=document.getElementById('student_fee_head').value;
var order_by=document.getElementById('order_by').value;

var months=[];
$(".my_check").each(function() {
if($(this).prop('checked')==true){
    months.push($(this).val());
}
});

$("#pdf_detail").html('');

if(class_name!='' && section_name!='' && student_bus!='' && months!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_bus_fee_report.php",
	  data: { class_name:class_name,section_name:section_name,student_bus:student_bus,student_fee_head:student_fee_head,order_by:order_by,months:months },
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}

}

function for_check(id){
if($('#'+id).prop("checked") == true){
	$("."+id).each(function() {
	$(this).prop('checked',true);
	});
}else{
	$("."+id).each(function() {
	$(this).prop('checked',false);
	});
}
for_list();
}

function for_disabled(){
var student_fee_head=document.getElementById('student_fee_head').value;
if(student_fee_head != ''){
	$('#my_check').prop("disabled", false);
	$(".my_check").each(function() {
	$(this).prop("disabled", false);
	});
}else{
	$('#my_check').prop("disabled", true);
	$(".my_check").each(function() {
	$(this).prop("disabled", true);
	});
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
        Download Student Bus Fee Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Bus Fee Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Bus Fee Report download</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
			
			<div class="col-md-12 col-md-offset-1" id="search_detail">
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Class</label>
				<select name="std_class" class="form-control new_student" id="std_class" onchange="for_section(this.value);" >
				<option value="All">All Class</option>
								<option value="NURSERY">NURSERY</option>
								<option value="LKG">LKG</option>
								<option value="UKG">UKG</option>
								<option value="1ST">1ST</option>
								<option value="2ND">2ND</option>
								<option value="3RD">3RD</option>
								<option value="4TH">4TH</option>
								<option value="5TH">5TH</option>
								<option value="6TH">6TH</option>
								<option value="7TH">7TH</option>
								<option value="8TH">8TH</option>
								<option value="9TH">9TH</option>
								<option value="10TH">10TH</option>
								<option value="11TH">11TH</option>
								<option value="12TH">12TH</option>
								</select>
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
				<label>Section</label>
				<select class="form-control" name="student_class_section" id="student_class_section" onchange="for_list();">
				<option value="All">All</option>
				</select>
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
				<label>Student Bus</label>
				<select name="student_bus" class="form-control" id="student_bus" onchange="for_list();" >
				<option value="All">All</option>
								<option value="MH19TS0001">BHARAT BENZ / MH19TS0001</option>
								</select>
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>Select Head</label>
				<select class="form-control" name="student_fee_head" id="student_fee_head" onchange="for_disabled();for_list();">
				<option value="">Select</option>
								<option value="fee1|?|annual">annual</option>
								<option value="fee2|?|singing">singing</option>
								<option value="fee3|?|Transport fees">Transport fees</option>
								<option value="fee4|?|sports fees">sports fees</option>
								<option value="fee5|?|exam fee">exam fee</option>
								<option value="fee8|?|event fee">event fee</option>
								<option value="fee9|?|bus fee">bus fee</option>
								</select>
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>Order By</label>
				<select class="form-control" name="order_by" id="order_by" onchange="for_list();">
				<option value="">Select</option>
				<option value=" ORDER BY student_name ASC">By Name</option>
				</select>
				</div>
				</div>
				
			</div>
			
			<div class="col-md-12">
			    <span style="float:right;"><input type="checkbox" value="" id="my_check" onclick="for_check(this.id);" checked /><b style="color:red;">Check All</b></span>
			</div>
			<div class="col-md-12">
                                <div class="col-md-2">
                <input type="checkbox" id="April Month" class="my_check" value="04" onclick="for_list();" checked /><span style="font-weight:bold;"> April Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="May Month" class="my_check" value="05" onclick="for_list();" checked /><span style="font-weight:bold;"> May Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="June Month" class="my_check" value="06" onclick="for_list();" checked /><span style="font-weight:bold;"> June Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="July Month" class="my_check" value="07" onclick="for_list();" checked /><span style="font-weight:bold;"> July Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="August Month" class="my_check" value="08" onclick="for_list();" checked /><span style="font-weight:bold;"> August Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="September Month" class="my_check" value="09" onclick="for_list();" checked /><span style="font-weight:bold;"> September Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="October Month" class="my_check" value="10" onclick="for_list();" checked /><span style="font-weight:bold;"> October Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="November Month" class="my_check" value="11" onclick="for_list();" checked /><span style="font-weight:bold;"> November Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="December Month" class="my_check" value="12" onclick="for_list();" checked /><span style="font-weight:bold;"> December Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="January Month" class="my_check" value="01" onclick="for_list();" checked /><span style="font-weight:bold;"> January Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="February Month" class="my_check" value="02" onclick="for_list();" checked /><span style="font-weight:bold;"> February Month</span>
                </div>
                                <div class="col-md-2">
                <input type="checkbox" id="March Month" class="my_check" value="03" onclick="for_list();" checked /><span style="font-weight:bold;"> March Month</span>
                </div>
                			</div>
			<div class="col-md-12">&nbsp;</div>
			
			<br/><br/><br/><hr/>
					
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
for_disabled();
for_list();
</script>