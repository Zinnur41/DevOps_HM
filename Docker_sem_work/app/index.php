<?php require_once 'operations/getNotes.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form{
            padding: 10px;
            margin: 10px;
        }
        .container {
            border: solid aqua 2px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Добавление заметок</h1>
    <form class="form" action="operations/writeNote.php" method="post">
        <input type="text" name="note" placeholder="Напишите заметку">
        <input type="submit" value="Добавить">
    </form>

    <h2>Заметки</h2>
    <div class="container">
        <p><?php getAllNotes() ?></p>
    </div>
</body>
</html>
