<?php 

include "database.php";

$dc= $db -> prepare("SELECT * FROM persons");
$dc -> execute();
$print = $dc -> fetchAll(PDO::FETCH_ASSOC);
					$adet=0;
					foreach ($print as $row) {
							$adet++;
						echo"
					<tr>
						<th>".$adet."</th>
						<td>".$row['Id']."</td>
						<td>".$row['Name']."</td>
						<td>".$row['Surname']."</td>
						<td>".$row['PhoneNumber']."</td>
						<td>".$row['HomeNumber']."</td>
					</tr>
						";}

					

?>