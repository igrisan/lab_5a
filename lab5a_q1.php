<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        td:first-child {
            font-weight: bold;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <?php
    $name = "Muhammad Ashraff Bin Azhan";
    $matricno = "AI220353";
    $course = "Software Engineering";
    $studyyear = "Year 3";
    $address = "No 21 Jalan Universiti 14, Parit Raja";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricno; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $studyyear; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
