<?php

require 'Form.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Back-end Test</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <div>
        <form class='form' action="#" method="post">
            <div class='formInput'>
                <label>Nom</label>
                <input type='text' name='name' value="<?=$name;?>" required>
            </div>
            <div class='formInput'>
                <label>Revenu de l'année passée en €</label>
                <input type='number' name='revenu' value="<?=$revenu;?>"required>
            </div>
            <div class='formInput'>
                <label>Travaux engagés dans l'année en €</label>
                <input type='number' name='work' value="<?=$work;?>"required>
            </div>
            <div class='formInput'>
                <label>Dons et mécénas réalisés en €</label>
                <input type='number' name='don' value="<?=$don;?>"required>
            </div>
            <button type="submit" name="button" value="button">Calculez</button>
        </form>
    </div>
</body>

</html>
