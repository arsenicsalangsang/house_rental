<?php include('db_connect.php');?>

<h2 class = "title-earnings">Receipts</h2>

<div class = "wrapper-receipt">
	<div class = "wrapper-box">
		<div class = "wrapper-box1">
			<p class = "title-wrapperbox">Select Apartment</p>
			<p class = "wrapper-box1-description">Select apartment or tenant<br> and check previous transaction</p>
			<p class = "title-button">Select Apartment</p>
			<?php
				$category_query = $conn->query("SELECT DISTINCT category_id FROM houses");
				while ($category_row = $category_query->fetch_assoc()) {
					$category_id = $category_row['category_id'];
					?>
					<button class="box-options">
						 <?php echo $category_id; ?>
					</button>
					<?php
				}
			?>
			<p class = "title-button1">Select Tenant</p>
			<?php
			$tenant_query = $conn->query("SELECT * FROM tenants");
			while ($tenant_row = $tenant_query->fetch_assoc()) {
				$fullname = $tenant_row['firstname'] . " " . $tenant_row['middlename'] . " " . $tenant_row['lastname'];
				?>
				<button class="box-options1">
					<?php echo $fullname; ?>
				</button>
				<?php
			}
			?>
			<button type="submit" id="generatebtn">Generate Receipts</button>
		</div>
		<div class = "wrapper-box2">
			<div class = "wrapper-box2-content">
				<p class = "title-wrapperbox2">You Selected</p>
				<div class = "profilepic-earning"></div>
                <div class = "tenant-apartment">Apt 103</div>
                <div class = "tenant-name">MJ Sanggalak</div>
			</div>
		</div>
	</div>
</div>

<div class = "details">
	<p class = "details-title"> Generate Receipt Details </p>
	<p class = "details-description">Fill in payment details</p>
	<form id = "input-form-receipt">
		<div>
			<h4 class = "title-input-receipt">Payment Type</h4>
			<input type="text" name="payment" placeholder="Enter your email" class="custom-input-receipt">
		</div>
		<div>
			<h4 class = "title-input-receipt">First Payment Amount</h4>
			<input type="text" name="paymentamount" placeholder="Enter amount" class="custom-input-receipt">
		</div>
		<div>
			<h4 class = "title-input-receipt">Payment Date</h4>
			<input type="text" name="paymentdate" placeholder="Select Date" class="custom-input-receipt">
		</div>
		<div>
			<h4 class = "title-input-receipt">Payment Time</h4>
			<input type="text" name="paymenttime" placeholder="Select Time" class="custom-input-receipt">
		</div>
		<div>
			<h4 class = "title-input-receipt">Optional Notes</h4>
			<input type="text" name="notes" class="custom-input-receipt">
		</div>
		<div class="button-container-receipt">
			<button type="button" id="receipt-confirmbtn">Confirm</button>
			<button type="submit" id="receipt-submitbtn">Submit</button>
		</div>
	</form>
</div>