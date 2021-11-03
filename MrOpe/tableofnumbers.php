<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid red;
            padding: 10px;
        }

        table {
            width: 10%;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i <= 10; $i++) { ?>
        <table id="table">
            <tr>
                <td><?php echo $i; ?></td>
            </tr>
        </table>
        <?php } ?>
</body>

</html>