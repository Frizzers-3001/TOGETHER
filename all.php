<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'together');

$username=$_POST['username'];
$sql = " select * from doctors where DID IN( select DID from patientdoc where PID=(select PID from patients where username ='$username' ))";
$result = $mysqli->query($sql) or die ($mysqli->error);
$mysqli->close(); 
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <br>
    <br>
    <br>
    <title>REGISTERED DOCTORS</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
        .add{
            text-align:center;
            margin right: auto ;
            margin left: auto;
        }
        
    </style>
</head>
  
<body>
    <section>
        <h1>Registered Doctors</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
        
            <tr>
                
                <th>USERNAME</th>
                <th>DID</th>
                <th>BOOK</th>
                <th>MESSAGE</th>
                <th>VIDEO CALL</th>
                
            </tr>
            
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
            
                while($rows=$result->fetch_assoc())
                {
                    
                    $v1=$rows['username'];
                    $v2=$rows['username'];
                    $v3=$rows['username'];
                    $v4=['ADD MORE DOCTORS'];
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['DID'];?></td>
                <td> <input type=radio name='cen' value='$v1' checked>
                
                <td> <input type=radio name='cen' value='$v2' checked>
                
                <td> <input type=radio name='cen' value='$v3' checked>

                
                </tr>
                
            <?php
                }
             ?>


        </table>
        <table>
        <tr>
                
                <th>ADD MORE DOCTORS</th>
                <td> <input type=radio name='cen' value='$v4' checked>
                
            </tr>
            </table>
    </section>
    
        <div class="add">
            <br>
            <br>
            <br>
        <button >
           <strong>SAVE</strong> 
        </button>
            </div>
      
</body>
  
</html>
