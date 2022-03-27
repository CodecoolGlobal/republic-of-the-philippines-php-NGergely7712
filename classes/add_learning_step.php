<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to db</title>
</head>
<body>
    <p>Add to database</p>
    <form action="add_learning_action.php" method="post">
    <div>
        <label for="topic">Learned topic: </label>
        <input id="topic" name="topic" type ="text"/>
        <br>
        <label for="is_learned">Finished Learning </label>
        <input id="is_learned" name="is_learned" type="checkbox" value="off"/>
        <br>
    </div>
    <button type="submit" name ="submit">Submit</button>
</form>
</body>
</html>