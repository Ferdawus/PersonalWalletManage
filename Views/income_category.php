<form action="Controller/IncomeCategory.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Income Category" required>
		<input type="submit" name="submit" value="Add Income Category">
</form>
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include('../Model/IncomeCategory.php');
			$show = new IncomeCategorytAll();
			$row = $show->getAll();
			
		?>
		<tr>
			
			<td></td>
		</tr>
	</tbody>
</table>