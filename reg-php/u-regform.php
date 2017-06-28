<form method="post" action="../reg-php/u-registration.php" >
		<table align="center" style="font-weight: bold; font-size: 20px;">
			<tr class="form-group has-success">
				<td><input required="required" class="form-control" id="inputSuccess" type="text" name="uname" placeholder="User Name" size="40" ></td>
				<td><input required="required" class="form-control" id="inputSuccess" type="text" name="password" placeholder="Password" size="40" ></td>
			</tr>
			<tr class="form-group has-success">
				<td><input required="required" class="form-control" id="inputSuccess" type="text" name="fname" placeholder="First Name" size="40" ></td>
				<td><input required="required" class="form-control" id="inputSuccess" type="text" name="lname" placeholder="Last Name" size="40" ></td>
			</tr>
			<tr class="form-group has-success">
				
        			<td><select placeholder="Previlage" class="form-control" id="select" name="previlage">
  
          				<option>recieptionist</option>
          				<option>doctor</option>
          				<option>labaratorist</option>
          				<option>nurse</option>
          				<option>phamacist</option>
          				<option>accountant</option>
        			</select></td>
				<td><input class="btn btn-info btn-sm" type="submit" name="user" value="Add User" ></td>
			</tr>
		</table>
	</form>