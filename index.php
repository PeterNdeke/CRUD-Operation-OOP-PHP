<?php

	require_once 'class.crud.php';
        $obj= new crud();
        $showStaff= $obj->Showstaff();
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>crud</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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

	

<div class="container">
  <h2>Staff Record</h2>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Profession</th>
        <th>Organization</th>
        <th>Salary</th>
        <th>Action</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
          
            foreach($showStaff as $showStaffs)
            {
?>
                    <tr>
                            <td> <?php echo $showStaffs['name']; ?></td>

                        <td><?php echo $showStaffs['profession']; ?></td>
                            <td><?php echo $showStaffs['organization']; ?></td>

                            <td><?php echo $showStaffs['salary']; ?></td>
                            
                            
                            <td class='text-right' style='text-align:center;'>
                                <a class="btn btn-info" href="editStaff.php?edit_id=<?php echo $showStaffs['ID']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                            </td>
                        
                            <td class='text-right' style='text-align:center;'>
                                <a class="btn btn-danger" href="deleteStaff.php?delete_id=<?php echo $showStaffs['ID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
                           </td>
                        
                    </tr>
<?php }
?>
     
    </tbody>
  </table>
</div>




</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>