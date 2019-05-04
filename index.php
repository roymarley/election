<!DOCTYPE html>
<html>
<head>
	<title>Presidential Election : Towards Mass Extincion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	
	<h1 align="center">Presidential Election : Towards Mass Extincion</h5>
		<div class="table-responsive">
			<table class="table-bordered" align="center"><div class="tbpadding">
				<?php 
				include "koneksi.php";
				$query_mysql = mysql_query("SELECT * FROM candidates");
				while ($data = mysql_fetch_array($query_mysql)) {
					?>

					<tr align="center">
						<td><?php echo ucfirst($data['name']); ?></td>
						<td rowspan="2"><a href="voteadd.php?id=<?php echo $data['id']; ?>">tombol add</a></td>
					</tr>
					<tr align="center">
						<td><?php echo ucfirst($data['earned_vote']); ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

</body>
</html>