
<?php
    require_once('../../models/gradeSearchModel.php');

    $result = getAllGradeShow();
//    var_dump('test');

    //print_r($result);
    echo "<table border=1 align=center>
            <tr>
                <th>Subject Name</th>
                <th>Marks</th>
            </tr>";

    foreach ($result as $key => $value) {
        echo "<tr>
                  <td>{$value['name']}</td>
                  <td>{$value['marks']}</td>
               </tr>";
    }
    echo "</table>";
?>