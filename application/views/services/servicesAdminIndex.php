<html lang="vi">


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      
      <div class = "test_table">
		<table class = "bordered" border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Tag</th>
				<th>Picture</th>
				<th>Action</th>
			</tr>
		<?php
			foreach($getDataPagination as $row){
		?>	
				<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td><?php echo $row['tag']; ?></td>
					<td><?php echo $row['picture']; ?></td>
					<td><a href="<?php echo base_url() ?>ServicesAdminController/toUpdate/<?php echo($row['ID']);?>">Update</a>
					<a href="<?php echo base_url() ?>ServicesAdminController/toDelete/<?php echo($row['ID']); ?>"> Delete</a></td>
				</tr>
		<?php
			}
		?>
		</table>
		<?php echo $this->pagination->create_links(); ?>

		<br>
		<br>
		<a href="<?php echo base_url() ?>ServicesAdminController/register">Add new service</a>
	</div>

    </div>
    <!-- /.container-fluid-->
    
</body>

</html>