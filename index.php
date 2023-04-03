<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>





<body>

    <h1 align="center">Application name: AAST_BIS class registeration </h1>

    <br>
    <br>

    <h2  style="color: red;" >* required field  </h2>


    <?php
 $courses = [];
$name = $email = $gender = $group = $classdet   = $checkbox = "";
$nameErr = $emailErr = $genderErr = $checkboxErr = "";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
    $classdet = test_input($_POST["classdet"]);
    $group = test_input($_POST["group#"]);
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

    $courses = test_input($_POST["course"]);


    if (empty($_POST["checkbox"])) {
        $checkboxErr = "checkbox is required";
      } else {
        $checkbox = test_input($_POST["checkbox"]);
      }
  }

function test_input($data) {
  // $data = trim($data);
  // $data = stripslashes($data);
  // $data = htmlspecialchars($data);
  return $data;
}
?>



  <form method="post" action=" <?php $_PHP_SELF ;?>">



 Name: <input type="text" name="name"> <span style="color: red;" class="error">* <?php echo $nameErr;?></span>
 <br>
 <br>

E-mail: <input type="text" name="email"> <span style="color: red;" class="error">* <?php echo $emailErr;?></span>
<br>
<br>

group # : <input type="text" name="group#">
<br>
<br>

class details: <textarea name="classdet" rows="5" cols="40"></textarea>
<br>
<br>

Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span style="color: red;" class="error">* <?php echo $genderErr;?></span>
<br>
<br>

select courses:

<select name="course[]"  multiple >
    <option value="PHP">PHP</option>
    <option value="JAVA">JAVA</option>
    <option value="MYsql">MYsql</option>
    <option value="HTML">HTML</option>
  </select>
  <br>
<br>

<br>
<br>

agree :<input type="checkbox"name="checkbox"> <span style="color: red;" class="error">* <?php echo $checkboxErr;?></span>

<br>
<br>

<input type = "submit"  name ="submit"/>
<br>
<br>


</form>

<?php
 if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])&& !empty($_POST["checkbox"])){
echo "Name:".$name;
echo "<br>";
echo "email:".$email;
echo "<br>";
echo "your courses:";
 foreach($courses as $key=>$value){
    echo $value." ,";}
echo "<br>";
echo  "group no :" . $group;
echo "<br>";
echo "gender is :" . $gender;
echo "<br>";
echo "class details: " . $classdet;
echo "<br>";}
?>

  




    
</body>
</html> 