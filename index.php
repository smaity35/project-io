<?php include('header.php');?>

	<section class="dashboard-wrap">
		<div class="container">
			<div class="dashboard-heading">
				<h2>Dashboard</h2>
				<a href="profile-page.php">Edit Profile</a>
			</div>
			<hr>
			<div class="row">
				
				
				<div class="col-md-6">
					<h4>Create a project</h4>
					<table class="form-table">
						<tr>
							<td><label>Upload File</label></td>
							<td><input type="file" name=""></td>
						</tr>
						<tr>
							<td><label>Title</label></td>
							<td><input type="text" name=""></td>
						</tr>
						<tr>
							<td><label>Description</label></td>
							<td><textarea></textarea></td>
						</tr>
						<tr>
							<td><label>Price</label></td>
							<td><input type="text" placeholder="$100"></td>
						</tr>
						<tr>
							<td></td>
							<td><button>Submit</button></td>
						</tr>
					</table>
				</div>

				<div class="col-md-6">
					<h3 class="red">Target Price: <b>$500</b></h3>
					<h3 class="green">Earned Price: <b>$100</b></h3>
					<div id="donutchart" style="width:100%; height: 500px; margin-top: -80px;"></div>
				</div>
			</div>


			<hr>
			<div class="table-responsive">
			<table class="table table-hover list-table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Title</th>
						<th>Description</th>
						<th>Price</th>
						<th>Video URL</th>
					</tr>
				</thead>
				<tbody>
					<?php
	                      for($i=1; $i<=10; $i++){
	                  ?>
					<tr>
						<td>25/03/2019</td>
						<td>MyList01</td>
						<td><p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
						</p></td>
						<td>$200</td>
						<td><a href="">http://example.com/testvideo.mp4</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
			
		</div>
	</section>

<?php include('footer.php');?>


