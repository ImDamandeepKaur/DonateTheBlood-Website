<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
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
  </optgroup>

  <!-- Add more states and cities as needed -->
</select>

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
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						One Click. Countless Lives Saved!!<br>
						Our innovative blood donation website revolutionizes the way donors connect with blood banks, fostering a more efficient and user-friendly system. Built with the donor in mind, the website offers a seamless experience from registration to managing donation frequency.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We envision a future where blood donation is a seamless and empowering experience.  We see a world where readily available blood is never a barrier to life-saving medical care.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To achieve this vision, our primary goal is to develop and maintain a best-in-class blood donation website. This platform will bridge the gap between blood banks and potential donors, promoting responsible donation practices while prioritizing readily available blood sources.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Driven by this critical need, our mission is to revolutionize blood donation by creating a user-centric and efficient platform. We aim to streamline the entire process, from initial donor registration to facilitating communication between blood banks and potential donors.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>