<?php
    include("LearningStep.php");
    $Ls = new LearningStep();
    $Ls->delete($_GET['id']);
    header("Location: /republic-of-the-philippines-php-NGergely7712/classes/index.php");
?>