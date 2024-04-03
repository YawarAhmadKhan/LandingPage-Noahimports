<table class="pricing-table">
   
						<tr>
                             <!-- Table ratecolumn -->
    <?php
    $sql = "SELECT * FROM ratescolumn";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     $col1 = $row['col1'];
     $col2 = $row['col2'];
     $col3 = $row['col3'];


     ?>
							<th><?php echo $col1;?> </th>
							<th><?php echo $col2;?> </th>
							<th><?php echo $col3;?> </th>

              

     <?php

}
} else {
  echo "0 results";
}
?>
							
						</tr>

                        <?php
    $sql = "SELECT * FROM ratesrows";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
     
     ?>
			<tr>
							<td><?php echo $row['col1'];?></td>

							<td><?php echo $row['col2'];?></td>
							<td><?php echo $row['col3'];?></td>
						</tr>				

     <?php

}
} else {
  echo "0 results";
}
?>
						
					
					</table>