<!DOCTYPE html>
<html>
<head>
    <title>Fruits and Vegetables Table</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    $fruits = array("Orange", "Apple", "Avocado", "Mango", "ETC");
    $vegetables = array("Celery", "Broccoli", "Kale", "Carrot", "Tomato", "etc");
    ?>

    <table>
        <tr>
            <th>TYPE OF FOOD</th>
            <th>NAME</th>
        </tr>
        <tr>
            <td>Fruits</td>
            <td><?php echo implode(", ", $fruits); ?></td>
        </tr>
        <tr>
            <td>Vegetables</td>
            <td><?php echo implode(", ", $vegetables); ?></td>
        </tr>
    </table>
</body>
</html>
