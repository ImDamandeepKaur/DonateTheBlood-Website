<?php 
	
	include 'include/header.php';
	//$connection = mysqli_connect("localhost","root","68358","donatetheblood") or die("Database is not connected.".mysqli_connect_error());

	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		   
		   if(isset($_POST['submit'])){
		 
			 	 //name input check
				 if(isset($_POST['name']) && !empty($_POST['name'])){
		 
					 if(preg_match('/^[A-Za-z\s]+$/',$_POST['name'])){
						 $name = $_POST['name'];
					 }else{
						 $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Only lower and upper case and space characters are allowed</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
					 }
		 
				 }else{
					 $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Please fill the name field.</strong>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					 </div>';
				 }
			
			 }
				 //gender input check
				 if(isset($_POST['gender']) && !empty($_POST['gender'])){
					 $gender = $_POST['gender'];
				 }else{
					 $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Select your gender</strong>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					 </div>';
				 }
				 //day input check
				 if(isset($_POST['day']) && !empty($_POST['day'])){
					 $day = $_POST['day'];
				 }else{
					 $dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Please select day input</strong>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					 </div>';
				 } //month input check  
				 if(isset($_POST['month']) && !empty($_POST['month'])){
					 $month = $_POST['month'];
				 }else{
					 $monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Please select month input</strong>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					 </div>';
				 }//year input check
				 if(isset($_POST['year']) && !empty($_POST['year'])){
					 $year = $_POST['year'];
					 }else{
						 $yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Please select year input</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
					 }
					 //city input check
					 if(isset($_POST['city']) && !empty($_POST['city'])){
		 
							 $city = $_POST['city'];
					 }
					 else{
						 $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Please fill the city field.</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
					 }
					 
					  //blood_group input check
					 if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
						 $blood_group = $_POST['blood_group'];
					 }else{
						 $blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					 <strong>Please select blood group input</strong>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 </button>
					 </div>';
					 }
					  //contact_no input check
					 if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
						 $pattern ='^\d{10}$';
		 
						 if(preg_match('/^\d{10}$/',$_POST['contact_no'])){
							 $contact_no = $_POST['contact_no'];
						 }else{
							 $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							 <strong>Contact should consist of 10 numeric characters</strong>
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
							 </div>';
						 }
		 
					 }else{
						 $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Please fill the contact field.</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
					 }
		 
			
					  //email input check
					 if(isset($_POST['email']) && !empty($_POST['email'])){
						 
					 $pattern = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$';
		 
					 if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$_POST['email'])){
						 
						 $check_email = $_POST['email'];
						 $sql = "SELECT email FROM donor1 WHERE email= '$check_email'";
						 $result = mysqli_query($connection, $sql);
		 
						 if(mysqli_num_rows($result) > 0){
		 
							 $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							 <strong>Sorry!! this email already exist. </strong>
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
							 </div>';
		 
		 
						 }else{
							 $email = $_POST['email'];// If valid than store
		 
						 }
		 
						 }else{
							 $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							 <strong>Please enter valid email address. </strong>
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;</span>
							 </button>
							 </div>';
						 }
		 
					 }else{
						 $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						 <strong>Please fill the email field.</strong>
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
						 </div>';
						 }
						 
		 //Insert data into databses
						 //echo "$name, $blood_group, $gender, $day, $month, $year, $email, $contact_no, $city,$password";
						 if( isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city))
						 {
							
							 $DonorDOB = $year."-".$month."-".$day; //to make one variable using ."-". concatenate
							 						  
							 $sql = " UPDATE donor1 SET `name`= '$name',`gender`='$gender',`email`='$email',`city`='$city',`dob`='$DonorDOB', `contact_no`='$contact_no',`blood_group`='$blood_group' 
							  WHERE id =".$_SESSION['user_id'];
							 
							 if(mysqli_query($connection,$sql)){

								$updateSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Data Updated Successfully.</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											</div>';

								?>
								<script>function myFunction(){location.reload();}</script>

                                <?php
		 
							 }else{
								$updateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								 <strong>Oops!! Data not Updated.</strong>
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
								 </button>
								 </div>';
		 
							 }
							 
						 }
					}//End of submit if
					$sql = "SELECT * FROM donor1 WHERE id=".$_SESSION['user_id'];
		   $result = mysqli_query($connection, $sql);

		   if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					$userId = $row['id'];
					$name = $row['name'];
					$blood_group = $row['blood_group'];
					$gender = $row['gender'];
					$email = $row['email'];
					$contact_no = $row['contact_no'];
					$city = $row['city'];

					$dob = $row['dob'];
					$date = explode("-", $dob); //explode() to seprate y-m-d
					$dbPassword = $row['password'];
				}
			}
					if(isset($_POST['update_pass'])){
						  //password input check
						  if(isset($_POST['old_password']) && !empty($_POST['old_password']) && $_POST['c_password'] && !empty($_POST['c_password']) && $_POST['new_password'] && !empty($_POST['new_password']))
						  {
							  $oldpassword = md5($_POST['old_password']); 
							if($oldpassword == $dbPassword){

								if(strlen($_POST['new_password'] >= 6))
							  {
			  
								  if($_POST['new_password'] === $_POST['c_password']){
									  $password =md5($_POST['new_password']);
								  }else{
									  $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  <strong>Passwords are not same.</strong>
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									  </button>
									  </div>';
								  }
							  }else{
								  $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>The password should consist of 6 characters.</strong>
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								  </button>
								  </div>';
			  
							  }

							}else{
								$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Please enter valid password.</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>';
							}
							  
						  }else{
							  $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Please fill password field.</strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							  </button>
							  </div>';
			  
						  }
						  if(isset($password)){
							$sql = "UPDATE donor1 SET password = '$password' WHERE id='$userId'";

								if(mysqli_query($connection,$sql)){
									$updatepasswordSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong> password Updated.</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											</div>';

								?>
								<script>function myFunction(){location.reload();}</script>

                                <?php
									
									
								}else{
									$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Oops!! Data not inserted TRY AGAIN.</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											</div>';
								}
						  }
					}
					if(isset($_POST['delete_account'])){

						$aaccoumt_password = md5($_POST['delete_account']);

						if($aaccoumt_password == $dbPassword){
							$showForm = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Are you sure you want to Delete your account?</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<form target="" method="post">
								<br>
								<input type="hidden" name="userId" value="'.$_SESSION['user_id'].'">
								<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>

								<button type="button" class="btn btn-info" data-dismiss="alert">
								<span aria-hidden="true">Oops! No </span>
								</button>      
							</form>
				        </div>';
						}else{

							  $deleteAccountError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Enter Valid password.</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											</div>';

						}


						if(isset($_POST['account_password']) && !empty(isset($_POST['account_password']))){

							$showForm = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Are you sure to Delete your Account?</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<form target="" method="post">
								<br>
								<input type="hidden" name="userId" value="'.$_SESSION['user_id'].'">
								<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>

								<button type="button" class="btn btn-info" data-dismiss="alert">
								<span aria-hidden="true">Oops! No </span>
								</button>      
							</form>
				        </div>';

							

						}else{

							$deleteAccountError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Please enter your password.</strong>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											</div>';

						}

					}
					
					if(isset($_POST['userId'])){
						
						$userId = $_POST['userId'];

						$sql = "DELETE FROM `donor1` WHERE id =".$userId;
						if(mysqli_query($connection,$sql)){

							header("Location: logout.php");

						}else{
							$deletesubmitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Account not Deleted!!</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>';
						}
					}
