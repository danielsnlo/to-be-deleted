<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
</head>
<body>
    <h1>My Portfolio</h1>

    <hr>
    <hr>

    <h2>Army Enlistment - WE CHOOSE YOU!</h2>
    <img src="img/army-enlistment.jpg" alt="Table Tennis" width="420" height="210">
    <p><em>Website to form: <a href="https://en.wikipedia.org/wiki/Table_tennis" target="_blank">FORM</em></a></p>

    <?php
        $names = [
            1 => ['name' => 'Janis', 'email' => 'janis@fakemail.com'],
            2 => ['name' => 'Antra', 'email' => 'antra@fakemail.com'],
            3 => ['name' => 'Saule', 'email' => 'saule@fakemail.com']
        ];

        echo "<ul>";
        foreach ($name as $name) {
            // echo "<li>{$name['email']}</li>";
            echo "<li>Name: " . $name['name'] . ", Email: " . $name['email'] </li>";
        }
        echo "<ul>";
    ?>    
        <a href="/contact.html">Sazinies ar mani</a>
</body>
</html>