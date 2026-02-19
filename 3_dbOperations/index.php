<!DOCTYPE html>
<html lang="en"> 

<head>
    <title>Document</title>
</head>

<body>
    <?php
      echo "This is a test page <br/>";
      $conn = mysqli_connect("localhost", "root", "", "test");
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }


      // Select data from the database
      $sql = "SELECT name, age FROM test_table";
      $result = mysqli_query($conn, $sql);

      // var_dump($result);

      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              echo "Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
          }
      } else {
          echo "0 results";
      }


      // Deletes data from the database
      $sql = "DELETE FROM test_table WHERE name='John'";
      if (mysqli_query($conn, $sql)) {  
          echo "Record deleted successfully";  
      } else {  
          echo "Error deleting record: " . mysqli_error($conn);  
      }

      mysqli_close($conn);
    ?>
</body>
