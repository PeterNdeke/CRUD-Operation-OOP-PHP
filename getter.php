<?php
 
class Person {
    
    //The name of the person.
    private $name;
    
    //The person's date of birth.
    private $dateOfBirth;
    
    //Set the person's name.
    public function setName($name){
        $this->name = $name;
    }
    
    //Set the person's date of birth.
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    
    //Get the person's name.
    public function getName(){
        return $this->name;
    }
    
    //Get the person's date of birth.
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    
}

//Instantiate the Person object.
$person = new Person();
 $name="Wayne";
//Set the name to "Wayne"
//$person->setName('Wayne');
$person->setName($name);
 
//Get the person's name.
$name = $person->getName();
 
//Print it out
echo 'The person name is'.' ' .$name.'<br>';
$dateOfBirth = "12/04/2017";
$person->setDateOfBirth($dateOfBirth);
$dateOfBirth=$person->getDateOfBirth();
echo $name.' '.'Date of birth is'.' '. $dateOfBirth;