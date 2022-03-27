<?php
    include("LearningStep.php");
    $ls = new LearningStep();
    $find = $ls->getall();
    $resultCount = mysqli_num_rows($find);
    while($row = mysqli_fetch_assoc($find)){
        echo "{$row['id']} |{$row['topic']} | {$row['is_learned']}  <a href='delete_learning_step.php?id={$row['id']}'> X </a><br>";
    }
    echo "<br><a href = 'add_learning_step.php'>Add to list.</a>"
?>