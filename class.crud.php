<?php

require_once 'dbconnect.php';
class crud 
{
    private $conn;
    public function __construct()
	{
		$database = new Database();
               
		$db = $database->dbConnection();
		$this->conn = $db;
    }
    
    
    public function Showstaff()
            {
        
 try {
    $stmt = $this->conn->prepare("SELECT * FROM crud  order by ID DESC"); 
    $stmt->execute();
    return $stmt;
   
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
        
            }// ends here
          

public function insertData($name,$profession,$organization,$salary)
     {
   
    try
          {
                
                $stmt = $this->conn->prepare("INSERT INTO crud(name,profession,organization,salary,created_at) 
                 VALUES(:name,:profession, :organization,:salary,NOW())");
               									  
                $stmt->bindparam(":name", $name);
                $stmt->bindparam(":profession", $profession);
                $stmt->bindparam(":organization", $organization);	
                $stmt->bindparam(":salary", $salary);									  
               
                $stmt->execute();	

                return $stmt;
                
          }
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
      
	
       
		
	}
    
    
     public function deleteData($ID)//method that deletes post
 {
        $sql = "DELETE FROM crud WHERE ID='$ID'";
        $this->conn->exec($sql);
        if($this->conn)
            {
            return TRUE;
        } else {
            return FALSE;
        }
       
 }
    
    
 public function updateData($name,$profession,$organization,$salary,$ID)
     {
       try  
		{
			$stmt = $this->conn->prepare('UPDATE crud SET name=:name,profession =:profession,organization=:organization,salary=:salary,created_at=NOW() WHERE ID=:ID');
			$stmt->bindparam(":ID", $ID);									  
                        $stmt->bindparam(":name", $name);
                        $stmt->bindparam(":profession", $profession);
                        $stmt->bindparam(":organization", $organization);	
                        $stmt->bindparam(":salary", $salary);									  
			$stmt->execute();
			return $stmt;	
			
		}
                catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}
        
         public function ShowStaffdetails($ID)
            {
        
        try {
            $stmt = $this->conn->prepare("SELECT * FROM crud where ID =:ID"); 
            $stmt->execute(array(':ID'=>$ID));
            $show =$stmt->fetch(PDO::FETCH_ASSOC);
            
            return $show;
   
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
            }
      
          
          
           
    
}
        
                