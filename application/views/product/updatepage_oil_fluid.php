<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("Product_Controller/do_update_oil_fluid/").$item['OilandFluidID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['OilandFluidName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['OilandFluidPrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['OilandFluidDesc']?>"><br>

<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>