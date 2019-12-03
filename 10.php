<?php
$servername="localhost";
$username="root";
$password="";
$usnArrbase="student";
$conn = new mysqli($servername,$username,$password,$usnArrbase);
if($conn->connect_error)
    die("connection failed: ".$conn->connect_error);
echo("Connected Succesfully");


?>
<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT SELECTION SORT</title>
    <script type="text/javascript">
        fucntion displayTable(){
            var table=document.getElementById("output");
        }
    </script>
    </head>
    <body>
        <h3 align="center">STUDENT REGISTRATION FORM</h3>
        <form action="#" method="POST">
            <table align="center" cellpadding="10">
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>USN</td>
                    <td><input type="text" name="usn" maxlength="10"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>MOBILE NUMBER</td>
                    <td><input type="text" name="mob" maxlength="10"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="insert" name="insert"></td>
                    <td><input type="submit" value="view" name="view"></td>
                    <td><input type="submit" value="sort" name="sort"></td>
                </tr>
            </table>
        </form>
        <table id="output">
            <?php
            if(isset($_POST['insert'])){
                $sql="INSERT INTO student(Name,USN,email,mob) VALUES ('".$_POST['name']."','".strtoupper($_POST['usn'])."','".$_POST['email']."','".$_POST['mob']."')";
                if($conn->query($sql)===TRUE)
                    echo "NEW RECORD CREATED SUCCESSFULLY";
                else
                    echo "Error :".$sql."</br>".$conn->error;
                }
            
            if(isset($_POST['view'])){
                $sql='SELECT * FROM student';
                    	$query=mysqli_query($conn,$sql);
                    	while($row=mysqli_fetch_array($query))
                    	{
                    		echo "<tr>
                    		          <td> ".$row['name']."</td>
                    		          <td> ".$row['usn']."</td>
                    		          <td> ".$row['email']."</td>
                    		          <td> ".$row['mob']."</td>
                    		       </tr>";   
                    	}
                    }
            if(isset($_POST['sort'])){
                $sql='SELECT USN FROM student';
                         $query=mysqli_query($conn,$sql);
                         $usnArr=array();
                         while($row=mysqli_fetch_array($query))
                         {
                         	array_push($usnArr,$row['USN']);
                         }
                         $count=count($usnArr);
                         for($i=0;$i<$count;$i++)
                         {
                         	$min=$i;
                         	for($j=$i+1;$j<$count;$j++)
                         	{
                         		if($usnArr[$j]<$usnArr[$min])
                         		{
                         			$min=$j;
                         		}
                         	}
							 $temp=$usnArr[$min];
							 $usnArr[$min]=$usnArr[$i];
                             $usnArr[$i]=$temp;
                             $sql='SELECT * FROM student WHERE USN="'.$temp.'";';
                             $query=mysqli_query($conn,$sql);
                             while($row=mysqli_fetch_array($query))
                    	{
                    		echo "<tr>
                    		          <td> ".$row['name']."</td>
                    		          <td> ".$row['usn']."</td>
                    		          <td> ".$row['email']."</td>
                    		          <td> ".$row['mob']."</td>
                    		       </tr>";   
                        }
                        $sql='SELECT * FROM student WHERE USN=" '.$usnArr[$count-1].' ";';
                        $query=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                            echo "<tr>
                                   <td> ".$row['name']."</td>
                                   <td> ".$row['usn']."</td>
                                   <td> ".$row['email']."</td>
                                   <td> ".$row['mob']."</td>
                            </tr>";
                        }
                    }
            }
            
            ?>
        </table>
    </body>
</html>