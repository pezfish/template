<form action="" method="post" class="form_newsletter">
	<table cellpadding="5">
		<tr>
			<td><label for="fullname">Name:</label></td>
			<td width="100%"><input type="text" name="fullname" id="fullname" value="" /></td>
		</tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" id="email" value="" /></td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" id="phone" name="phone" value="" /></td>
        </tr>
        <tr>
            <td align="left"><label for="bmonth">Birthday:</label></td>
            <td>
				<select name="bmonth" id="bmonth" style="width:150px;">
                    <option value="0" selected="selected">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
            	</select>
                <label for="bday">Day:</label>
                <input style="width:25px;" type="text" id="bday" name="bday" value="" />
                <label for="byear">Year:</label>
                <input style="width:40px;" type="text" id="byear" name="byear" value="" />
            </td>
        </tr>        
        <tr>
            <td colspan="2">
                <label>Verification Code, Please enter the text below.</label><br />
                <table>
                    <tr>
                        <td width="125"><label for="verificationcode"><img src="images/captcha.jpg" width="120" height="50" /></label></td>
                        <td>
                            <input name="verificationcode" type="text" id="verificationcode" class="captcha" style="" maxlength="5" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>	
		<tr>
			<td colspan="2" align="left"><input type="submit" name="proc" value="Submit" class="button" /></td>
		</tr>
	</table>
</form>