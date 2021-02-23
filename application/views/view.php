<!DOCTYPE HTML>

<html>
<head>
	<title>VIEW </title>
	<style>
		table,tr,td,th
		{
			/*border:2px solid;*/
			border-collapse: collapse;
			padding: 10px;
			margin: 80px;
			margin-right: 100px;
			background-color: rgba(0,0,0,0.4);
			color: white;

		}
	</style>
</head>
<body>
<table>
			<tr>
				<th>FIRST NAME</th><th>LAST NAME</th><th>USER NAME</th>
				<th>PHONE</th><th>EMAIL</th><th colspan="2">ACTION</th>
			</tr>
			<?php
				if($n->num_rows()>0)
				{
					foreach($n->result() as $row)
					{
				?>
			<tr>
				<td><?php echo $row->fname; ?></td>
				<td><?php echo $row->lname; ?></td>
				<td><?php echo $row->uname; ?></td>
				<td><?php echo $row->phone; ?></td>
				<td><?php echo $row->email; ?></td> 
				
				<?php
				if($row->status==1)
				{
					?>
					<td>Approved</td>
					<td><a href="<?php echo base_url()?>main/reject1/<?php echo $row->id;?>">Reject</a></td>

					<?php
				}
				elseif($row->status==2)
				{
					?>
				<td>Rejected</td>
				<td><a href="<?php echo base_url()?>main/approve1/<?php echo $row->id;?>">Approve</a></td>
				<?php
			}
			else
			{
				?>
				<td><a href="<?php echo base_url()?>main/approve1/<?php echo $row->id;?>">Approve</a></td>
				<td><a href="<?php echo base_url()?>main/reject1/<?php echo $row->id;?>">Reject</a></td>
				<?php
			}
			?>

			</tr>
			<?php
		}
	}
	?>
		</table>
	</form>
</body>
</html>

</body>
</html>