<?php 
include "co.php";
?>
<html>
    <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<style>
.bts{
  color: white;
 text-decoration: none;border:none;}
 .bt{
  color: white;
 text-decoration: none;border:none;
}
th,td{border:1px solid black;}

.df{word spacing:20px;}
.sad{padding:10px 10px;}
hy 
{display:flex;
justify-content:space-around;
}
ht 
{display:flex;
justify-content:space-between;
}  
.xs{text-align:center;}
</style>
<h2 class="xs">BF Control System Log sheet</h2>
<br>
<ht> 
<button type="button" class="btn btn-primary"><a href="qa.php" class="bt">Add Log Sheet</a></button>
<hy>
<button type="button" class="btn btn-primary"><a href="sample.php" class="bt">log out</a></button><br><br>
</hy></ht>
<table class="w3-table"><br>
<thread>
    <tr>
        <th scope="col">Date</th>
        <th >Shift</th>
        <th>BF</th>
        <th>Executive name</th>
        <th>Read</th>
        <th>Update</th>
        <th>Delete</th>


</tr>
</thread>
<tbody>
<?php 

$sql="select * from `rud`" ;
$res=mysqli_query($conn,$sql) ;
if($res)
{  
while($row=mysqli_fetch_assoc($res))
{
$id=$row['id'];
$date=$row['date'] ;
$shift=$row['shift'];
$bf=$row['bf'] ;
$name=$row['name'];
echo'<tr>
<th scope="row">'.$date.'</th>
<td>'.$shift.'</td>
<td>'.$bf.'</td>
<td>'.$name.'</td>
<td>
<button type="button" class="btn btn-primary"><a href="rd.php?readid='.$id.'" class="bts">Read</a></button></td>
<td><button type="button" class="btn btn-success" ><a href="up.php?updateid='.$id.'"class="bts">update</a></button></td>
<td><button type="button" class="btn btn-danger"onclick="return f();"><a href="del.php?deleteid='.$id.'"class="bts">delete</a></button>
</td>
</tr>';
}
}
?>
</tbody>

</table>
<p id="demo"></p>

<script>
function f() {
  
  return confirm("Are you sure to delete?");
   
 
}
</script>
</body>
</html>
