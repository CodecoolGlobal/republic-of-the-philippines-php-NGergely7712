<?php   
class LearningStep{

   function save(array $values) : int{
        $conn = new mysqli("localhost", "root", "", "learning_php");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        // Attempt insert query execution
        $sql = "INSERT INTO learning_step (topic, is_learned) VALUES ('{$values[0]}', {$values[1]})";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        $sql = "SELECT MAX(id) FROM learning_step";
        $result = mysqli_query($conn,$sql);
        $id = 0;
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['MAX(id)'];
        }
        $conn->close();
        return $id;
   }
   function find(int $id){
    $conn = new mysqli("localhost", "root", "", "learning_php");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM learning_step WHERE id={$id}";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    return $result -> fetch_array(MYSQLI_ASSOC);
    } else {
    echo "0 results";
    }
    $conn->close();
   }
  function getall(){
    $conn = new mysqli("localhost", "root", "", "learning_php");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM learning_step;";
    $result = mysqli_query($conn,$sql);
    
    if ($result->num_rows > 0) {
    // output data of each row
    $conn->close();
    return $result;
    } else {
    echo "0 results";
    }
    $conn->close();
  }
   function delete($id) : void{
    $conn = new mysqli("localhost", "root", "", "learning_php");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM learning_step WHERE id={$id};";
    mysqli_query($conn,$sql);
    $conn->close();
   }

}
?>