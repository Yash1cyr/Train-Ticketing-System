<?php

$con = mysqli_connect('localhost','root','yash@2002ip');
mysqli_select_db($con, 'railways');

$q = "select * from trains";

$query = mysqli_query($con, $q);

if(mysqli_num_rows($query) > 0){
    while($result = mysqli_fetch_array($query)) {
        ?>
           
           <tr>
               <td> <input type = "checkbox" name = "result"> </td>
               <td> <?php echo $result['Train_No'] ?> </td>
               <td> <?php echo $result['Train_Name'] ?> </td>
               <td> <?php echo $result['Source'] ?> </td>
               <td> <?php echo $result['Destination'] ?> </td>
               <td> <?php echo $result['Departure_Time'] ?> </td>
               <td> <?php echo $result['Arrival_Time'] ?> </td>
               <td> <select name = "class1">
                 <option> SLEEPER </option>
                 <option> 3rd AC </option>
                 <option> 2nd AC </option>
                 <option> 1st Ac </option>
            </select>
               </td>
             
    </tr>

        <?php
    }
}

?>