include 'include/sidebar.php';		 
						 
?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
					<div><?php 
					           if(isset($showForm)) echo $showForm;
					           if(isset($updateError)) echo $updateError;
					           if(isset($updateSuccess)) echo $updateSuccess;
							   if(isset($deletesubmitError)) echo $deletesubmitError;
					?></div>


					<form class="form-group" action="" method="POST">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name)) echo $name; ?>">
				    <?php if(isset($nameError)) echo $nameError; ?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>'; ?>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div> <!--End form-group-->
			<?php if(isset($blood_groupError)) echo $blood_groupError; ?>
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;">
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
									<?php //if(isset($gender)){ if($gender == "Female") echo "checked"; }?>
				    
					</div><!--gender-->
					<?php if(isset($genderError)) echo $genderError; ?>
				    <div class="form-inline">
              <label for="name">Date of Birth:</label>&nbsp;
			  <br>
              <select class="form-control demo-default" id="day" name="day" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
				<?php if(isset($date['2'])) echo '<option selected="" value="'.$date['2'].'">'.$date['2'].'</option>'; ?>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
			  
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php if(isset($date['1'])) echo '<option selected="" value="'.$date['1'].'">'.$date['1'].'</option>'; ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
			  
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if(isset($date['0'])) echo '<option selected="" value="'.$date['0'].'">'.$date['0'].'</option>'; ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
			
            </div><!--End form-group-->
			<?php if(isset($dayError)) echo $dayError; ?>
			  <?php if(isset($monthError)) echo $monthError; ?>
			  <?php if(isset($yearError)) echo $yearError; ?>
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" required pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
						</div>
					    <?php if(isset($emailError)) echo $emailError; ?>
					
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="<?php if(isset($contact_no)) echo $contact_no; ?>" placeholder="91********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
            <?php if(isset($contact_noError)) echo $contact_noError; ?>
            </div><!--End form-group-->
			<div class="form-group">
			<label for="city">City</label>
			<select name="city" id="city" class="form-control demo-default" required>
			<option value="">Select a city...</option>
			<?php if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>'; ?>
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
			<optgroup title="Bhiar" label="&raquo;Bhiar">
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
			<?php if(isset($cityError)) echo $cityError; ?>
			</div> <!--city end-->
            
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div>
				</form>
			</div>
		</div>

		<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
						<?php if(isset($passwordError)) echo $passwordError;
						      if(isset($updatepasswordSuccess)) echo $updatepasswordSuccess;
						?>
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->
                    <?php if(isset($deleteAccountError)) echo $deleteAccountError ;
					?>
					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
	
<?php

include 'include/footer.php'; 
 ?>