<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>application name : PHP regestiration </h1>

<?php

$students = array(
    array('name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'),
    array ('name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'),
    array('name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'),
    array('name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'),
    array ('name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'),
);

// print_r ($students);
// print( "<br>");


foreach($students as $x => $x_value) {

    // print_r(  $x_value);
    // print( "<br>");

    foreach($x_value as $y => $y_value)
    {print_r(  $y);
        print( "<br>");
        print_r(  $y_value);
        
        
        print( "<br>");}
  }

?>

<hr>

 <table>
  <tr>
    <th>        <?php foreach($x_value as $y => $y_value)
            {print_r(  $y. "&nbsp");}?>
            </th>
    
  </tr>

  <?php for($i = 0; $i< count($students); $i++){
                if($students[$i]['status'] == 'CMS'){
                    echo "<tr style='color: red;'> 
                    <td>".$students[$i]['name']. "</td> <td>". $students[$i]['email']."</td> <td>". $students[$i]['status'] ."</td>
                    </tr>";
                }
                else{
                   echo "<tr>
                    <td>".$students[$i]['name']. "</td> <td>". $students[$i]['email']."</td> <td>". $students[$i]['status'] ."</td>
                    </tr>";

                }
            }
            ?>
</table> 






</body>
</html>