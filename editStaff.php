<?php

	require_once("class.crud.php");
	
        $obj = new crud();
     
	
	
	
        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$ID = $_GET['edit_id'];
		$show= $obj->ShowStaffdetails($ID);
	}
      
        
       // $error = false;

	if ( isset($_POST['submit']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$profession = trim($_POST['job']);
                $organization = trim($_POST['organization']);
                $salary = trim($_POST['salary']);
                $ID = trim($_POST['id']);
		
             
                 $updateStaff = $obj->updateData($name, $profession, $organization, $salary, $ID);
                  if ($updateStaff) {
				$errTyp = "success";
				$errMSG = "Merchant Successfully Updated";
                                header("location:index.php");
                                
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	  
                    
                    
                }
        
        
?>



   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>crud</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" >Home </a>
            <a class="navbar-brand" href="v_addStaff.php">Add Staff</a>
            
        </div>
 
    </div>
</div>

<div class="container">


	
<?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
	

<form method="post"  class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
            <input type="text" hidden="hidden" name="id" value="<?php echo $show['ID'] ?>">
    <tr>
    	<td><label class="control-label">Name.</label></td>
        <td><input class="form-control" type="text" name="name" value="<?php echo $show['name'] ?>" /></td>
         
    </tr>
    
    <tr>
    	<td><label class="control-label">Profession.</label></td>
        <td><input class="form-control" type="text" name="job" value="<?php echo $show['profession'] ?>" /></td>
         
    </tr>
    <tr>
    	<td><label class="control-label">Organization.</label></td>
        <td><input class="form-control" type="text" name="organization" value="<?php echo $show['organization'] ?>"  /></td>
        
    </tr>
      <tr>
    	<td><label class="control-label">Salary.</label></td>
        <td><input class="form-control" type="text" name="salary" value="<?php echo $show['salary'] ?>"  /></td>
         
    </tr>
    
    
    
    <tr>
        <td colspan="2"><button type="submit" name="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Update
        </button>
        </td>
    </tr>
    
    </table>
    
</form>





    

</div>



	


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
