<script>
        (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
//$('#printTable').print();
 }
</script>

  <section class="content-header">
      <h1>
        Goverment Requirement
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('govt_requirement/govt_requirement')"><i class="fa fa-stack-overflow"></i> Govt. Requir.</a></li>
	    <li><a href="javascript:get_content('govt_requirement/student_contact_list')"><i class="fa fa-stack-overflow"></i>Student Contact List</a></li>
	    <li class="active">Download Contact List</li>
      </ol>
    </section>

	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
	
    <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="box box-primary my_border_top">
		<div class="box-header with-border ">
		<div class="col-md-12">
		
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="exportTableToExcel('printTable', 'Student Contact List')"><i class="fa fa-print" aria-hidden="true"></i>Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn default" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>Print In Pdf</button></center>
			  </div>
		</div>
        </div>
	
        <div class="col-md-12">
          <!-- /.box -->
          <div class="box box-success" >
            <!-- /.box-header -->
			<div class="col-md-10 col-md-offset-1">
            <div class="box-body table-responsive" id="printTable">
			 
			 			 
			  <table cellspacing="0" cellpadding="5px;" class="" style="width:100%">
			  <tr>
			  <td colspan="3"><span style="font-size:20px;font-weight:bold"><center><b>SIMPTION TECH PVT LTD</b></center></span></td>
			  </tr>
			  <tr>
			  <td style="float:left"><b>Dise Code : 23260100164</b></td>
			  <td><center><b>STUDENT CONTACT LIST</b></center></td>
			  <td style="float:right"><b>School Code : 50702</b></td>
			  </tr>
			  </table>
				  <table cellspacing="0" cellpadding="10px;" border="1" id="example1" class="table table-bordered table-striped" style="width:100%;">
						<thead >
								<tr>
								  <td><b>S.No.</b></td>
								  								  <td><b>Student Name</b></td>
								  								  <td><b>Student Father Name</b></td>
								  								  <td><b>Student Class</b></td>
								  								  <td><b>Student Class Section</b></td>
								  								  <td><b>Student Contact Number</b></td>
								  								  <td><b>Student Father Contact Number</b></td>
								  								  <td><b>Student Father Contact Number2</b></td>
								  								  <td><b>Student Mother Contact Number</b></td>
								  								  <td><b>Student Guardian Contact Number</b></td>
								  								</tr>
						</thead>
					<tbody>
											   <tr>
						  <td>1</td>
						  						  <td>Arham Patel</td>
												  <td>Abdulnasir</td>
												  <td>2ND</td>
												  <td>B</td>
												  <td></td>
												  <td>7276231940</td>
												  <td>9623293570</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>2</td>
						  						  <td>ajit</td>
												  <td>Satveer</td>
												  <td>2ND</td>
												  <td>B</td>
												  <td></td>
												  <td>9050653720</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>3</td>
						  						  <td>REHAN</td>
												  <td>FARHAT ALI</td>
												  <td>2ND</td>
												  <td>B</td>
												  <td></td>
												  <td>8077194624</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>4</td>
						  						  <td>Rajesh Prasad</td>
												  <td>Ananda Prasad</td>
												  <td>2ND</td>
												  <td>B</td>
												  <td></td>
												  <td>9135956095</td>
												  <td>9128482921</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>5</td>
						  						  <td>Palak Kumari</td>
												  <td>Krishna Sahani</td>
												  <td>2ND</td>
												  <td>B</td>
												  <td>9876543210</td>
												  <td>9876543210</td>
												  <td>8976542310</td>
												  <td>7418529630</td>
												  <td>7418529630</td>
											   </tr>
					  					   <tr>
						  <td>6</td>
						  						  <td>joy</td>
												  <td>peter</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>8893387594</td>
												  <td>9987767098</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>7</td>
						  						  <td>Upen</td>
												  <td>Rajdev Mishra</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>8601727725</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>8</td>
						  						  <td>Saurya</td>
												  <td>Sanjeev Kumar</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9456930082</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>9</td>
						  						  <td>dummy</td>
												  <td>dummy father </td>
												  <td>2ND</td>
												  <td>B</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>10</td>
						  						  <td>Akhil</td>
												  <td>Mr. Manoj</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9719433442</td>
												  <td>23344234234</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>11</td>
						  						  <td>Sangita</td>
												  <td>Ramji</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9827185031</td>
												  <td>9300812340</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>12</td>
						  						  <td>cddf</td>
												  <td></td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>6</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>13</td>
						  						  <td>umesh  dhakad</td>
												  <td>mr  ramgopal dhakad</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>8269548476</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>14</td>
						  						  <td>Humaira</td>
												  <td>Palash</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1316543133</td>
												  <td>1316654132</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>15</td>
						  						  <td>ayush koli</td>
												  <td>prabhu dayal</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9826390607</td>
												  <td>6264720106</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>16</td>
						  						  <td>ajay kewat</td>
												  <td>durga kewat</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>17</td>
						  						  <td>Aman</td>
												  <td>Asad</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9634569635</td>
												  <td>8562344569</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>18</td>
						  						  <td>raja</td>
												  <td>raja</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>19</td>
						  						  <td>Nikhil  Lodhi</td>
												  <td>Mayank Lodhi</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8679458246</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>20</td>
						  						  <td>RAJESH</td>
												  <td>TARACHANDRA</td>
												  <td>11TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9839458652</td>
												  <td>4587963210</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>21</td>
						  						  <td>Vaidik</td>
												  <td></td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9974301792</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>22</td>
						  						  <td>Diviya prajapati</td>
												  <td>Shrawan Ram</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9571176454</td>
												  <td>9571176454</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>23</td>
						  						  <td>Sagar Singh</td>
												  <td>Rakesh Singh</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>24</td>
						  						  <td>Jidan uddin</td>
												  <td>riyaz uddin</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>8942116685</td>
												  <td>8866651555</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>25</td>
						  						  <td>Avnish kumar</td>
												  <td>Gopal kumar</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9931742369</td>
												  <td>9931742369</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>26</td>
						  						  <td>umesh </td>
												  <td>abhishek</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
												  <td>09144555977</td>
												  <td>7978988989</td>
												  <td>7978988989</td>
											   </tr>
					  					   <tr>
						  <td>27</td>
						  						  <td>umesh </td>
												  <td></td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>28</td>
						  						  <td>umesh </td>
												  <td></td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>29</td>
						  						  <td>Anshu</td>
												  <td>Vijay</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td>7978988989</td>
												  <td>9144555977</td>
												  <td>09144555977</td>
												  <td>7978988989</td>
												  <td>7978988989</td>
											   </tr>
					  					   <tr>
						  <td>30</td>
						  						  <td> BABALI SAHU</td>
												  <td>SHAIKH</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td>7978988989</td>
												  <td>7978988989</td>
												  <td>7978988989</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
											   </tr>
					  					   <tr>
						  <td>31</td>
						  						  <td>श्री</td>
												  <td>दीपक</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9926621333</td>
												  <td>9926621333</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>32</td>
						  						  <td>Muhammed Adnan</td>
												  <td>Muhammed Afnan</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>686868606868</td>
												  <td>68676868686</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>33</td>
						  						  <td>hari</td>
												  <td>hani</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>123456</td>
												  <td>4564132</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>34</td>
						  						  <td>Nidhi Mishra</td>
												  <td>Nidhi Mishra</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>7571940317</td>
												  <td>7571940317</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>35</td>
						  						  <td>SARIKA SULTANE</td>
												  <td>SANJAY</td>
												  <td>11TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7498177242</td>
												  <td>7498177242</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>36</td>
						  						  <td>dummy</td>
												  <td>dummy father </td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>37</td>
						  						  <td>balveer singh</td>
												  <td>sukhvinder singh</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
												  <td>09144555977</td>
												  <td>9144555977</td>
												  <td>7978988989</td>
											   </tr>
					  					   <tr>
						  <td>38</td>
						  						  <td>mahira khan</td>
												  <td>irfan khan</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
												  <td>09144555977</td>
												  <td>9144555977</td>
												  <td>7978988989</td>
											   </tr>
					  					   <tr>
						  <td>39</td>
						  						  <td>sanny</td>
												  <td>soham</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
												  <td>987654321</td>
												  <td>9144555977</td>
												  <td>9144555977</td>
											   </tr>
					  					   <tr>
						  <td>40</td>
						  						  <td>rohan sah</td>
												  <td>ram </td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td>2548751512</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>41</td>
						  						  <td>ishan kumar</td>
												  <td>rohit kumar</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>42</td>
						  						  <td>pankaj patel</td>
												  <td>ram </td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td>9876543212</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>43</td>
						  						  <td>kirti panday</td>
												  <td>sumit panday</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9865474758</td>
												  <td>9827358424</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>44</td>
						  						  <td>lali</td>
												  <td></td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>45</td>
						  						  <td>sushant singh</td>
												  <td>nilkamal singh </td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9825734280</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>46</td>
						  						  <td>saloni</td>
												  <td>bijay</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9825734280</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>47</td>
						  						  <td>suman</td>
												  <td>bijay</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9825734280</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>48</td>
						  						  <td>MANVEER SINGH </td>
												  <td>GURDEV SINGH </td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>836009915</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>49</td>
						  						  <td>RAM PANDEY</td>
												  <td>KAMLESH PANDEY</td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td>77718853445</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>50</td>
						  						  <td>Mayur Mangesh Padvi</td>
												  <td>Mangesh Gorakh Padvi</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7773954846</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>51</td>
						  						  <td>Bhavesh Arvind Padvi</td>
												  <td>Arvind Gorakh Padvi</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>8766578634</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>52</td>
						  						  <td>Nikhil Dinesh Padvi</td>
												  <td>Dinesh Gorakh Padvi</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7507167517</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>53</td>
						  						  <td>Kiran Sharma</td>
												  <td>Ramu Sharma</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>123456789</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>54</td>
						  						  <td>Riya Sharma</td>
												  <td>Ram Sharma</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>55</td>
						  						  <td>Meena Verma</td>
												  <td>Jay Verma</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>456789123</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>56</td>
						  						  <td>Heena Mittal</td>
												  <td>Lalu Pasad</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>567891234</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>57</td>
						  						  <td>Anamika</td>
												  <td>Yash Kapoor</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9456312705</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>58</td>
						  						  <td>Lalu Kumar</td>
												  <td>Raju Kumar</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>678912345</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>59</td>
						  						  <td>SK Thakur</td>
												  <td>Aasss</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>8084407273</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>60</td>
						  						  <td>abcs</td>
												  <td>ebgh</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>25585</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>61</td>
						  						  <td>Jay Sharma</td>
												  <td>Harsh Sharma</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>62</td>
						  						  <td>Sikdar</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>666</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>63</td>
						  						  <td>Bijoy</td>
												  <td>ajoy</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>4555</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>64</td>
						  						  <td>sona</td>
												  <td>rajesh</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>65</td>
						  						  <td>RIYA DAS</td>
												  <td>RATAN DAS</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td>9007425228</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>66</td>
						  						  <td>SUMIT KUMAR</td>
												  <td>Anil kumar </td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>67</td>
						  						  <td>Somya</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>6756789876</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>68</td>
						  						  <td>MAHEK DASHORE</td>
												  <td>NAVIN KUMAR DASHORE</td>
												  <td>11TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9584669888</td>
												  <td>9754705526</td>
												  <td>9754705526</td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>69</td>
						  						  <td>Radha Kumari</td>
												  <td>Ram Kumar</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567894</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>70</td>
						  						  <td>ARPAN NANDEWAR</td>
												  <td>RAM NANDEWAR</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>7987736568</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>71</td>
						  						  <td>mahir khan </td>
												  <td>javed khan </td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8305694069</td>
												  <td>9977017400</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>72</td>
						  						  <td>imran khan </td>
												  <td>waseem khan </td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9977805298</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>73</td>
						  						  <td>sajid khan </td>
												  <td>javed khan</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9826038592</td>
												  <td>9479375012</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>74</td>
						  						  <td>dummy </td>
												  <td>dummy father</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>75</td>
						  						  <td>dishika</td>
												  <td>sonu khatri </td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567892</td>
												  <td>5461239782</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>76</td>
						  						  <td>Bhavesh Arvind Padvi</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>77</td>
						  						  <td>payal</td>
												  <td>shyamlal</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8052987121</td>
												  <td>9580642266</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>78</td>
						  						  <td>SAJAL</td>
												  <td></td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9818273851</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>79</td>
						  						  <td>sarita</td>
												  <td>ramjee Gupta</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8840268435</td>
												  <td>8840268435</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>80</td>
						  						  <td>Komal Gupta</td>
												  <td>Pramod Gupta</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>8192906306</td>
												  <td>8192906306</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>81</td>
						  						  <td>Anil Kumar</td>
												  <td></td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9990008522</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>82</td>
						  						  <td>Anil Kapoor Dhoom</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9998000522</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>83</td>
						  						  <td>Prashant </td>
												  <td>Rammu lal</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>84</td>
						  						  <td>RAJ</td>
												  <td>rajesh</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>4987549</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>85</td>
						  						  <td>himanshi</td>
												  <td>babl</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1444411</td>
												  <td>12</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>86</td>
						  						  <td>Ram</td>
												  <td>Lala seth</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9893230765</td>
												  <td>9755301050</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>87</td>
						  						  <td>Prashant Kumar</td>
												  <td>Rammu</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8109607707</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>88</td>
						  						  <td>GGDFGFDGFDG</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>89</td>
						  						  <td>ABHISHEK </td>
												  <td>B L YADAV</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9695924506</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>90</td>
						  						  <td>XYZ</td>
												  <td>XYZ</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9818273851</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>91</td>
						  						  <td>abc</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7845123698</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>92</td>
						  						  <td>rahul</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>93</td>
						  						  <td>Prashant rajak</td>
												  <td>Rammu lal</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>647322824425</td>
												  <td>87412214</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>94</td>
						  						  <td> Kanika</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>0123456789</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>95</td>
						  						  <td>Ravi</td>
												  <td>xyz</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>96</td>
						  						  <td>Prashant kumar</td>
												  <td>Rammu lal</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>97</td>
						  						  <td>RAHUL</td>
												  <td>XYC</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>98</td>
						  						  <td>praveen kumar</td>
												  <td></td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>66666666666</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>99</td>
						  						  <td>bjkb</td>
												  <td>kllkdv</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9038423904</td>
												  <td>04832990</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>100</td>
						  						  <td>laxmi</td>
												  <td>venkat</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567892</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>101</td>
						  						  <td>AJAY</td>
												  <td>SUNIL</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7067633301</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>102</td>
						  						  <td>kunal jha</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9918556649</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>103</td>
						  						  <td>fgdfg</td>
												  <td>dfgdf</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>955656</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>104</td>
						  						  <td>DISHANT PATIDAR</td>
												  <td></td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9999555333</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>105</td>
						  						  <td>vishal jha</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9918556649</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>106</td>
						  						  <td>Ram</td>
												  <td></td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9999999995656</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>107</td>
						  						  <td>vishal jha</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9918556649</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>108</td>
						  						  <td>Prashant kumar</td>
												  <td>babl</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>7844411100</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>109</td>
						  						  <td>AS</td>
												  <td>SS</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>4545454</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>110</td>
						  						  <td>muskan ray</td>
												  <td>roshan ray</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9813405312</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>111</td>
						  						  <td>Prashant  KUMAR</td>
												  <td>Rammu lal</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7744447774</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>112</td>
						  						  <td>xghkjh</td>
												  <td>Anil</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>113</td>
						  						  <td>सौरभ</td>
												  <td>sunil  jain</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9234567981</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>114</td>
						  						  <td>aashu </td>
												  <td></td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>115</td>
						  						  <td>SANJAY KUMAR</td>
												  <td>manoj pandey</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>470050060</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>116</td>
						  						  <td>Rahul kumar</td>
												  <td>vijay singh</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8700377769</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>117</td>
						  						  <td>saloni karn</td>
												  <td>bijay karn</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>118</td>
						  						  <td>sushant karn</td>
												  <td>bijay karn</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>119</td>
						  						  <td>sanam karn</td>
												  <td>bijay karn</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9816870719</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>120</td>
						  						  <td>simran</td>
												  <td>PRAKASH PATIDAR</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9977522556</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>121</td>
						  						  <td>APEKSHIT KOLI</td>
												  <td>MANOJ KUMAR KOLI</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7697233299</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>122</td>
						  						  <td>Akshay Karande</td>
												  <td>NILESH PATIDAR</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>123</td>
						  						  <td>Rituraj</td>
												  <td>mitu raj</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9875455522</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>124</td>
						  						  <td>Aaditya </td>
												  <td>Sujit</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9934507865</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>125</td>
						  						  <td>ashok</td>
												  <td></td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>126</td>
						  						  <td>mayank</td>
												  <td>demo</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>-1</td>
												  <td>-1</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>127</td>
						  						  <td>ashok</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>128</td>
						  						  <td>Abhay</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>129</td>
						  						  <td>vivek</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>130</td>
						  						  <td>abhisek</td>
												  <td></td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>8109195202</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>131</td>
						  						  <td>bbs</td>
												  <td>bbs</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9638527410</td>
												  <td>9638527410</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>132</td>
						  						  <td>roma</td>
												  <td></td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8109195202</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>133</td>
						  						  <td>ravi</td>
												  <td>udham</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>56548455455</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>134</td>
						  						  <td>Vaishnavi Thakur</td>
												  <td>Mr. Amrendra Pratap Singh </td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9918666600</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>135</td>
						  						  <td>AADITYA JHILLE</td>
												  <td>AASHISH JHILLE</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7024347776</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>136</td>
						  						  <td>Shifa Meman</td>
												  <td>Shabbir Meman</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9893840078</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>137</td>
						  						  <td>ROHIT KUMAR</td>
												  <td>DOODH NATH YADAV</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>8577908478</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>138</td>
						  						  <td>Prashant  KUMAR</td>
												  <td>Rammu lal</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7748908646</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>139</td>
						  						  <td>Urvi sen</td>
												  <td>Prabhash sen</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9101065310</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>140</td>
						  						  <td>Akshaj Mishra</td>
												  <td>shesh Narayan Mishra</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>9685437207</td>
												  <td>54465</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>141</td>
						  						  <td>priya</td>
												  <td>rahul mehara</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>65463312</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>142</td>
						  						  <td>RAJESH KUMAR MAHTO </td>
												  <td>SITA RAM MAHTO </td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7488150952</td>
												  <td>7488150952</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>143</td>
						  						  <td>Ram</td>
												  <td>Bca</td>
												  <td>12TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9416499566</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>144</td>
						  						  <td>Aashish</td>
												  <td>Ramesh</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9416499566</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>145</td>
						  						  <td>INAMUR RAHMAN</td>
												  <td>ATIKUR RAHMAN</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>8486304694</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>146</td>
						  						  <td>nidhi jain </td>
												  <td>sunil  jain</td>
												  <td>3RD</td>
												  <td>A</td>
												  <td></td>
												  <td>9988525245</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>147</td>
						  						  <td>rakesh</td>
												  <td></td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>148</td>
						  						  <td>Ravi</td>
												  <td></td>
												  <td>12TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8059076999</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>149</td>
						  						  <td>VINAYAK PATIDAR</td>
												  <td>rahul mehara</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>456946564</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>150</td>
						  						  <td>RAJ  NAYK </td>
												  <td>GOPAL KHATRI</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>96325663</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>151</td>
						  						  <td>Praashant </td>
												  <td>rammulal</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>70000040</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>152</td>
						  						  <td>raman</td>
												  <td>tapan</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>7896541256</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>153</td>
						  						  <td>Akshay</td>
												  <td>ABC</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>154</td>
						  						  <td>Prashant r</td>
												  <td>rahul mehara </td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>155</td>
						  						  <td>nidhi jain </td>
												  <td>sunil  jain</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9988554665</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>156</td>
						  						  <td>sunil 1</td>
												  <td>Asad</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9955886644</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>157</td>
						  						  <td>Nikhil</td>
												  <td>jonh</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9090909090</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>158</td>
						  						  <td>yashi</td>
												  <td>pushpendra</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>8430555580</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>159</td>
						  						  <td>Gopi</td>
												  <td>BIKSHAM </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9052483352</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>160</td>
						  						  <td>ABHIMANYU SHARMA</td>
												  <td>GOURAV SHARMA</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9755404505</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>161</td>
						  						  <td>AVNI SHARMA</td>
												  <td>SOURABH SHARMA</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9826625627</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>162</td>
						  						  <td>Fig</td>
												  <td>Niraj Kumar </td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>458725</td>
												  <td>235689</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>163</td>
						  						  <td>shree</td>
												  <td>samay singh </td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9911587536</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>164</td>
						  						  <td>shreyansh</td>
												  <td>Neeraj kumar</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td>9911568753</td>
												  <td>9911587539</td>
												  <td>8800207311</td>
												  <td>9891391754</td>
												  <td>9211127109</td>
											   </tr>
					  					   <tr>
						  <td>165</td>
						  						  <td>Ajay</td>
												  <td>Vijay</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>685555555555</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>166</td>
						  						  <td>Druwa Ganesh Chaudhari</td>
												  <td>Ganesh Chaudhari</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>8469808008</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>167</td>
						  						  <td>SONU PRAJAPATI</td>
												  <td>LALARAM PRAJAPATI</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td>9854745896</td>
												  <td>7067208375</td>
												  <td>8827359266</td>
												  <td>9854745826</td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>168</td>
						  						  <td>Md alam ali </td>
												  <td>Ali alam</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9473000888</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>169</td>
						  						  <td>dummy </td>
												  <td>dummy</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>170</td>
						  						  <td>TABREZ ALAM</td>
												  <td>BAKRIDAN ANSARI</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7677425494</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>171</td>
						  						  <td>SHIVANSH RAWAT</td>
												  <td>AJAY</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>6283926887</td>
												  <td>7814267364</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>172</td>
						  						  <td>mahi</td>
												  <td>rohit kumar </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>173</td>
						  						  <td>mahi</td>
												  <td>ram singh </td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>7024510634</td>
												  <td>9685946008</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>174</td>
						  						  <td>shahnawaz</td>
												  <td></td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>7677425494</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>175</td>
						  						  <td>yasin</td>
												  <td></td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>9931326638</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>176</td>
						  						  <td>sultana</td>
												  <td></td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>9693212542</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>177</td>
						  						  <td>pragya </td>
												  <td>rajesh</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567891</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>178</td>
						  						  <td>priya</td>
												  <td>kaml raj</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>56454564564564</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>179</td>
						  						  <td>mahi</td>
												  <td>kaml raj</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>5644545456</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>180</td>
						  						  <td>Yash </td>
												  <td>Soun</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>6265767366</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>181</td>
						  						  <td>jeet kumar</td>
												  <td>amit kumar </td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7896454571</td>
												  <td>7896124535</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>182</td>
						  						  <td>PANKAJ KUMAR</td>
												  <td>UPENDRA SHARMA</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7004625934</td>
												  <td>8083477192</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>183</td>
						  						  <td>Rohit</td>
												  <td>Ram kumar</td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9918066214</td>
												  <td>8565026426</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>184</td>
						  						  <td>vicky uikey</td>
												  <td>jitendrasingh uikey</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>7354713649</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>185</td>
						  						  <td>penolope </td>
												  <td>jonh</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>186</td>
						  						  <td>Abdul sami </td>
												  <td>Mohd Sharif </td>
												  <td>12TH</td>
												  <td>A</td>
												  <td></td>
												  <td>6005939589</td>
												  <td>9149487748</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>187</td>
						  						  <td>jjlklkk</td>
												  <td></td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>188</td>
						  						  <td>VINAYAK PATIDAR</td>
												  <td>SUNIL RAI</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9955882211</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>189</td>
						  						  <td>NIDHI SINGH</td>
												  <td>RAMRAJ</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>89789665677</td>
												  <td>90878656576</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>190</td>
						  						  <td>Prashant </td>
												  <td>Rammu lal</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234569875</td>
												  <td>1234569875</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>191</td>
						  						  <td>Prashant </td>
												  <td>Rammu lal</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234587932</td>
												  <td>1234587932</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>192</td>
						  						  <td>pooja bairagi</td>
												  <td>j. d. bairagi</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td>9999999997</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>193</td>
						  						  <td>pooja bairagi</td>
												  <td>j. d. bairagi</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td>9087875766</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>194</td>
						  						  <td>pooja bairagi</td>
												  <td>Mr. J.D. Bairagi</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>195</td>
						  						  <td>Farhan khan</td>
												  <td>Riyaz khan</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>458963248327</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>196</td>
						  						  <td>पंकज कुमार</td>
												  <td>लालू राम</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9898888888</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>197</td>
						  						  <td>Mafidul Islam</td>
												  <td>Ali</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>00000000000000</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>198</td>
						  						  <td>neha parihar </td>
												  <td>himanshu parihar </td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>7854126359</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>199</td>
						  						  <td>Prashant</td>
												  <td>Rammu lal</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7740000</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>200</td>
						  						  <td>mahi</td>
												  <td>kaml raj</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>4744444</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>201</td>
						  						  <td>mansha</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>202</td>
						  						  <td>riya</td>
												  <td>kaml raj</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>56454564</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>203</td>
						  						  <td>VINAYAK PATIDAR</td>
												  <td>RAJENDRA PATIDAR</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9988552233</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>204</td>
						  						  <td>ArhN</td>
												  <td>Arqam</td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td>982365526</td>
												  <td>965245686</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>205</td>
						  						  <td>Ariz</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>206</td>
						  						  <td>Ariz</td>
												  <td></td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>207</td>
						  						  <td>vicky uikey</td>
												  <td>jitendra singh uikey</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>7354713649</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>208</td>
						  						  <td>Chirag jatav</td>
												  <td>MR.Arjun jatav</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>123</td>
												  <td>456</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>209</td>
						  						  <td>Pooja bairagi </td>
												  <td>Smt. Meenu bairagi</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>963486652388</td>
												  <td>99654690856</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>210</td>
						  						  <td>rajkumar</td>
												  <td>Rammu lal</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>544564</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>211</td>
						  						  <td>priya</td>
												  <td></td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>212</td>
						  						  <td>Md. Mokarram alam </td>
												  <td>Md. Siddique alam </td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>6200665811</td>
												  <td>7543097865</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>213</td>
						  						  <td>ashta </td>
												  <td>sanjeev </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7894561230</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>214</td>
						  						  <td>lalit </td>
												  <td>harichandra </td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>1234567890</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>215</td>
						  						  <td>shikha </td>
												  <td>rajendra </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>546123790</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>216</td>
						  						  <td>SANDEEP</td>
												  <td>PRATHAM SINGH</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9991233258</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>217</td>
						  						  <td>Vansh Kumar Pasi</td>
												  <td>Ravi Pasi</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>8103488491</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>218</td>
						  						  <td>rakesh</td>
												  <td>shaelendra</td>
												  <td>LKG</td>
												  <td>A</td>
												  <td></td>
												  <td>9058068745</td>
												  <td>9759513151</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>219</td>
						  						  <td>RAM KUMAR </td>
												  <td>SHYAM KUMAR </td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>8936860311</td>
												  <td>9308079285</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>220</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7748770000</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>221</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>74444</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>222</td>
						  						  <td>Amit rao</td>
												  <td>Sahab rao</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9450673349</td>
												  <td>8115130734</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>223</td>
						  						  <td>NIDHI SINGH</td>
												  <td>BHARAT PATIDAR</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>824685465</td>
												  <td>6598758458</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>224</td>
						  						  <td>shravan singh</td>
												  <td>rajaram singh</td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>9452358861</td>
												  <td>0</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>225</td>
						  						  <td>asharamk</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td>6265861579</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>226</td>
						  						  <td>kamalkant</td>
												  <td>vasudev dhakad</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9752199047</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>227</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>744777</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>228</td>
						  						  <td>Aarunya Raj Sinha</td>
												  <td>tret</td>
												  <td>UKG</td>
												  <td>A</td>
												  <td></td>
												  <td>87874545454</td>
												  <td>75489689896</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>229</td>
						  						  <td>Monali</td>
												  <td></td>
												  <td>2ND</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>230</td>
						  						  <td>lokesh</td>
												  <td>sandeep</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9416499566</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>231</td>
						  						  <td>prash</td>
												  <td>rrmm</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7444</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>232</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>74440</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>233</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>744</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>234</td>
						  						  <td>Prashant </td>
												  <td></td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>77</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>235</td>
						  						  <td>VEDANT TIWARI</td>
												  <td>MANOJ KUMAR TIWARI</td>
												  <td>8TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8090688671</td>
												  <td>9532822000</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>236</td>
						  						  <td>Aamna Hussain</td>
												  <td>Syed Farhat Hussain</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9018501010</td>
												  <td>9469090110</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>237</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>74444</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>238</td>
						  						  <td>Prashant </td>
												  <td>rammu lal </td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>7441000</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>239</td>
						  						  <td>RAJESH CHOVE</td>
												  <td>MUKESH CHOVE</td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>240</td>
						  						  <td>Nitya Yadav</td>
												  <td>Mr. Mayank Yadav</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>8707260755</td>
												  <td>8707260755</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>241</td>
						  						  <td>Shubh Kashyap</td>
												  <td>Mr. Anikesh Kumar</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>8957380880</td>
												  <td>8957380880</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>242</td>
						  						  <td>Arohi Kushwaha</td>
												  <td>Mr. Shailendra Singh Kushwaha</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>8726794375</td>
												  <td>8726794375</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>243</td>
						  						  <td>Anikesh</td>
												  <td>Mr. Amit Kumar</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9621111842</td>
												  <td>9621111842</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>244</td>
						  						  <td>Prithviraj</td>
												  <td>Dr. Pramod Kumar</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9219270152</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>245</td>
						  						  <td>Arushi Diwakar</td>
												  <td>Mr. Virendra Kumar</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>6393465780</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>246</td>
						  						  <td>Kartik Nishad</td>
												  <td>Kartik Nishad</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>247</td>
						  						  <td>Ramesh</td>
												  <td>Suresh</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9821223300</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>248</td>
						  						  <td>AUGUSTAY</td>
												  <td> SHARMA</td>
												  <td>10TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9897015271</td>
												  <td>8449410503</td>
												  <td>8449410503</td>
												  <td>1234567890</td>
											   </tr>
					  					   <tr>
						  <td>249</td>
						  						  <td>Anamika Agrawal</td>
												  <td>Sushil Agrawal</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9111111111</td>
												  <td>8111111111</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>250</td>
						  						  <td>Sujata Agrawal</td>
												  <td>Sushil Agrawal</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>7111111111</td>
												  <td>6111111111</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>251</td>
						  						  <td>aman soni</td>
												  <td>ravi soni</td>
												  <td>11TH</td>
												  <td>A</td>
												  <td></td>
												  <td>6387770743</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>252</td>
						  						  <td>aman soni 2</td>
												  <td>ravi soni</td>
												  <td>9TH</td>
												  <td>A</td>
												  <td></td>
												  <td>6387770743</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>253</td>
						  						  <td>amit</td>
												  <td>ram chandr</td>
												  <td>11TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8976453600</td>
												  <td>8976453600</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>254</td>
						  						  <td>Roshan </td>
												  <td>Raj Mishra</td>
												  <td>6TH</td>
												  <td>A</td>
												  <td></td>
												  <td>9936528547</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>255</td>
						  						  <td>NIDHI SINGH </td>
												  <td>Asad</td>
												  <td>7TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8454154454</td>
												  <td>76546416515</td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>256</td>
						  						  <td>Rajdeep kumar</td>
												  <td>Mandal himesh</td>
												  <td>4TH</td>
												  <td>A</td>
												  <td></td>
												  <td>8709788098</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>257</td>
						  						  <td>SURYA PRATAP MAURYA</td>
												  <td></td>
												  <td>5TH</td>
												  <td>A</td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>258</td>
						  						  <td>Danica Mariam Jacob</td>
												  <td>J P Jacob</td>
												  <td>1ST</td>
												  <td>A</td>
												  <td></td>
												  <td>9977228818</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					   <tr>
						  <td>259</td>
						  						  <td>Rahul Kumar</td>
												  <td>Lalbabu Ray</td>
												  <td>NURSERY</td>
												  <td>A</td>
												  <td></td>
												  <td>9570503057</td>
												  <td></td>
												  <td></td>
												  <td></td>
											   </tr>
					  					</tbody>
				 </table>
			  
        <!-- /.col -->
      </div>
      </div>
			  <div class="col-md-12">&nbsp;</div>
			  <div class="col-md-12">
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-danger" onclick="return ('printTable', 'Student Contact List')"><i class="fa fa-print" aria-hidden="true"></i>  Print In Excel</button></center>
			  </div>
			  <div class="col-md-6">
			  <center><button type="button" class="btn btn-success" onclick="for_print();"><i class="fa fa-print" aria-hidden="true"></i>  Print In Pdf</button></center>
			  </div>
			  </div>
      <!-- /.row -->
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
	