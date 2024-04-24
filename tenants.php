<?php include('db_connect.php');?>

<h2 class = "title-earnings">Earnings</h2>
<div class = "two-box">
	<div class = "box-one">
		<div class = "content-text">You made <br> ₱**,***.** <br> in February</div>
	</div>
	<div class = "box-two">
		<div class = "content-text">Projected to make <br> ₱**,***.** <br> in March</div>
	</div>
</div>

<div class = "data-card-earnings">
    <div class = "card-data">
        <p class = "title-card">Occupany Rate</p>
        <p class = "data-analytic"> data </p>
        <p class = "data-analytic-2"> data </p>
    </div>
    <div class = "card-data">
        <p class = "title-card">Last Month's Totals</p>
        <p class = "data-analytic"> data </p>
        <p class = "data-analytic-2"> data </p>
    </div>
    <div class = "card-data">
        <p class = "title-card">Previous Six (6) Month's Totals</p>
        <p class = "data-analytic"> data </p>
        <p class = "data-analytic-2"> data </p>
    </div>
</div>

<div class = "wrapper">
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
					<div class="box-options">
						 <?php echo $category_id; ?>
					</div>
					<?php
				}
			?>
			<p class = "title-button1">Select Tenant</p>
			<?php
			$tenant_query = $conn->query("SELECT * FROM tenants");
			while ($tenant_row = $tenant_query->fetch_assoc()) {
				$fullname = $tenant_row['firstname'] . " " . $tenant_row['middlename'] . " " . $tenant_row['lastname'];
				?>
				<div class="box-options1">
					<?php echo $fullname; ?>
				</div>
				<?php
			}
			?>
			<button type="submit" id="transactionbtn">Transactions</button>
		</div>
		<div class = "wrapper-box2">
			<div class = "wrapper-text">You received <br> ₱**,***.** <br> from this apartment's previous payment</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {

		$('#transactionbtn').click(function() {
                window.location.href = 'earningtransaction.php';
        });
	});
</script>