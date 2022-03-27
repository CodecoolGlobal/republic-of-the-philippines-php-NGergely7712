<?php
    include("LearningStep.php");
    $topic = null;
    $is_learned = 0;
    if(isset($_POST['submit'])){
        $topic = $_POST['topic'];     
    }
    if(isset($_POST['is_learned'])){
        $is_learned = TRUE;
    }
    if($topic!=null){
        $db = new LearningStep();
        $arr = array();
        array_push($arr,$topic,$is_learned);

        foreach($arr as $a){
            echo "{$a} ";
        }
        $newid = $db->save($arr);
        echo $newid;
        header("Location: /republic-of-the-philippines-php-NGergely7712/classes/index.php");
    }
?>