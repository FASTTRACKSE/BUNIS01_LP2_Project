<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url("AdminController/do_update_carparts/").$item['CarPartsID']; ?>" method="POST">
Name: <input type="text" name="name" value="<?=$item['CarPartsName']?>" ><br>
Price: <input type="text" name="price"  value="<?=$item['CarPartsPrice']?>"><br>
Description: <input type="text" name="desc"  value="<?=$item['CarPartsDesc']?>"><br>
Image: <input type="text" name="image"  value="<?=$item['CarPartsImage']?>"><br>
<input type="submit" value="Update">
 
</table>
</form>
</body>
</html>