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
    <div class="titleDiv">
            <h1>Calculez vos impôts gratuitement</h3>
    </div>

    <div class="container">
        <form class='form'action='<?= $_SERVER['PHP_SELF']; ?>' method="post" class="form">

            <div class='formInput'>
                <label>Nom :</label>
                <input type='text' name='name' placeholder="Veuillez renseigner votre identité" required>
            </div>
            <div class='formInput'>
                <label>Revenu de l'année passée en € :</label>
                <input type='text' id="revenu" step="1.0" name='revenu' placeholder="...€" required>
            </div>
            <div class='formInput'>
                <label>Travaux engagés dans l'année en € :</label>
                <input type='text' id="work"  step="1.0" name='work' placeholder="...€" required>
            </div>
            <div class='formInput'>
                <label>Dons et mécénas réalisés en €</label>
                <input type='text' id="don" step="1.0" name='don' placeholder="...€" required>
            </div>
            <div >
                <button type="submit" name="button" class='subButton'>Calculez</button>
            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    //     $(function() {
	// 	$('.subButton').click(function() {
	// 		//show it's saving
    //         $(this).after( imgs.load );

	// 	var imgs = {
	// 		'load': $('<img id="load" src="loading.gif" />')
	// 	};
	// });
    </script>
</body>

</html>
