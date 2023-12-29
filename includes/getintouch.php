<div class="touch-section">
					<div class="container">
						<h3>get in touch</h3>
						<div class="touch-grids">
							<?php
$sql="SELECT * from tblpage where PageType='contactus'";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<div class="col-md-4 touch-grid">
								<h4>Address</h4>
								<h5><?php  echo htmlentities($row->PageDescription);?></h5>
								
							</div>
							<div class="col-md-4 touch-grid">
								<h4>Telephone</h4>
								<!-- <h5>Sales Enquiries</h5> -->
								<h5>Telephone : +<?php  echo htmlentities($row->MobileNumber);?></h5>
								
							</div> 
							<!-- <?php $cnt=$cnt+1;}} ?> -->
							<div class="col-md-4 touch-grid">
								<?php
// $sql="SELECT * from tblpage where PageType='aboutus'";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<h4>Email</h4>
							<h5><?php  echo htmlentities($row->Email);?></h5>
							</div><?php $cnt=$cnt+1;}} ?>
							<div class="clearfix"></div>
						</div>
					</div>
					</div>
				<!--GET IN TOUCH-->