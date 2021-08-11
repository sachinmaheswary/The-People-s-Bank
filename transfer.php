<?php
include 'host.php';

if(isset($_POST['submit']))
{
    $from = $_GET['Id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where Id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from customers where Id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script>';
       // showing an alert box.
       echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
   else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        // echo ' window.location.href =
        // "fail.html";';  // showing an alert box.
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

        echo '<script type="text/javascript">';
        // echo ' window.location.href =
        // "fail.html";';  // showing an alert box.
        echo "alert('Zero value cannot be transferred !')";
        echo '</script>';
    
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE customers SET Balance=$newbalance where Id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE customers SET Balance=$newbalance where Id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transaction ('Sender','Receiver','Balance') VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successfully !');
                                     window.location='Confirm.html';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<html>
<title> Bank Transfer</title>

<head>
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Nice-select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/magnific.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<style>
    html,
    body {
        height: 100%;

    }

    .floatleft {
        float: left;
    }

    .floatright {
        float: right;
    }

    .alignleft {
        float: left;
        margin-right: 15px;
        margin-bottom: 15px;
    }

    .alignright {
        float: right;
        margin-left: 15px;
        margin-bottom: 15px;
    }

    .aligncenter {
        display: block;
        margin: 0 auto 15px;
    }

    a:focus {
        outline: 0px solid;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .fix {
        overflow: hidden;
    }

    p {
        margin: 0 0 15px;
        color: black;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Nunito', sans-serif;
        margin: 0 0 15px;
        color: #151b2c;
        font-weight: 600;
    }

    h1 {
        font-size: 48px;
        line-height: 50px;

    }

    h2 {
        font-size: 38px;
        line-height: 46px;

    }

    h3 {
        font-size: 30px;
        line-height: 38px;

    }

    h4 {
        font-size: 24px;
        line-height: 34px;

    }

    h5 {
        font-size: 20px;
        line-height: 30px;

    }

    h6 {
        font-size: 16px;
        line-height: 28px;

    }

    a {
        transition: all 0.3s ease 0s;
        text-decoration: none;
    }

    a:hover {
        color: #EF233C;
        text-decoration: none;
    }

    a:active,
    a:hover {
        outline: 0 none;
    }

    a:hover,
    a:focus {
        color: #3d5368;
        text-decoration: none;
    }

    body {
        background: #fff none repeat scroll 0 0;
        color: #7e8ca0;
        font-family: 'Nunito', sans-serif;
        font-size: 15px;
        text-align: left;
        overflow-x: hidden;
        line-height: 26px;
    }

    #pay {
        background-color: #EF233C;
        margin: auto;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    body {
        background-color: #F5F5F5
    }

    #btn {
        text-transform: uppercase;
        background: #EF233C;
        display: inline-block;
        padding: 15px 30px;
        color: #fff;
        font-weight: 600;
        margin-top: 30px;
        border-radius: 33px;
        width: 200px;
        transition: 0.4s;
        border: 2px solid #EF233C;
    }


    #names {
        /* color: #EF233C; */
        /* background-color: #EF233C; */
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 30px;
        border: 3px #EF233C;
        border-style: solid;
        border-radius: 30px;
        font-size: 16px;
    }

    #btn:hover {
            border: #EF233C;
            transform: scale(1.1);
            border-width: 33px;
    
        }

    #btn1 {
        background-color: #EF233C;
        border: none;
        color: white;
        /* padding: 15px 32px; */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
    }

    #ben {
        background-color: #EF233C;
        padding-top: 16px;
        padding-bottom: 16px;
        padding-right: 16px;
        padding-left: 16px;
        border-color: #151b2c;
        border-radius: 30px;
        font-size: 20px;
    }

    #amnt {
        border: 5px #EF233C;
        border-style: solid;
        display: inline-block;
        background-color: #EF233C;
        border-radius: 30px;
        padding-left: 33px;

    }

    input {
        font-weight: bold;
        padding: 7px;
        margin-left: 10px;
        border-radius: 30px;
        border: #EF233C;
        border-style: solid;
        padding-bottom: 5px;
    }
</style>

<body>
    <center>
        <h1 id="pay">
            Payment
        </h1>
        <center>
            <br><br>
            <p>
            <h3><label id="ben" for="names">Select Payee's name</label>
                <select id ="names"  class="form-control" required>
                <option value="">-Select Payee's name-
            <?php
                include 'host.php';
                $sid=$_GET['Id'];
                $sql = "SELECT * FROM customers where Id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows = mysqli_fetch_assoc($result);
                ?>
                 <form method="post">
                 <option  value="" >
                
                    <?php echo $rows['Name'] ;?> 
               
                </option>
                </option>
                
        </select>
            </h3>
            </p>

            <p>
            <h3><label id="ben" for="names">Select Beneficiary name</label>
                <select id ="names" name="to" class="form-control" required>
                <option value="" disabled selected>-Select beneficiary name-
            <?php
                include 'host.php';
                $sid=$_GET['Id'];
                $sql = "SELECT * FROM customers where  Id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['Id'];?>" >
                
                    <?php echo $rows['Name'] ;?> 
               
                </option>
                
            <?php 
                } 
            ?>
            </option>
        </select>
            </h3>
            </p>
            <!-- </select> -->
            <h3>
                <div class="con">
                    <label id="amnt"> Amount &nbsp; &nbsp; &nbsp;</label>
                    <input type="number"  name="amount" 
                    class="form-control" required>
                </div>
            </h3>
            <button name="submit" type="submit" id="btn" >Proceed and Pay</button>
            <!-- <a href="">
            <input id="btn" type="submit"  name="submit" value="Proceed and Pay"></a> -->
            </form>
</body>

</html>