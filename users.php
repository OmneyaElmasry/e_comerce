<?php 
include "include/header.php";
include "include/sidebar.php";

?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div>
		<div class="row">
	    <div class="col-lg-12">
		<h1 class="page-heCLKSO.NET/Zader">Users</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<?php 
	         if(!isset($_GET['action'])){
				include 'desing/userview.php';
			 }elseif($_GET['action']=='add'){
				include 'desing/adduserview.php';
			 }elseif($_GET['action']=='edit'){
				include "desing/edituserview.php";
			 }
				?>
   
        </div>
      </div>
	</div>	<!--/.main-->
	
	<?php 
	include "include/footer.php";
	?>