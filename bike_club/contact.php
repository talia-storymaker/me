<?php $pagetitle = 'Contact'; include $_SERVER['DOCUMENT_ROOT'] . 'bike_club/top.php'; ?>
	<main>
		<h2>Contact Us</h2>
		<form>
			<div>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required="required">
			</div><br>
			<div>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required="required">
			</div><br>
			<div>
				<label for="reason">Reason:</label>
				<select name="reason" id="reason" required="required">
					<option value=""></option>
					<option value="membership">Membership</option>
					<option value="techsupport">Technical support</option>
					<option value="generalinquiry">General inquiry</option>
					<option value="sponsor">Sponsor</option>
					<option value="other">Other</option>
				</select>
			</div><br>
			<div>
				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="8"></textarea>
			</div><br>
			<button type="submit">Submit</button>
		</form>
	</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . 'bike_club/bottom.php'; ?>
