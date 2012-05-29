<form>
	<fieldset>
		<legend>CONTACT INFORMATION</legend>
		<table cellpadding="5">
			<tr>
				<td align="left" width="100">
					<table>
						<tr>
							<td align="left"><label for="title">Title:</label></td>
							<td>
								<select name="title" id="title" style="width:50px;">
									<option value="">Mr.</option>
									<option value="">Mrs.</option>
									<option value="">Ms.</option>
								</select>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td align="left" width="50"><label for="name">Name:</label></td>
							<td><input type="text" name="name" id="name" value="" /></td>
						</tr>
					</table>
				</td>
			</tr>


			<tr>
				<td><label for="fname">First Name:</label></td>
				<td><input type="text" id="fname" name="fname" value="" /></td>
			</tr>
			<tr>
				<td><label for="lname">Last Name:</label></td>
				<td><input type="text" id="lname" name="lname" value="" /></td>
			</tr>



			<tr>
				<td><label for="fax">Fax:</label></td>
				<td><input type="text" id="fax" name="fax" value="" /></td>
			</tr>



			<tr>
				<td><label for="address1">Address (1):</label></td>
				<td><input type="text" name="address1" id="address1" value="" /></td>
			</tr>
			<tr>
				<td><label for="address2">Address (2):</label></td>
				<td><input type="text" name="address2" id="address2" value="" /></td>
			</tr>





			<tr>
				<td><label>Gender:</label></td>
				<td>
					<input name="gender" id="male" type="radio" value="" class="auto" /><label for="male">Male</label>
					<input name="gender" id="female" type="radio" value="" class="auto" /><label for="female">Female</label>
				</td>
			</tr>
			<tr>
				<td align="left" colspan="2">
					<label>When is the best time to contact you?</label><br>
					<input type="radio" value="" name="radio" class="auto" id="contact_morning" /><label for="contact_morning">Morning</label>
					<input type="radio" value="" name="radio" class="auto" id="contact_afternoon" /><label for="contact_afternoon">Afternoon</label>
					<input type="radio" value="" name="radio" class="auto" id="contact_evening" /><label for="contact_evening">Evening</label>
				</td>
			</tr>
			<tr>
				<td align="left" colspan="2">
					<table cellspacing="10" width="100%">
						<tr>
							<td colspan="2"><label>Lorem ipsum dolor sit amet:</label></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td align="left">
								<ul>
									<li><input type="radio" value="" name="radio" class="auto" id="radio_1" /><label for="radio_1">Lorem ipsum dolor sit amet</label></li>
									<li><input type="radio" value="" name="radio" class="auto" id="radio_2" /><label for="radio_2">Lorem ipsum dolor sit amet</label></li>
									<li><input type="radio" value="" name="radio" class="auto" id="radio_3" /><label for="radio_3">Lorem ipsum dolor sit amet</label></li>
									<li><input type="radio" value="" name="radio" class="auto" id="radio_4" /><label for="radio_4">Lorem ipsum dolor sit amet</label></li>
								</ul>
							</td>
						</tr>
					</table>
				</td>
			</tr>			
			<tr>
				<td align="left" colspan="2">
					<table cellspacing="10" width="100%">
						<tr>
							<td colspan="2"><label>Lorem ipsum dolor sit amet:</label></td>
						</tr>
						<tr>
							<td width="100"></td>
							<td align="left">
								<ul>
									<li><input type="checkbox" value="" name="checkbox" class="auto" id="checkbox_1" /><label for="checkbox_1">Lorem ipsum dolor sit amet</label></li>
									<li><input type="checkbox" value="" name="checkbox" class="auto" id="checkbox_2" /><label for="checkbox_2">Lorem ipsum dolor sit amet</label></li>
									<li><input type="checkbox" value="" name="checkbox" class="auto" id="checkbox_3" /><label for="checkbox_3">Lorem ipsum dolor sit amet</label></li>
									<li><input type="checkbox" value="" name="checkbox" class="auto" id="checkbox_4" /><label for="checkbox_4">Lorem ipsum dolor sit amet</label></li>
								</ul>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="month">Month:</label></td>
				<td>
					<select id="month">
						<option value="january">January</option>
						<option value="february">February</option>
						<option value="march">March</option>
						<option value="april">April</option>
						<option value="may">May</option>
						<option value="june">June</option>
						<option value="july">July</option>
						<option value="august">August</option>
						<option value="september">September</option>
						<option value="october">October</option>
						<option value="november">November</option>
						<option value="december">December</option>
					</select>
					
					<label for="day">Day:</label>
					<input style="width:25px;" type="text" id="day" name="day" />
					
					<label for="year">Year:</label>
					<input style="width:40px;" type="text" id="year" name="year" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="left">
					<label for="comments">Comments And Questions:</label><br />
					<textarea name="comments" id="comments" rows="10" cols="10"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="left">
					<label>Verification Code, Please enter the text below.</label><br />
					<table>
						<tr>
							<td style="padding-right: 3px;"><label for="verificationcode"><img src="images/captcha.jpg" width="120" height="50" /></label></td>
							<td width="100%">
								<input name="verificationcode" type="text" id="verificationcode" style="width:120px; height:35px; text-align:center; text-transform:lowercase; font-weight: bold; font-size: 24px; padding-top: 10px;" maxlength="5" />
							</td>
						</tr>
					</table>
				</td>
			</tr>			 
			 <tr>
				<td></td>
				<td align="left"><input type="checkbox" checked="checked" id="newsletterSignup" name="newsletterSignup" class="auto" /> <label for="newsletterSignup">Sign up for our newsletter</label></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" class="auto submit" /></td>
			</tr>
			<tr>
				<td colspan="2" align="left"><input type="submit" value="Submit" class="button" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Submit" class="button" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Submit" class="button" /></td>
			</tr>
		</table>
	</fieldset>
</form>