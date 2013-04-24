<form action="" method="post" class="form_parties">
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
            <td align="left"><label for="month">*Date:</label></td>
            <td>
				<select name="bmonth" id="month" style="width:150px;">
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
                <label for="day">Day:</label>
                <input style="width:25px;" type="text" id="day" name="bday" value="" />
                <label for="year">Year:</label>
                <input style="width:40px;" type="text" id="year" name="byear" value="" />
            </td>
        </tr>        
        <tr>
            <td align="left"><label for="stime">*Time:</label></td>
            <td>
                <select name="stime" id="stime" style="width:150px;">
                    <option value="">Start Time</option>                      			
                    <?php
						for ($i = 0; $i < 24; $i++) {
							$time = date("g A", mktime($i, 0, 0, 1, 1, 2000));
					?>
						<option value="<?= $time ?>"<?= $time == $stime ? " selected=\"selected\"" : "" ?>><?= $time ?></option>
					<?php
						}
					?>
                </select> 
                to
                <select name="etime" id="etime" style="width:150px;">
                    <option value="">End Time</option>                      			
                    <?php
						for ($i = 0; $i < 24; $i++) {
							$time = date("g A", mktime( $i, 0, 0, 1, 1, 2000));
					?>
						<option value="<?= $time ?>"<?= $time == $etime ? " selected=\"selected\"" : "" ?>><?= $time ?></option>
					<?php
						}
					?>
                </select>
            </td>
		</tr>
        <tr>
			<td colspan="2">
				<table cellpadding="0">
					<tr>
						<td align="left" width="130"><label for="guests">*Number of Guests:</label></td>
			            <td><input type="text" id="guests" name="guests" value="" style="width:50px;" /></td>
					</tr>
				</table>
			</td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="comments">Comments And Questions:</label><br />
                <textarea name="comments" id="comments" rows="10" cols="10"></textarea>
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