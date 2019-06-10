<!DOCTYPE HTML>
<html>
<head>
  <meta charset="iso-8859-7">
  <title>Title of the document</title>
  </head>
  <body>
    <form>
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Modulas</option>
        <option>Exponent</option>
      </select>
      <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <?php
    <p>The Answer is:</p>
    if(isset($_GET['submit']))
    {
      $result1 = $_GET['num1'];
      $result1 = $_GET['num2'];
      $operator = $_GET['operator'];
      switch($operator)
      {
        case "None":
           echo "ERROR!";
        break:
        case "Add":
           echo $result1 + $result2;
        break:
        case "Subtract":
           echo $result1 - $result2;
        break:
        case "Multiply":
           echo $result1 * $result2;
        break:
        case "Divide":
           echo $result1 / $result2;
        break:
        case "Modulas":
           echo $result1 % $result2;
        break:
        case "Exponent":
           echo $result1 ** $result2;
        break:
      }
    }
    ?>
    </body>
</html>
