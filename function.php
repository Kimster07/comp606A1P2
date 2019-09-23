<?php
include('dbcon.php');

function showname($uid){                         //this function return the first name of the user 
  global $con;

  $sql = "SELECT `fname` FROM `users` WHERE `uid`='$uid'";
  $run = mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
    $data = mysqli_fetch_assoc($run);
    echo $data['fname'];
  }
  else {
    echo "Unauthorized Access.";
    exit();
  }

}
function printname($uid)                           //this function return the first name of the user 
{
  global $con;
  $sql = "SELECT * FROM `users` WHERE `uid`='$uid'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($run);
  return $data['fname'];

}
function printlname($uid)             //this function return the last name of the user 
{
  global $con;
  $sql = "SELECT * FROM `users` WHERE `uid`='$uid'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($run);
  return $data['lname'];

}
function printemail($uid)               //this function return the email of the user 
{
  global $con;
  $sql = "SELECT * FROM `users` WHERE `uid`='$uid'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($run);
  return $data['email'];

}
function printtimeslot($ts)                           //this function return  time slots  
{
  global $con;
  $sql = "SELECT * FROM `timeslot` WHERE `tid`='$ts'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($run);
  return $data['timeslot'];
}
function msgtype($msgid)                   //this function return  the massage type
{
  global $con;
  $sql = "SELECT * FROM `msgtype` WHERE `mid`='$msgid'";
  $run = mysqli_query($con,$sql);
  $data = mysqli_fetch_assoc($run);
  return $data['name'];
}
function getApList($uid)
{
  global $con;
  $count = 0;
  $sql = "SELECT * FROM `appointments` where `uid`='$uid' ORDER BY `date`";
  $run = mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
    while($data=mysqli_fetch_assoc($run))
    {
      $count++;
      ?>
        <tr>
          <td><?php  echo $count; ?></td>
          <td><?php echo printname($data['uid']); ?></td>                 <!-- calling the printname function and pass the uid argument-->
          <td><?php echo $data['date']; ?></td>                    
          <td><?php echo printtimeslot($data['timeslot']); ?></td>
          <td><a href="user_appointment_details.php?apid=<?php echo $data['apid']; ?>" class="btn btn-info">Details</a></td>
        </tr>
      <?php
    }

  }
  else {
    ?>
    <tr>
      <td colspan="5">No Record Found</td>
    </tr>
    <?php
  }

}

function getApListAll()   //this function show user deatils to the admin 
{
  global $con;
  $count = 0;
  $sql = "SELECT * FROM `appointments` ORDER BY `date`";
  $run = mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
    while($data=mysqli_fetch_assoc($run))
    {
      $count++;
      ?>
        <tr>
          <td><?php  echo $count; ?></td>
          <td><?php echo printname($data['uid']); ?></td>
          <td><?php echo $data['date']; ?></td>
          <td><?php echo printtimeslot($data['timeslot']); ?></td>
          <td><a href="admin_appointment_view.php?apid=<?php echo $data['apid']; ?>" class="btn btn-primary">Details</a></td>
        </tr>
      <?php
    }

  }
  else {
    ?>
    <tr>
      <td colspan="5">No Record Found</td>
    </tr>
    <?php
  }

}

function getApDetail($apid)           //this function shows the appointment detail 
{
  global $con;
  $count = 0;
  $sql = "SELECT * FROM `appointments` where `apid`='$apid'";
  $run = mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
  {
      $data=mysqli_fetch_assoc($run);

      $name = printname($data['uid']);
      $lname = printlname($data['uid']);
      $email = printemail($data['uid']);
      $timeslot = printtimeslot($data['timeslot']);
      $msgtype = msgtype($data['msgtype']);
      $d = array();
      array_push($d,$name,$data['date'],$timeslot,$msgtype,$data['comment'],$lname,$email);
      return $d;
  }
  else {
    ?>
    <tr>
      <td colspan="5">No Record Found</td>
    </tr>
    <?php
  }

}



?>
