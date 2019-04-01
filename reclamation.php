 <?PHP
include "../Core/reclamations.php";
$recl=new reclamations();
$info=$recl->afficherreclamtion();


?>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="css/util_tabl.css">
	<link rel="stylesheet" type="text/css" href="css/main_tabl.css">
<!--===============================================================================================-->
</head>
<body>
	
	
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column2">ID</th>
									<th class="cell100 column2">ETAT</th>
									<th class="cell100 column2">NOM</th>
									<th class="cell100 column3">EMAIL</th>
									<th class="cell100 column2">Sujet</th>
									<th class="cell100 column3">Message</th>
								</tr>
							</thead>
						</table>
					</div>
 <?PHP
foreach($info as $row){

  ?> 
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column2"><?PHP echo $row['ID']; ?></td>
									<td class="cell100 column2"><?PHP echo $row['ETAT']; ?></td>
									<td class="cell100 column2"><?PHP echo $row['nom']; ?></td>
									<td class="cell100 column3"><?PHP echo $row['email']; ?></td>
									<td class="cell100 column2"><?PHP echo $row['sujet']; ?></td>
									<td class="cell100 column3"><?PHP echo $row['message']; ?></td>
								</tr>

								
							</tbody>

                                        <?PHP
                                       }
                                       ?>
						</table>
				
				
			

					</div>
				</div>
			</div>
	


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>