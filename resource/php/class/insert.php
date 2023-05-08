<?php
class insert extends config{
  public $task;
  public $id;

  public function __construct($task=null,$id=null){
    $this->task= $task;
    $this->id= $id;
  }
  public function insertTask(){
    $con = $this->con();                                                        //Get Connection
    $sql = "INSERT INTO `tbl_status` (`comment`,`postedby`) VALUES ('$this->task','$this->id')";        //Query
    $data = $con->prepare($sql);                                                //Convert query to command
    if($data->execute()){                                                       //Execute command
      return true;
    }else{
      return false;
    }
  }
}

?>
