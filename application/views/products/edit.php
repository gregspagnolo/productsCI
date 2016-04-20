<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<h1>Edit Product <?php echo $edit['id'] ?></h1>
   <form action="/Products/update/<?php echo $edit['id'];?>" method="post">
	  	Name:<input type="text" name="name" value=" <?php echo $edit['name']; ?>"><br>
	  	Description:<input type="text" name="description" value="<?php echo $edit['description']; ?>"><br>
	  	Price:<input type="text" name="price" value="<?php echo $edit['price'];?>"><br>
	  	<input type="submit" value="Update">
  </form>	

</body>
</html>