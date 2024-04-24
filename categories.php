<?php include('db_connect.php');?>

<div class = "apartment-banner">
	<div class = "apartment-content">
		<div class = "profilepic"></div>
		<div class = "account-name"><?php echo $_SESSION['login_name']?></div>
		<div class = "account-status">Landlord</div>
	</div>
</div>

<div class="col-md-8 table-style">
	<div class="card">
		<div class="card-header">
			<b>House List</b>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">House</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					$house = $conn->query("SELECT h.*,c.name as cname FROM houses h inner join categories c on c.id = h.category_id order by id asc");
					while($row=$house->fetch_assoc()):
					?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td class="">
							<p>House #: <b><?php echo $row['house_no'] ?></b></p>
							<p><small>House Type: <b><?php echo $row['cname'] ?></b></small></p>
							<p><small>Description: <b><?php echo $row['description'] ?></b></small></p>
							<p><small>Price: <b><?php echo number_format($row['price'],2) ?></b></small></p>
						</td>
						<td class="text-center">
							<button class="edit_house" type="button" data-id="<?php echo $row['id'] ?>"  data-house_no="<?php echo $row['house_no'] ?>" data-description="<?php echo $row['description'] ?>" data-category_id="<?php echo $row['category_id'] ?>" data-price="<?php echo $row['price'] ?>" >Edit</button>
							<button class="delete_house" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
						</td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class = "wrapper-apartment">
	<div class = "content1">
		<h2 id = "title-apartment"> Add New Apartment </h2>
	
		<form class = "input-form-apartment">

			<div>
				<h4 class = "title-input-apartment">Lot</h4>
				<input type="text" name="Category" placeholder="Create or select lot" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Apartment Name</h4>
				<input type="text" name="ApartmentName" placeholder="Enter Apartment Name" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Rent Rate</h4>
				<input type="text" name="RentRate" placeholder="Rent Rate" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Optional: Size </h4>
				<input type="text" name="apartmentsize" placeholder="Enter size in sq. meters" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Address </h4>
				<input type="text" name="apartmentaddress" placeholder="Enter address of apartment" class="custom-input-apartment">
			</div>
			<button type="submit" id="addapartmentbtn">Add</button>
		</form>
	</div>
</div>

<div class = "summary-data">
	<p class = "summary-title">Summary</p>
</div>