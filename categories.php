<?php include('db_connect.php');?>

<div class = "apartment-banner">
	<div class = "apartment-content">
		<div class = "profilepic"></div>
		<div class = "account-name"><?php echo $_SESSION['login_name']?></div>
		<div class = "account-status">Landlord</div>
	</div>
</div>

<div class="container-fluid font-style move1">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Apartment List</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Apartment</th>
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
										<p>Apartment #: <?php echo $row['house_no'] ?> <b></b></p>
										<p><small>Lot: </b></small></p>
										<p><small>Rent Rate: <b><?php echo number_format($row['price'],2) ?></b></small></p>
										<p><small>Size: </b></small></p>
										<p><small>Address: </b></small></p>
									</td>
									<td class="text-center">
										<button class="edit_tenant" type="button" data-id="<?php echo $row['id'] ?>"  data-house_no="<?php echo $row['house_no'] ?>" data-description="<?php echo $row['description'] ?>" data-category_id="<?php echo $row['category_id'] ?>" data-price="<?php echo $row['price'] ?>" >Edit</button>
										<button class="delete_tenant" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
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
				<h4 class = "title-input-apartment">Apartment Number</h4>
				<input type="number" name="ApartmentNum" placeholder="Enter Apartment Number" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Rent Rate</h4>
				<input type="number" name="RentRate" placeholder="Rent Rate" class="custom-input-apartment">
			</div>
			<div>
				<h4 class = "title-input-apartment">Optional: Size </h4>
				<input type="text" name="apartmentsize" placeholder="Enter size in sq meters" class="custom-input-apartment">
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
	<div class = "data-card-apartment">
		<div class = "card-data-apartment">
			<p class = "title-card">Monthly Earnings</p>
			<p class = "data-analytic"> data </p>
			<p class = "data-analytic-2"> data </p>
		</div>
		<div class = "card-data-apartment">
			<p class = "title-card">Daily Earnings</p>
			<p class = "data-analytic"> data </p>
			<p class = "data-analytic-2"> data </p>
		</div>
	</div>
</div>

<style>
	td{
		vertical-align: middle !important;
	}
	td p {
		margin: unset;
		padding: unset;
		line-height: 1em;
	}
</style>
<script>
	$('#manage-house').on('reset',function(e){
		$('#msg').html('')
	})
	$('#manage-house').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_house',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					$('#msg').html('<div class="alert alert-danger">House number already exist.</div>')
					end_load()
				}
			}
		})
	})
	$('.edit_house').click(function(){
		start_load()
		var cat = $('#manage-house')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='house_no']").val($(this).attr('data-house_no'))
		cat.find("[name='description']").val($(this).attr('data-description'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		cat.find("[name='category_id']").val($(this).attr('data-category_id'))
		end_load()
	})
	$('.delete_house').click(function(){
		_conf("Are you sure to delete this house?","delete_house",[$(this).attr('data-id')])
	})
	function delete_house($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_house',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>