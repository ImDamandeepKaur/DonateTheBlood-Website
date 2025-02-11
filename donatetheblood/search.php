<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
								<option value="">Select a city...</option>
  <optgroup title="Andhra Pradesh"label="&raquo; Andhra Pradesh">
    <option value="Hyderabad">Hyderabad</option>
    <option value="Visakhapatnam">Visakhapatnam</option>
    <option value="Vijayawada">Vijayawada</option>
	<option value="Guntur">Guntur</option>
	<option value="Nellore">Nellore</option>
	<option value="Tirupati">Tirupati</option>
  </optgroup>
  <optgroup tittle="Arunachal Pradesh" label="&raquo;Arunachal Pradesh">
	<option value="Itanagar">Itanagar</option>
	<option value="Tawang">Tawang</option>
	<option value="Bhismaknagar">Bhismaknagar</option>
	<option value="Pasighat">Pasighat</option>
	<option value="Ziro">Ziro</option>
	<option value="Bomdila">Bomdila</option>
  </optgroup>
  <optgroup title="Assam" label="&raquo;Assam">
	<option value="Dispur">Dispur</option>
	<option value="Guwahati">Guwahati</option>
	<option value="Tezpur">Tezpur</option>
	<option value="Dibrugarh">Dibrugarh</option>
	<option value="Silchar">Silchar</option>
	<option value="North Lakhimpur">North Lakhimpur</option>
  </optgroup>
  <optgroup title="Bhiar" labele="&raquo;Bhiar">
	<option value="Patna">Patna</option>
	<option value="Gaya">Gaya</option>
	<option value="Biharsharif">Biharsharif</option>
	<option value="Darbhanga">Darbhanga</option>
	<option value="Bhagalpur">Bhagalpur</option>
  </optgroup>
  <optgroup title="Chhattisgarh" label="&raquo;Chhattisgarh">
	<option value="Raipur">Raipur</option>
	<option value="Bilaspur">Bilaspur</option>
	<option value="Korba">Korba</option>
	<option value="Durg-Bhilainagar">Durg-Bhilainagar</option>
	<option value="Raigarh">Raigarh</option>
	<option value="Rajnandgaon">Rajnandgaon</option>
  </optgroup>
  <optgroup title="Goa"label="&raquo;Goa">
	<option value="Panaji">Panaji</option>
	<option value="Vasco-da-Gama">Vasco-da-Gama</option>
	<option value="Ponda">Ponda</option>
	<option value="Margao">Margao</option>
	<option value="Mapusa">Mapusa</option>
	<option value="Goa Velha">Goa Velha</option>
  </optgroup>
  <optgroup title="Gujarat"label="&raquo;Gujarat">
	<option value="Gandhinagar">Gandhinagar</option>
	<option value="Ahmedabad">Ahmedabad</option>
	<option value="Surat">Surat</option>
	<option value="Rajkot">Rajkot</option>
	<option value="Junagadh">Junagadh</option>
	<option value="Vadodara">Vadodara</option>
  </optgroup>
  <optgroup title="Haryana" label="&raquo;Haryana">
	<option value="Chandigarh">Chandigarh</option>
	<option value="Faridabad">Faridabad</option>
	<option value="Gurgaon">Gurgaon</option>
	<option value="Sonipat">Sonipat</option>
	<option value="Panipat">Panipat</option>
	<option value="Ambala">Ambala</option>
  </optgroup>
  <optgroup title="Himachal Pradesh" label="&raquo;Himachal Pradesh	">
	<option value="Shimla">Shimla</option>
	<option value="Dharamshala">Dharamshala</option>
	<option value="Mandi">Mandi</option>
	<option value="Solan">Solan</option>
	<option value="Bilaspur">Bilaspur</option>
	<option value="Chamba">Chamba</option>
  </optgroup>
  <optgroup title="Jharkhand"label="&raquo;Jharkhand">
	<option value="Ranchi">Ranchi</option>
	<option value="Bokaro Steel City">Bokaro Steel City</option>
	<option value="Jamshedpur">Jamshedpur</option>
	<option value="Deoghar">Deoghar</option>
	<option value="Hazaribagh">Hazaribagh</option>
	<option value="Dhanbad">Dhanbad</option>
  </optgroup>
  <optgroup title="Karnataka"label="&raquo;Karnataka">
	<option value="Bengaluru">Bengaluru</option>
	<option value="Mysore">Mysore</option>
	<option value="Davangere">Davangere</option>
	<option value="Mangalore">Mangalore</option>
	<option value="Hubli-Dharwad">Hubli-Dharwad</option>
	<option value="Belgaum">Belgaum</option>
  </optgroup>
  <optgroup title="Kerala" label="&raquo;Kerala">
	<option value="Thiruvananthapuram">Thiruvananthapuram</option>
	<option value="Kochi">Kochi</option>
	<option value="Kozhikode">Kozhikode</option>
	<option value="Thrissur">Thrissur</option>
	<option value="Malappuram">Malappuram</option>
  </optgroup>
  <optgroup title="Madhya Pradesh"label="&raquo;Madhya Pradesh">
	<option value="Bhopal">Bhopal</option>
	<option value="Indore">Indore</option>
	<option value="Gwalior">Gwalior</option>
	<option value="Jabalpur">Jabalpur</option>
	<option value="Ujjain">Ujjain</option>
	<option value="Sagar">Sagar</option>
  </optgroup>
  <optgroup title="Maharashtra" label="&raquo;Maharashtra">
    <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>
    <option value="Nagpur">Nagpur</option>
	<option value="Nashik">Nashik</option>
	<option value="Aurangabad">Aurangabad</option>
	<option value="Solapur">Solapur</option>
  </optgroup>
  <optgroup title="Manipur" label="&raquo;Manipur">
	<option value="Imphal">Imphal</option>
	<option value="Bishnupur">Bishnupur</option>
	<option value="Ukhrul">Ukhrul</option>
	<option value="Tamenglong">Tamenglong</option>
	<option value="Chandel">Chandel</option>
	<option value="Senapati">Senapati</option>
  </optgroup>
  <optgroup title="Meghalaya"label="&raquo;Meghalaya">
	<option value="Shillong">Shillong</option>
	<option value="Cherrapunji">Cherrapunji</option>
	<option value="Tura">Tura</option>
	<option value="Tura">Tura</option>
	<option value="Baghmara">Baghmara</option>
	<option value="Nongpoh">Nongpoh</option>
  </optgroup>
  <optgroup title="Mizoram" label="&raquo;Mizoram">
	<option value="Aizawl">Aizawl</option>
	<option value="Lunglei">Lunglei</option>
	<option value="Serchhip">Serchhip</option>
	<option value="Champhai">Champhai</option>
	<option value="Tuipang">Tuipang</option>
	<option value="Mamit">Mamit</option>
  </optgroup>
  <optgroup title="Nagaland" label="&raquo;Nagaland">
	<option value="Kohima">Kohima</option>
	<option value="Tuensang">Tuensang</option>
	<option value="Zunheboto">Zunheboto</option>
	<option value="Mokokchung">Mokokchung</option>
	<option value="Kiphire Sadar">Kiphire Sadar</option>
	<option value="Phek">Phek</option>
  </optgroup>
  <optgroup title="Odisha" label="&raquo;Odisha">
	<option value="Bhubaneswar">Bhubaneswar</option>
	<option value="Rourkela">Rourkela</option>
	<option value="Cuttack">Cuttack</option>
	<option value="Brahmapur">Brahmapur</option>
	<option value="Puri">Puri</option>
	<option value="Sambalpur">Sambalpur</option>
  </optgroup>
  <optgroup title="Punjab"label="&raquo;Punjab">
	<option value="Chandigarh (Shared with Haryana)">Chandigarh (Shared with Haryana)</option>
	<option value="Amritsar">Amritsar</option>
	<option value="Jalandhar">Jalandhar</option>
	<option value="Ludhiana">Ludhiana</option>
	<option value="Patiala">Patiala</option>
	<option value="Kapurthala">Kapurthala</option>
  </optgroup>
  <optgroup title="Rajasthan" label="&raquo;Rajasthan">
	<option value="Jaipur">Jaipur</option>
	<option value="Bikaner">Bikaner</option>
	<option value="Jaisalmer">Jaisalmer</option>
	<option value="Jodhpur">Jodhpur</option>
	<option value="Udaipur">Udaipur</option>
	<option value="Ajmer">Ajmer</option>
  </optgroup>
  <optgroup tilte="Sikkim"label="&raquo;Sikkim">
	<option value="Gangtok">Gangtok</option>
	<option value="Namchi">Namchi</option>
	<option value="Gyalshing">Gyalshing</option>
	<option value="Mangan">Mangan</option>
	<option value="Rabdentse">Rabdentse</option>
  </optgroup>
  <optgroup title="Tamil Nadu" label="&raquo;Tamil Nadu">
    <option value="Chennai">Chennai</option>
	<option value="Tiruchirappalli">Tiruchirappalli</option>
    <option value="Coimbatore">Coimbatore</option>
	<option value="Erode">Erode</option>
	<option value="Vellore">Vellore</option>
    <option value="Madurai">Madurai</option>
  </optgroup>
  <optgroup title="Telangana" label="&raquo;Telangana">
	<option value="Hyderabad (Shared with Andhra Pradesh)">Hyderabad (Shared with Andhra Pradesh)</option>
	<option value="Warangal">Warangal</option>
	<option value="Nizamabad">Nizamabad</option>
	<option value="Karimnagar">Karimnagar</option>
	<option value="Adilabad">Adilabad</option>
	<option value="Khammam">Khammam</option>
  </optgroup>
  <optgroup titele="Tripura" label="&raquo;Tripura">
	<option value="Agartala">Agartala</option>
	<option value="Amarpur">Amarpur</option>
	<option value="Kumarghat">Kumarghat</option>
	<option value="Udaipur">Udaipur</option>
	<option value="Gakulnagar">Gakulnagar</option>
	<option value="Kunjaban">Kunjaban</option>
  </optgroup>
  <optgroup title="Uttar Pradesh" label="&raquo;Uttar Pradesh">
	<option value="Lucknow">Lucknow</option>
	<option value="Noida">Noida</option>
	<option value="Varanasi">Varanasi</option>
	<option value="Allahabad">Allahabad</option>
	<option value="Agra">Agra</option>
	<option value="Kanpur">Kanpur</option>
  </optgroup>
  <optgroup title="Uttarakhand" label="&raquo;Uttarakhand">
	<option value="Dehradun">Dehradun</option>
	<option value="Haridwar">Haridwar</option>
	<option value="Roorkee">Roorkee</option>
	<option value="Rishikesh">Rishikesh</option>
	<option value="Kashipur">Kashipur</option>
	<option value="Haldwani">Haldwani</option>
  </optgroup>
  <optgroup title="West Bengal"label="&raquo;West Bengal"	>
	<option value="Kolkata">Kolkata</option>
	<option value="Darjeeling">Darjeeling</option>
	<option value="Siliguri">Siliguri</option>
	<option value="Asansol">Asansol</option>
	<option value="Howrah">Howrah</option>
	<option value="Durgapur">Durgapur</option>
  </optgroup></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

		<?php
		   
		if(isset($_GET['city']) && !empty($_GET['city']) && isset($_GET['blood_group']) &&!empty($_GET['blood_group'])){

            $city = $_GET['city'];
			$blood_group = $_GET['blood_group'];

			$sql = "SELECT * FROM donor1 WHERE city='$city' OR blood_group='$blood_group'";
			$result = mysqli_query($connection, $sql);
 
			if(mysqli_num_rows($result)>0){
			   
				 while($row = mysqli_fetch_assoc($result)){
					 if($row['save_life_date'] == '0'){
 
						 echo '
							  <div class="cpl-md-3 col-sm-12 col-lg-3  donors_data">
							  <span class = "name">'.$row['name'].'</span>
							  <span>'.$row['city'].'</span>
							  <span>'.$row['blood_group'].'</span>
							  <span>'.$row['gender'].'</span>
							  <span>'.$row['email'].'</span>
							  <span>'.$row['contact_no'].'</span>
 
							  </div>						
							  ';
						 
 
					 }else{
						 echo '
							  <div class="cpl-md-3 col-sm-12 col-lg-3  donors_data">
							  <span class = "name">'.$row['name'].'</span>
							  <span>'.$row['city'].'</span>
							  <span>'.$row['blood_group'].'</span>
							  <span>'.$row['gender'].'</span>
							  <h4 class = "name text-center">Donated</h4>
							  </div>						
							  ';
 
					 }
				 }
 
			}else{
				 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Record is not registered!!</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button> </div>';
 
			}
		   }

		?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
<script type="text/javascript">
	$(function(){

		$("#search").on('click',function(){
			
				var city = $("#city").val();
				var blood_group = $("#blood_group").val();

				$.ajax({
						type: 'GET',
						url:'ajaxsearch.php',
						data: {city:city,blood_group,blood_group},
						success:function(data){

							if(!data.error){
								$("#data").html(data);
							}
						}
				});
		});
	});
</script>
