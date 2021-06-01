<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Students</title>
        <link rel="stylesheet" href="view/css/style.css">
    </head>
    <body>
        <h2>Students</h2>
        <table style="width: 100% border: 1px solid black">
                <tr>
                    <th>Class</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Average of assignments</th>
                    <th>Date of data formation</th>
                </tr>
                <?php foreach($students as $key => $studentData):?>
                <tr>
                    <td><?=$studentData['class'];?></td>
                    <td><?=$studentData['id'];?></td>
                    <td><?=$studentData['name'];?></td>
                    <td><?=$studentData['lastname'];?></td>
                <?php
                    $sum = 0;
                    $count = 0;
                    foreach($studentData['assignments'] as $assignments => $assignmentsValues)
                    {
                        $sum +=$assignmentsValues;
                        $count++;
                    }
                ?>
                    <td><?=round($sum/$count, 2);?></td>
                    <td><?=$studentData['date'];?></td>
                </tr>
                <?php endforeach;?>
            </table>
    </body>
</html>