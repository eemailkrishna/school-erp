 
<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_penalty(s_no);       
 }            
else  {      
return false;
 }       
  } 
function delete_penalty(s_no){
$.ajax({
type: "POST",
url: access_link+"penalty/penalty_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
		if(res[1]=='success'){
		 alert_new('Successfully Deleted'.'green');
		 get_content('penalty/penalty_list');
	  }else{
        //  alert_new(detail); 
   }
}
});
}
</script>
    <section class="content-header">
      <h1>
        Student Action        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	          <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="javascript:get_content('penalty/penalty')"><i class="fa fa-exclamation-circle"></i> Penalty Management</a></li>
        <li class="active">Penalty List</li>
      </ol>
    </section>

	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
              <h3 class="box-title">Penalty List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead >
                <tr>
                  <th>S.no.</th>
                  <th>student Name</th>
                  <th>Student Roll No</th>
                  <th>Class</th>
                  <th>Student Section</th>
                  <th>Penalty</th>
                  <th>Penalty Reason</th>
                  <th>Penalty Remark</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				                <tr>
                  <td>1</td>
                  <td>KANISHK PARMAR</td>
				  <td>1800091</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>LATE PAY</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('33');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>shurya singh</td>
				  <td>1800027</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>behavior</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('35');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>ashok gahlot</td>
				  <td>1800002</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>50</td>
                  <td>ईल्ल</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('36');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>ashok gahlot</td>
				  <td>1800002</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>50</td>
                  <td>misbehaviour</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('37');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Anjali shrivastava</td>
				  <td>1800031</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>late fees</td>
                  <td>any</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('38');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Abhijeet Thakur</td>
				  <td>1800021</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>property break</td>
                  <td>loss</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('39');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Dummy jain</td>
				  <td>1900138</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>500</td>
                  <td>Damage library book</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('40');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>pankaj baghel</td>
				  <td>1800001</td>
                  <td>NURSERY</td>
                  <td>B</td>
                  <td>100</td>
                  <td>leave penality</td>
                  <td>permitted by </td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('41');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Aditya Patel</td>
				  <td>1900141</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>10</td>
                  <td>late </td>
                  <td>fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('42');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>    Rahul Agrawal</td>
				  <td>1900102</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>testing</td>
                  <td>testing</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('43');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>subham soni</td>
				  <td>1800007</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>100</td>
                  <td>miss behaviour</td>
                  <td>miss behaviour fine</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('44');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>    Rahul Agrawal</td>
				  <td>1900170</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>10</td>
                  <td>fkjged</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('45');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Ranu Ghuraiya</td>
				  <td>1800003</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fees</td>
                  <td>late fees</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('48');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Manoj Kumar</td>
				  <td>1900106</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('49');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>shubham kumar</td>
				  <td>1800004</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>18</td>
                  <td>LATE FEE PAYMENT</td>
                  <td>FINE</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('50');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Anuj Singh</td>
				  <td>1900110</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>50</td>
                  <td>kjlj</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('51');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Avik Shrotiya</td>
				  <td>1800008</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>0</td>
                  <td>NOTHING</td>
                  <td>NO</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('52');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>18</td>
                  <td>Avik Shrotiya</td>
				  <td>1800010</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>not available</td>
                  <td>average</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('53');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>19</td>
                  <td>Avik Shrotiya</td>
				  <td>1800010</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>glass Broken</td>
                  <td>67</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('54');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>20</td>
                  <td>Rahul singh</td>
				  <td>1800023</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('55');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>21</td>
                  <td>Avik Shrotiya</td>
				  <td>1800014</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('57');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>Avik Shrotiya</td>
				  <td>1800014</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late bus fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('58');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>23</td>
                  <td>Abhijeet Thakur</td>
				  <td>1800021</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('59');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>24</td>
                  <td>Gargi Samaiya</td>
				  <td>1800016</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('60');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>25</td>
                  <td>Avik Shrotiya</td>
				  <td>1800010</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>late fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('61');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>26</td>
                  <td>Avik Shrotiya</td>
				  <td>1800014</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>late fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('62');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>27</td>
                  <td>Avik Shrotiya</td>
				  <td>1800014</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1050</td>
                  <td>misbehave</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('63');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>28</td>
                  <td>Avik Shrotiya</td>
				  <td>1800014</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late fee </td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('65');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>29</td>
                  <td>Manjoot Kaur</td>
				  <td>1900117</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>500</td>
                  <td>DFMSDJV </td>
                  <td>FEBI B</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('66');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>30</td>
                  <td>Rahul singh</td>
				  <td>1800023</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late bus fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('67');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>31</td>
                  <td>poonam shrivas</td>
				  <td>1800043</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('68');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>32</td>
                  <td>Ravi Kumar</td>
				  <td>1800048</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>100</td>
                  <td>LATE FEE</td>
                  <td>50</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('70');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>33</td>
                  <td>Ravi Kumar</td>
				  <td>1800048</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>500</td>
                  <td>200</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('71');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>34</td>
                  <td>prachi sristi singh</td>
				  <td>1900259</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late admission</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('72');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>35</td>
                  <td>Prateek Patel</td>
				  <td>1900122</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late admission</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('73');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>36</td>
                  <td>preeti chobey</td>
				  <td>1800049</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>misbehave</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('75');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>37</td>
                  <td>preeti chobey</td>
				  <td>1800049</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>misbehave</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('76');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>38</td>
                  <td>sujaata gour</td>
				  <td>1800050</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('77');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>39</td>
                  <td>sujaata gour</td>
				  <td>1800050</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('78');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>40</td>
                  <td>preeti chobey</td>
				  <td>1800049</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fees</td>
                  <td>late fees</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('79');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>41</td>
                  <td>gungun jain</td>
				  <td>1800022</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>ddd</td>
                  <td>dd</td>
                  <td>dd</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('80');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>42</td>
                  <td>preeti chobey</td>
				  <td>1800049</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>destruction</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('81');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>43</td>
                  <td>aaradhya </td>
				  <td>1900299</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late comer</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('82');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>44</td>
                  <td>Ashif Khan</td>
				  <td>1800089</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>computer repair</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('83');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>45</td>
                  <td>gungun jain</td>
				  <td>1800022</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('84');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>46</td>
                  <td>Prateek Patel</td>
				  <td>1900122</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>10</td>
                  <td>dasdasd</td>
                  <td>asd</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('85');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>47</td>
                  <td>gungun jain</td>
				  <td>1800022</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>10</td>
                  <td>absent without leave</td>
                  <td>remained absent for 3 days without application</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('86');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>48</td>
                  <td>gungun jain</td>
				  <td>1800022</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('87');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>49</td>
                  <td>Prateek Patel</td>
				  <td>1900122</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>656</td>
                  <td>76</td>
                  <td>97</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('88');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>50</td>
                  <td>VIKAS MODI </td>
				  <td>1900229</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>testing</td>
                  <td>testing</td>
                  <td>testing</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('89');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>51</td>
                  <td>VIKAS MODI </td>
				  <td>1900229</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>testing</td>
                  <td>testing</td>
                  <td>testing</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('90');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>52</td>
                  <td>shilky sluja</td>
				  <td>1800052</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>84</td>
                  <td>book missing</td>
                  <td>submit soon</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('91');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>53</td>
                  <td>Prateek Patel</td>
				  <td>1900122</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees not deposited on time</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('92');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>54</td>
                  <td>Shubham</td>
				  <td>1900134</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('93');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>55</td>
                  <td>sujaata gour</td>
				  <td>1800050</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>20</td>
                  <td>Broken Glass</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('94');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>56</td>
                  <td>sujaata gour</td>
				  <td>1800050</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('95');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>57</td>
                  <td>sujaata gour</td>
				  <td>1800050</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>10000</td>
                  <td>ipi;</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('96');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>58</td>
                  <td>shilky sluja</td>
				  <td>1800052</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>100</td>
                  <td>damage school property</td>
                  <td>yashwant sir</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('97');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>59</td>
                  <td>Abhijeet Thakur</td>
				  <td>1900584</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>100</td>
                  <td>broke window</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('98');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>60</td>
                  <td>Prateek Patel</td>
				  <td>1900122</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>566544</td>
                  <td>NMB JHBHJBJ</td>
                  <td>MKLK</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('99');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>61</td>
                  <td>kasif khan</td>
				  <td>1800064</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('100');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>62</td>
                  <td>kasif khan</td>
				  <td>1800064</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('101');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>63</td>
                  <td>sakshi thakur</td>
				  <td>1800065</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>500</td>
                  <td>misbehave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('102');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>64</td>
                  <td>Avik Shrotiya</td>
				  <td>1800012</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late bus fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('103');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>65</td>
                  <td>Rahul</td>
				  <td>1800069</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('104');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>66</td>
                  <td>Rahul</td>
				  <td>1800069</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('105');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>67</td>
                  <td>amih</td>
				  <td>1900132</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('106');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>68</td>
                  <td>Rajan trivedi</td>
				  <td>1800071</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>computer repair</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('107');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>69</td>
                  <td>Rajan trivedi</td>
				  <td>1800071</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>10000</td>
                  <td>broke window</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('108');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>70</td>
                  <td>somiya nema</td>
				  <td>1800070</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>broke window</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('109');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>71</td>
                  <td>Rajan trivedi</td>
				  <td>1800071</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('110');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>72</td>
                  <td>Rajan trivedi</td>
				  <td>1800071</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('111');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>73</td>
                  <td>Ravi Kumar</td>
				  <td>1800072</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>100</td>
                  <td>hjtygj</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('112');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>74</td>
                  <td>Ravi Kumar</td>
				  <td>1800072</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('113');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>75</td>
                  <td>Ravi Kumar</td>
				  <td>1800072</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('114');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>76</td>
                  <td>Ravi Kumar</td>
				  <td>1800072</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('115');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>77</td>
                  <td>amit kumar</td>
				  <td>1800081</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>5</td>
                  <td>Late coming</td>
                  <td>*</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('116');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>78</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>20</td>
                  <td>late fees</td>
                  <td>any</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('117');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>79</td>
                  <td>Mahindra kumar</td>
				  <td>1800074</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>20</td>
                  <td>late fees</td>
                  <td>any</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('118');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>80</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>20</td>
                  <td>any</td>
                  <td>any</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('120');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>81</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('121');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>82</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('122');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>83</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>late bus fees</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('123');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>84</td>
                  <td>Ritu singhai </td>
				  <td>1800075</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>20</td>
                  <td>late fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('124');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>85</td>
                  <td>amit kumar</td>
				  <td>1800081</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('125');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>86</td>
                  <td>Student demo </td>
				  <td>1900642</td>
                  <td>11TH</td>
                  <td>A</td>
                  <td>new testing</td>
                  <td>reason</td>
                  <td>new testing</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('126');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>87</td>
                  <td>Anshika</td>
				  <td>1900166</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>10</td>
                  <td>Ab</td>
                  <td>Has</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('127');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>88</td>
                  <td>Kabita Reang</td>
				  <td>1900666</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>250</td>
                  <td>lat</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('128');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>89</td>
                  <td>Kabita Reang</td>
				  <td>1900666</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>50</td>
                  <td>yed</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('129');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>90</td>
                  <td>MRIDUL BANERJEE</td>
				  <td>1900139</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>without dress</td>
                  <td>ok</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('130');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>91</td>
                  <td>Mahindra kumar</td>
				  <td>1800074</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>122</td>
                  <td>tezx</td>
                  <td>dfsdf</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('131');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>92</td>
                  <td>Mahindra kumar</td>
				  <td>1800074</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>20</td>
                  <td>dsdfsdf</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('132');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>93</td>
                  <td>Narendra Jaiswal</td>
				  <td>1800084</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>7545545</td>
                  <td>4557</td>
                  <td>7</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('133');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>94</td>
                  <td>AMAN KUMAR RANDHAWEY</td>
				  <td>1900127</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('134');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>95</td>
                  <td>Vikas </td>
				  <td>1900145</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1200</td>
                  <td>Break windows glass</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('135');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>96</td>
                  <td>sanoj</td>
				  <td>1900153</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late bus fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('136');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>97</td>
                  <td>ABC</td>
				  <td>1900163</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>22</td>
                  <td>late</td>
                  <td>xyz</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('137');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>98</td>
                  <td>Rinkey Sondhiya</td>
				  <td>1900208</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>300</td>
                  <td>no</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('138');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>99</td>
                  <td>xyz</td>
				  <td>1900204</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>300</td>
                  <td>ok</td>
                  <td>ur</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('139');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>100</td>
                  <td>ABC</td>
				  <td>1900163</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>200</td>
                  <td>late finr</td>
                  <td>;</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('140');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>101</td>
                  <td>ABC</td>
				  <td>1900163</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>500</td>
                  <td>Sleep</td>
                  <td>OK</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('141');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>102</td>
                  <td>ABC</td>
				  <td>1900163</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('142');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>103</td>
                  <td>Yash Agrawal</td>
				  <td>1900195</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late bus fee</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('143');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>104</td>
                  <td>Rinkey Sondhiya</td>
				  <td>1900208</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>25</td>
                  <td>Indiscipline </td>
                  <td>Creating Indiscipline in classes even after repeated warnings</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('144');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>105</td>
                  <td>Neelu pandey </td>
				  <td>1900726</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Abusing</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('145');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>106</td>
                  <td>reeta soni</td>
				  <td>1900244</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Late payment</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('146');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>107</td>
                  <td>Kushagra</td>
				  <td>1900255</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>10000</td>
                  <td>late </td>
                  <td>due</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('147');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>108</td>
                  <td>Kushagra</td>
				  <td>1900255</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>300</td>
                  <td>USE HINDI LANGUAGE</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('148');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>109</td>
                  <td>Ranu Ghuraiya</td>
				  <td>1800003</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>chaire broke</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('149');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>110</td>
                  <td>राजीव कुमार</td>
				  <td>1900507</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>5000</td>
                  <td>5000</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('150');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>111</td>
                  <td>Rinkey Sondhiya</td>
				  <td>1900268</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>464</td>
                  <td>jkhi</td>
                  <td>n</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('151');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>112</td>
                  <td>ANIL</td>
				  <td>1900798</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Improper uniform</td>
                  <td>Uniform Penelty</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('152');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>113</td>
                  <td>Abhijeet Thakur</td>
				  <td>1900584</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>12</td>
                  <td>Late fee</td>
                  <td>Dena h</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('153');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>114</td>
                  <td>rohit singh thakur</td>
				  <td>1900699</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>DICIPLINE</td>
                  <td>1</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('154');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>115</td>
                  <td>Monu Gour</td>
				  <td>1900701</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('155');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>116</td>
                  <td>Ashish yadav</td>
				  <td>1900704</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td>300</td>
                  <td>BRANCH DAMEG</td>
                  <td>BRANCH </td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('156');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>117</td>
                  <td>rohit singh thakur</td>
				  <td>1900699</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('157');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>118</td>
                  <td>Ashish yadav</td>
				  <td>1900704</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('158');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>119</td>
                  <td>Atul</td>
				  <td>1900705</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>1200</td>
                  <td>fees not pay</td>
                  <td>vhjg</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('159');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>120</td>
                  <td>Atul</td>
				  <td>1900705</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>1200</td>
                  <td>fees not pay</td>
                  <td>vhjg</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('160');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>121</td>
                  <td>ajay</td>
				  <td>1900710</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1200</td>
                  <td>fees not pay</td>
                  <td>vhjg</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('161');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>122</td>
                  <td>ajay</td>
				  <td>1900710</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('162');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Ajay</td>
				  <td>1900710</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('163');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>124</td>
                  <td>Aditya kashyap</td>
				  <td>1900728</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>1111</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('164');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>125</td>
                  <td>Shristi singh</td>
				  <td>1900727</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('165');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>126</td>
                  <td>sristhi soni</td>
				  <td>1900722</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>10</td>
                  <td>let</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('166');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>127</td>
                  <td>Aditya kashyap</td>
				  <td>1900728</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('167');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>128</td>
                  <td>Aditya kashyap</td>
				  <td>1900728</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late bus fee</td>
                  <td>liburary late fee</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('168');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>129</td>
                  <td>Parul Shukla</td>
				  <td>1900732</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('169');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>130</td>
                  <td>Aman</td>
				  <td>1900734</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>अ</td>
                  <td>अ</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('170');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>131</td>
                  <td>Aman</td>
				  <td>1900735</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>52</td>
                  <td>54</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('171');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>132</td>
                  <td>Demo Bt</td>
				  <td>1900729</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees</td>
                  <td>12</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('172');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>133</td>
                  <td>Aman</td>
				  <td>1900735</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late bus fee</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('173');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>134</td>
                  <td>Aman</td>
				  <td>1900734</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>money problem</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('174');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>135</td>
                  <td>Gunjan</td>
				  <td>1900741</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>800</td>
                  <td>late fee</td>
                  <td>late fee paid</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('175');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>136</td>
                  <td>Aman</td>
				  <td>1900735</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>misbehave</td>
                  <td>in class</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('177');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>137</td>
                  <td>Demo Bt</td>
				  <td>1900729</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>100</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('178');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>138</td>
                  <td>akash yadav</td>
				  <td>1900765</td>
                  <td>5TH</td>
                  <td>B</td>
                  <td>500</td>
                  <td>xyz</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('179');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>139</td>
                  <td>test</td>
				  <td>2000823</td>
                  <td>1ST</td>
                  <td>B</td>
                  <td>500</td>
                  <td>absent</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('180');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>140</td>
                  <td>jaiho</td>
				  <td>2000825</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('181');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>141</td>
                  <td>DEEPIKA KURREY</td>
				  <td>2000009</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees lete</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('182');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>142</td>
                  <td>GANGA  BARETH</td>
				  <td>2000012</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('183');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>143</td>
                  <td>ASTER KHANDEY</td>
				  <td>2000011</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Ghh</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('184');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>144</td>
                  <td>ASTER KHANDEY</td>
				  <td>2000011</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>late fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('185');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>145</td>
                  <td>DIPESH KUMAR KHANDEY</td>
				  <td>2000025</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td>12</td>
                  <td>nl</td>
                  <td>lml</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('186');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>146</td>
                  <td>BHUPENDRA KUMAR SAHU</td>
				  <td>2000022</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td>10</td>
                  <td>late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('187');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>147</td>
                  <td>BHUPENDRA KUMAR SAHU</td>
				  <td>2000022</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td></td>
                  <td>late</td>
                  <td>790</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('188');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>148</td>
                  <td>JANAVI SURYAVANSHI</td>
				  <td>2000031</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1</td>
                  <td>Leate</td>
                  <td>1</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('189');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>149</td>
                  <td>HINU KUMARI LAHRE</td>
				  <td>2000027</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Late Fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('190');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>150</td>
                  <td>MOHIT SAHU</td>
				  <td>2000052</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('191');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>151</td>
                  <td>MOHIT SAHU</td>
				  <td>2000052</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>dgdf</td>
                  <td>dfgd</td>
                  <td>gdfg</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('192');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>152</td>
                  <td>NAMRATA SONVANE</td>
				  <td>2000034</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>12</td>
                  <td>nl</td>
                  <td>grtt</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('193');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>153</td>
                  <td>कैलाश</td>
				  <td>2000190</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>500</td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('194');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>154</td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('195');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>155</td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('196');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>156</td>
                  <td>NAMRATA SONVANE</td>
				  <td>2000034</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>2</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('197');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>157</td>
                  <td>POOJA BARETH</td>
				  <td>2000035</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Absent</td>
                  <td>10 days</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('198');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>158</td>
                  <td>RASHI </td>
				  <td>2000196</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>100</td>
                  <td>sdff</td>
                  <td>sdsddd</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('199');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>159</td>
                  <td>RUZAINA</td>
				  <td>2000202</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>TESTING</td>
                  <td>TESTING</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('200');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>160</td>
                  <td>RAGINI BANJARE</td>
				  <td>2000037</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>mar pit</td>
                  <td>cut</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('201');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>161</td>
                  <td>RAGINI BANJARE</td>
				  <td>2000037</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>888</td>
                  <td></td>
                  <td>kuch bhi</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('202');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>162</td>
                  <td>SANDHYA AJGALLEY</td>
				  <td>2000039</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>300</td>
                  <td>Cheating in exams </td>
                  <td>Should avoid cheating </td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('203');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>163</td>
                  <td>YANSHU SURYAVANSHI</td>
				  <td>2000043</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>111</td>
                  <td>late fee</td>
                  <td>k</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('204');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>164</td>
                  <td>AARUN KUMAR URAO</td>
				  <td>2000003</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>BREAK GLASS</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('205');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>165</td>
                  <td>NIDHI SAHU</td>
				  <td>2000016</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>BREAK GLASS</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('206');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>166</td>
                  <td>AARUN KUMAR URAO</td>
				  <td>2000003</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>67</td>
                  <td>gh</td>
                  <td>dgfdh</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('207');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>167</td>
                  <td>DAKSH YADAW</td>
				  <td>2000008</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('208');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>168</td>
                  <td>swaroop satish kalinge</td>
				  <td>2000154</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>20</td>
                  <td>test</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('209');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>169</td>
                  <td>NIDHI SAHU</td>
				  <td>2000016</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>let fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('210');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>170</td>
                  <td>RINA PRADHAN</td>
				  <td>2000018</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>Misbehaviour</td>
                  <td>Broke the window Pane</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('211');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>171</td>
                  <td>AAYUSH PRADHAN</td>
				  <td>2000021</td>
                  <td>10TH</td>
                  <td>A</td>
                  <td>34</td>
                  <td>e433344</td>
                  <td>4</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('212');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>172</td>
                  <td>RITA RATNAKAR</td>
				  <td>2000036</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>dfsdf</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('213');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>173</td>
                  <td>RITA RATNAKAR</td>
				  <td>2000036</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('214');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>174</td>
                  <td>Abhijeet Thakur</td>
				  <td>2000130</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>500</td>
                  <td>Late pay.ent </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('216');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>NIDHI SAHU</td>
				  <td>2000016</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>88888</td>
                  <td>jjjhhj</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('217');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>176</td>
                  <td>RINA PRADHAN</td>
				  <td>2000018</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>Raging</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('218');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>177</td>
                  <td>RINA PRADHAN</td>
				  <td>2000018</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Finacial</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('219');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>178</td>
                  <td>KAVITA SURYVANSHI fdyh</td>
				  <td>2000028</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>600</td>
                  <td>800</td>
                  <td>800</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('220');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>179</td>
                  <td>KHILESH KUMAR SAHU</td>
				  <td>2000029</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1780</td>
                  <td>se atraso</td>
                  <td>pagar la cuota</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('221');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>180</td>
                  <td>DIVYA TAMRAKAR</td>
				  <td>2000030</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Financial</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('222');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>181</td>
                  <td>DIVYA TAMRAKAR</td>
				  <td>2000030</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>20</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('223');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>182</td>
                  <td>MOHAN SAHU</td>
				  <td>2000032</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>2200</td>
                  <td>h</td>
                  <td> mnm</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('224');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>MOHAN SAHU</td>
				  <td>2000032</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000000</td>
                  <td>late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('225');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>184</td>
                  <td>NEELAM KUMARI SAHU</td>
				  <td>2000033</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>250</td>
                  <td>absent</td>
                  <td>10 rs per day</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('226');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>185</td>
                  <td>SIMARAN KUMARI KURREY</td>
				  <td>2000038</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>90</td>
                  <td>ji</td>
                  <td>ji</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('227');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>186</td>
                  <td>RAGINI BANJARE</td>
				  <td>2000037</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>90</td>
                  <td>90</td>
                  <td>90</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('228');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>187</td>
                  <td>SANDHYA AJGALLEY</td>
				  <td>2000039</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>545</td>
                  <td>tyy</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('229');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>188</td>
                  <td>SANDHYA AJGALLEY</td>
				  <td>2000039</td>
                  <td>9TH</td>
                  <td>A</td>
                  <td>10000</td>
                  <td>Test Penalty</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('230');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>189</td>
                  <td>DEMAN KUMAR SAHU</td>
				  <td>2000046</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('231');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>190</td>
                  <td>KHILESH KUMAR SAHU</td>
				  <td>2000029</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('233');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>191</td>
                  <td>HARSH VAISHNAW</td>
				  <td>2000089</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>5</td>
                  <td>5</td>
                  <td>5</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('234');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>192</td>
                  <td>JANAVI SURYAVANSHI</td>
				  <td>2000031</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('235');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>193</td>
                  <td>abccc</td>
				  <td>2000304</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('236');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>194</td>
                  <td>BHAVESH KUMAR BARETH</td>
				  <td>2000063</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>10000</td>
                  <td>Makin noise</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('237');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>195</td>
                  <td>BABALI SAHU</td>
				  <td>2000062</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('238');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>196</td>
                  <td>BABALI SAHU</td>
				  <td>2000062</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('239');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>197</td>
                  <td>BABALI SAHU</td>
				  <td>2000062</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>12</td>
                  <td>n</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('240');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>198</td>
                  <td>AAISHA KURREY</td>
				  <td>1900229</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('241');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>199</td>
                  <td>BABALI SAHU</td>
				  <td>2000062</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('242');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>200</td>
                  <td>BABALI SAHU</td>
				  <td>2000062</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('243');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>201</td>
                  <td>DOLLY BARETH</td>
				  <td>2000066</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>न</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('244');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>202</td>
                  <td>DEVVRAT SAHU</td>
				  <td>2000067</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('245');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>203</td>
                  <td>DOLLY BARETH</td>
				  <td>2000066</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('246');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>204</td>
                  <td>DEVVRAT SAHU</td>
				  <td>2000067</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>100</td>
                  <td>xxyz</td>
                  <td>xyz</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('247');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>205</td>
                  <td>MAYANK YADAW </td>
				  <td>2000069</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('248');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>206</td>
                  <td>Manoj</td>
				  <td>2000189</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>45</td>
                  <td>kjk,</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('249');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>207</td>
                  <td>RAVINDRA KUMAR SAHU</td>
				  <td>2000076</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>gggggg</td>
                  <td>ffff</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('250');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>208</td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
                  <td>200</td>
                  <td>fees lete</td>
                  <td>yijt</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('251');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>209</td>
                  <td>RAVINDRA KUMAR SAHU</td>
				  <td>2000076</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees lete</td>
                  <td>yijt</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('252');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>210</td>
                  <td>SHRITU SAHU</td>
				  <td>2000079</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>test</td>
                  <td>test</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('253');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>211</td>
                  <td>SHRITU SAHU</td>
				  <td>2000079</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>300</td>
                  <td>ferniture loss</td>
                  <td>yes</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('254');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>212</td>
                  <td>RAVINDRA KUMAR SAHU</td>
				  <td>2000076</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>200</td>
                  <td>khgcv hch</td>
                  <td>bhyy</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('255');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>213</td>
                  <td>RAVINDRA KUMAR SAHU</td>
				  <td>2000076</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>56</td>
                  <td>fgfg</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('256');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>214</td>
                  <td>THALESHWARI KUMARI BARETH</td>
				  <td>2000081</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>200</td>
                  <td>100</td>
                  <td>LET</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('257');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>215</td>
                  <td>VIDYA SURYAVANSHI</td>
				  <td>2000084</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('258');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>216</td>
                  <td>AAISHA KURREY</td>
				  <td>1900229</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('259');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>217</td>
                  <td>SIDDHANT BARETH</td>
				  <td>2000109</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>500</td>
                  <td>penalty</td>
                  <td>general</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('260');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>218</td>
                  <td>manhood</td>
				  <td>2000158</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>500</td>
                  <td>distroy banch </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('261');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>ESHWAR CHAUHAN</td>
				  <td>2000088</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>200</td>
                  <td>fees lete</td>
                  <td>yijt</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('262');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>220</td>
                  <td>ESHWAR CHAUHAN</td>
				  <td>2000088</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>20</td>
                  <td>er</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('263');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>221</td>
                  <td>SIDDHANT BARETH</td>
				  <td>2000109</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>54125</td>
                  <td>mkklm</td>
                  <td>lknmjkol</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('264');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>222</td>
                  <td>SALONA DIWAKAR</td>
				  <td>2000093</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>500</td>
                  <td>distroy banch </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('265');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>223</td>
                  <td>SIDDHANT BARETH</td>
				  <td>2000109</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>150</td>
                  <td>CGHFTFT</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('266');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>224</td>
                  <td>LISHA NAGWAKAR</td>
				  <td>2000111</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>broken glass</td>
                  <td>xyz</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('267');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>225</td>
                  <td>OMPRAKASH CHAUHAN</td>
				  <td>2000108</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>200</td>
                  <td>Chair Break</td>
                  <td>bad boy</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('268');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>226</td>
                  <td>umesh </td>
				  <td>2000121</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>10</td>
                  <td>fine</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('269');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>227</td>
                  <td>umesh </td>
				  <td>2000121</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>10</td>
                  <td>fine</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('270');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>228</td>
                  <td>umesh </td>
				  <td>2000121</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>2500</td>
                  <td>CORRECTION IN MARKSHEET</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('271');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>229</td>
                  <td>abhiyank</td>
				  <td>2000138</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>50</td>
                  <td>Chair Break</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('272');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>230</td>
                  <td>Anamika</td>
				  <td>2200642</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Chair break</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('273');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>231</td>
                  <td>mani</td>
				  <td>2000178</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>68465</td>
                  <td>655656</td>
                  <td>6565</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('274');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>232</td>
                  <td>GGDFGFDGFDG</td>
				  <td>2000195</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>010131</td>
                  <td>5+53</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('275');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>233</td>
                  <td>Anamika</td>
				  <td>2200642</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>lete fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('276');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>234</td>
                  <td>Mr. Dishu Saini</td>
				  <td>2000213</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>90</td>
                  <td>sdf</td>
                  <td>lsad</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('277');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>235</td>
                  <td>Ram</td>
				  <td>2000211</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>200</td>
                  <td>kjnhvjv</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('278');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>236</td>
                  <td>Ram</td>
				  <td>2000211</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>60</td>
                  <td>bad behave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('279');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>237</td>
                  <td>VIDIT YADAV</td>
				  <td>2000291</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>220</td>
                  <td>xxx</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('280');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>238</td>
                  <td>deepak kumar</td>
				  <td>2000342</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>home work not done</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('281');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>239</td>
                  <td>deepak kumar</td>
				  <td>2000342</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>500</td>
                  <td>claas bunk</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('282');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>240</td>
                  <td>Jayssh</td>
				  <td>2100407</td>
                  <td>4TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>table demag</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('283');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>241</td>
                  <td>Sangita</td>
				  <td>2100430</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('284');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>242</td>
                  <td>Kishan</td>
				  <td>2100413</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>01</td>
                  <td>ःळॉ</td>
                  <td>ईळ</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('285');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>243</td>
                  <td>RAHUL</td>
				  <td>2000315</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('286');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>244</td>
                  <td>Kishan</td>
				  <td>2100413</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>50</td>
                  <td>table demag</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('287');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>245</td>
                  <td>Humaira</td>
				  <td>2100451</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>200</td>
                  <td>ft</td>
                  <td>f</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('288');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>246</td>
                  <td>Akhil</td>
				  <td>2100427</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>50</td>
                  <td>Late fee </td>
                  <td>Late fee </td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('289');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>247</td>
                  <td>sanjeev</td>
				  <td>2200775</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>misbehave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('290');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>248</td>
                  <td>RUPESH</td>
				  <td>2100547</td>
                  <td>12TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>table demag</td>
                  <td>jhui</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('291');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>249</td>
                  <td>Anshu</td>
				  <td>2100571</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>50</td>
                  <td>table demag</td>
                  <td>jhui</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('292');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>250</td>
                  <td>vishal vilran</td>
				  <td>2000230</td>
                  <td>5TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>absent</td>
                  <td>continew absent</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('293');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>251</td>
                  <td>hari shankar kol</td>
				  <td>2200818</td>
                  <td>12TH</td>
                  <td></td>
                  <td>10000000000</td>
                  <td>late fesss</td>
                  <td>ncbdsgfsrebhoutsreblb</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('294');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>252</td>
                  <td>himanshu kol</td>
				  <td>2200819</td>
                  <td>10TH</td>
                  <td></td>
                  <td>10000000000</td>
                  <td>late fesss</td>
                  <td>ncbdsgfsrebhoutsreblb</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('295');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>253</td>
                  <td>Akshay Karande</td>
				  <td>2200733</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>miss beheave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('296');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>254</td>
                  <td>ARPAN NANDEWAR</td>
				  <td>2200657</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>due amount</td>
                  <td>ok</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('297');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>255</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>Irregularity</td>
                  <td>must be regular in school</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('298');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>256</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>due amount</td>
                  <td>ok</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('299');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>257</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>520</td>
                  <td>for fan </td>
                  <td>N/A</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('300');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>258</td>
                  <td>vicky uikey</td>
				  <td>2200841</td>
                  <td>1ST</td>
                  <td>A</td>
                  <td>100</td>
                  <td>let fees</td>
                  <td>ok</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('301');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>259</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>misbihave </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('302');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>260</td>
                  <td>payal</td>
				  <td>2200667</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>misbihave </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('303');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>261</td>
                  <td>Akshay Karande</td>
				  <td>2200733</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>let fees</td>
                  <td>ok</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('304');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>262</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>500</td>
                  <td>SPEAKING IN HINDI</td>
                  <td>WORSE</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('305');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>263</td>
                  <td> BABALI SAHU</td>
				  <td>2100575</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>50</td>
                  <td>let fees</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('306');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>264</td>
                  <td>payal</td>
				  <td>2200667</td>
                  <td>7TH</td>
                  <td>A</td>
                  <td>700</td>
                  <td>misbehave with teachers</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('307');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>265</td>
                  <td>sarita</td>
				  <td>2200669</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>700</td>
                  <td>misbehave with teachers</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('308');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>266</td>
                  <td>himanshi</td>
				  <td>2200678</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>700</td>
                  <td>misbehave with teachers</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('309');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>267</td>
                  <td>himanshi</td>
				  <td>2200678</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>misbehave with teachers</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('310');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>268</td>
                  <td>Monika</td>
				  <td>2200906</td>
                  <td>8TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('311');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>269</td>
                  <td>Kavita</td>
				  <td>2200912</td>
                  <td>8TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('312');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>270</td>
                  <td>sarita</td>
				  <td>2200669</td>
                  <td>6TH</td>
                  <td>A</td>
                  <td>50</td>
                  <td>late fee pay</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('313');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>271</td>
                  <td>XYZ</td>
				  <td>2200685</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>500</td>
                  <td>check returned</td>
                  <td>check returned</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('314');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>272</td>
                  <td>XYZ</td>
				  <td>2200685</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>100</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('315');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>273</td>
                  <td>yashi</td>
				  <td>2200782</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>1</td>
                  <td>LATE</td>
                  <td>COME</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('316');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>274</td>
                  <td>mahi</td>
				  <td>2200822</td>
                  <td>8TH</td>
                  <td>A</td>
                  <td>520</td>
                  <td>sffg</td>
                  <td>N/A</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('317');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>275</td>
                  <td>सौरभ</td>
				  <td>2200722</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>1500</td>
                  <td>misbehave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('318');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>276</td>
                  <td>joy</td>
				  <td>2000345</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>1</td>
                  <td>fff</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('319');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>277</td>
                  <td>सौरभ</td>
				  <td>2200722</td>
                  <td>1ST</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('320');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>278</td>
                  <td>Meenakshi</td>
				  <td>2200986</td>
                  <td>9TH</td>
                  <td></td>
                  <td>5000</td>
                  <td>late fess</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('321');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>279</td>
                  <td>SANJAY KUMAR</td>
				  <td>2200724</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>1000</td>
                  <td>miss beheave</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('322');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>280</td>
                  <td>SANJAY KUMAR</td>
				  <td>2200724</td>
                  <td>UKG</td>
                  <td>A</td>
                  <td>100</td>
                  <td>tab.</td>
                  <td>next fgrkjag</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('323');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>281</td>
                  <td>RAM</td>
				  <td>2200701</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>100</td>
                  <td>due amount</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('324');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>282</td>
                  <td>RAM</td>
				  <td>2200701</td>
                  <td>NURSERY</td>
                  <td>A</td>
                  <td>2500</td>
                  <td>MISBEHAVIOUR</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('325');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>283</td>
                  <td>mayank</td>
				  <td>2200738</td>
                  <td>LKG</td>
                  <td>A</td>
                  <td>5000</td>
                  <td>2000</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('326');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>284</td>
                  <td>ROHIT KUMAR</td>
				  <td>2200750</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>500</td>
                  <td>PAY LATE FEE </td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('327');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>285</td>
                  <td>vivek</td>
				  <td>2200742</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>899</td>
                  <td>jj</td>
                  <td>jjjjjj</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('328');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>286</td>
                  <td>ravi</td>
				  <td>2200746</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>232</td>
                  <td>2500</td>
                  <td>0</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('329');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>287</td>
                  <td>deepak kumar</td>
				  <td>2000342</td>
                  <td>2ND</td>
                  <td>A</td>
                  <td>100</td>
                  <td>late fee</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('330');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>288</td>
                  <td>LEYA ANNA ANTONY</td>
				  <td>2000356</td>
                  <td>4TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>ABSENCE</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('331');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>289</td>
                  <td>RAJESH</td>
				  <td>2100536</td>
                  <td>11TH</td>
                  <td>A</td>
                  <td>100</td>
                  <td>Late</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('332');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>290</td>
                  <td>nidhi jain </td>
				  <td>2200760</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</td>
                  <td></td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('333');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>291</td>
                  <td>Upen</td>
				  <td>2100412</td>
                  <td>3RD</td>
                  <td>A</td>
                  <td>88</td>
                  <td>33</td>
                  <td>222</td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('334');" >Delete</button></td></td>
                </tr>
                <tr>
                  <td>292</td>
                  <td>REHAN</td>
				  <td>2000297</td>
                  <td>2ND</td>
                  <td>B</td>
                  <td>1000</td>
                  <td>crash mirror</td>
                  <td></td>
                  
                  <td></td>
                  <td>30-11--0001</td>
                  
            <td><button type="button"  class="btn btn-danger" onclick="return valid('335');" >Delete</button></td></td>
                </tr>
                </tbody>
             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script>
$(function () {
$('#example1').DataTable()
})

</script>
  