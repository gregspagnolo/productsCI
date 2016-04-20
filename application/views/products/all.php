<html>
<head>
	<title>Showing All Products</title>
</head>
<body>
	
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php foreach ($results as $result):?>
			<tr>
				<td><?= $result['name'] ?> </td>
				<td><?= $result['description'] ?> </td>
				<td><?= $result['price'] ?> </td>
				<td><a href="/Products/show/<?php echo $result['id']; ?>">Show</a></td>
				<td><a href="/Products/edit/<?php echo $result['id']; ?>">Edit</a></td>
				<td><a href="/Products/destroy/<?php echo $result['id']; ?>">Delete</a></td>

			</tr>
		<?php endforeach; ?>









	</table>

</body>
</html>