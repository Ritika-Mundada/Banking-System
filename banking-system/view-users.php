<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <title>View Users</title>
</head>

<body style="background-color:White">
  <?php
        include 'configure.php';
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn,$sql);
    ?>
  <?php include 'header-footer.php' ?>
  <br><br><br>
  <div class="container">
    <center>

      <h2>Registered Users</h2>
    </center>
    <br>
    <div class="row">
      <div class="col">
        <div class="table-responsive-sm">
          <table class="table table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col" class="text-center ">ACCOUNT NUMBER</th>
                <th scope="col" class="text-center ">NAME</th>
                <th scope="col" class="text-center ">E-MAIL</th>
                <th scope="col" class="text-center ">BALANCE</th>

              </tr>
            </thead>
            <tbody>
              <?php
                          while($row=mysqli_fetch_assoc($result) ){
                          ?>
              <tr>
                <td class="text-center "><?php echo $row['Account_Number'];?></td>
                <td class="text-center "><?php echo $row['Account_Holder'];?></td>
                <td class="text-center "><?php echo $row['Email_Id'];?></td>
                <td class="text-center "><?php echo $row['Account_Balance'];?></td>



              </tr>
              <?php } ?>

            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
