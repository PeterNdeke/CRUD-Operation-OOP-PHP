<?php

require_once ("class.crud.php");


$obj = new crud();


if(isset($_GET['delete_id']))
{
 $ID=$_GET['delete_id'];
 if ($obj->deleteData($ID))
     
     {
     	?>
                <script>
				alert('Record Successfully Deleted ...');
				window.location.href='index.php';
				</script>
                <?php
			}
			
     }


