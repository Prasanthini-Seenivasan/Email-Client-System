

<div class="table-title">
<center><h3>Inbox</h3></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">From</th>
<th class="text-left">Message</th>
<th class="text-left">Time</th>

</tr>
</thead>
<?php
$z=trim($_POST["n"]);
$res=mysqli_query($conn,"SELECT * from compose where Name='$z'") or die('error');
  while($r=mysqli_fetch_array($res))
  {
    
    $Fromusername=$r['Fromusername'];
    $Message=$r['Message'];
    $time=$r['time'];
    echo '<tr>
        <td>'.$Fromusername.'</td>
        <td>'.$Message.'</td>
        <td>'.$time.'</td>
        
        </tr>';

  }
?>
</table>

  

  </body>