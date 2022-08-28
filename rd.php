<?php
include "co.php";
$id=$_GET['readid'];
$sql="select * from `rud` where id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$date=$row['date'];
$shift= $row['shift'];
$bf=$row['bf'];
$name=$row['name'];
$bb=$row['app1'] ;
$bbb=$row['app2'] ;
$c=$row['db1'] ;
$cc=$row['db2'] ;
$ccc=$row['dc1'] ;
$d=$row['dc2'] ;
$dd=$row['dev'] ;
$ddd=$row['lab'] ;
$e=$row['apps'] ;
$ee=$row['dc'] ;
$eee=$row['fire'] ;
$f=$row['nw'] ;
$ff=$row['hmi'] ;
$fff=$row['bhsi'] ;
$g=$row['cr'] ;
$gg=$row['remote']; 
$ggg=$row['xml'] ;
$h=$row['mimc'] ;
$hh=$row['l2'] ;
$hhh=$row['opc'] ;
$i=$row['services'] ;
$ii=$row['erp'] ;
$iii=$row['portal'];
$j=$row['temp'] ;
$jj=$row['ac'];
$jjj=$row['ups'] ;
$k=$row['taken'] ;
$kk=$row['down'] ;
$kkk=$row['min'] ;
$l=$row['rem'];
?>
<html>
    <head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>
<style>


* {
  box-sizing: border-box;
  background-color:pink;
}

.row {
  display:flex;
  margin-left:250px;
  margin-right:-20px;
}
.col {
  flex: 15%;
  margin-left:350px;
  margin-right:100px;

}
.coli 
{
  flex: 25%;
  margin-left:550px;
  

}
.column {
  flex: 25%;
  padding: 20px;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  
}

th,td{
  text-align: left;
  padding: 5px;
  border:1px solid black;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
.container{position:relative;background:white;}
.ads{text-align:center;margin-bottom:40px;} 
dfc{display:flex;justify-content:space-around;}
.xs{text-align:center;}
.y{background-color:white;
border:1px black;}
</style>



<form action="" method="POST">
<button type="button" class="btn btn-danger"><a href="hm.php">EXIT</a></button>
<h2 class="xs">BF Control System Log sheet</h2>
  <div class="coli">
    <table>
      <tr>
        <th><label>Date</label>  </th><th>  
        <tag class="y"><?php echo $date;?></tag>
      </th>
        
      <tr>
        <th><label>Shift</label> </th><th>    
<select name="shift">
  <option><?php echo $shift;?></option>
</select></th>
       
      </tr>
      <tr>
      <th><label>BF</label>   </th><th>  
<select name="bf">
<option><?php echo $bf;?></option>
</select></th>
      </tr>
      <tr>
      <th><label>Service executive name</label></th><th>     
      <tag class="y"><?php echo $name;?></tag>
    </th>
      </tr>
    </table>
</div>
  <br><br>
<!-- -->
<h2 class="ads">BF STATUS</h2>
<dfc>
<h2>HARDWARE </h2>
<h2>APPLICATION</h2>
</dfc>
<div class="row">
  <div class="column">
    <table>
      <tr>
        <th><label>App server1</label>   </th><th>  
<select name="app1">
<option><?php echo $bb;?></option>

</select></th>
        <th><label>App Storage</label>   </th><th>  
<select name="apps">
<option><?php echo $e;?></option>

</select></th>
      </tr>
      <tr>
        <td><label>App server2</label> </td><td>    
<select name="app2">
<option><?php echo $bbb;?></option>

</select></td>
        <td><label class="L">DC storage</label></td><td>       
<select name="dc">
<option><?php echo $ee;?></option>

</select></td>
      </tr>
      <tr>
        <td><label>DB server1</label></td><td>       
<select name="db1">
<option><?php echo $c;?></option>

</select></td>
        <td><label>Firewall</label></td><td>       
<select name="fire">
<option><?php echo $eee;?></option>

</select></td>
      </tr> 
      <tr>
        <td><label>DB Server2</label></td><td>       
<select name="db2">
<option><?php echo $cc;?></option>

</select></td>
        <td><label class="L">N/W Switch</label></td><td>       
<select name="nw">
<option><?php echo $f;?></option>

</select></td>
      </tr>
      <tr>
        <td><label>DC Server1</label></td><td>       
<select name="dc1">
<option><?php echo $ccc;?></option>

</select></td>
        <td><label>L2 HMI PC</label></td><td>       
<select name="hmi">
<option><?php echo $ff;?></option>

</select></td>
      </tr>
      <tr>
        <td><label>DC server2</label></td><td>       
<select name="dc2">
<option><?php echo $eee;?></option>

</select></td>
        <td><label>BHSI PC</label>   </td><td>    
<select name="bhsi">
<option><?php echo $f;?></option>

</select></td>
      </tr>
      <tr>
        <td><label>Dev PC</label>   </td><td>    
<select name="dev">
<option><?php echo $ff;?></option>

</select></td>
        <td><label>C/R L2 PC</label> </td><td>      
<select name="cr">
<option><?php echo $g;?></option>

</select></td>
      </tr> 
      <tr>
        <td><label>Lab PC</label>   </td><td>    
<select name="lab">
<option><?php echo $ddd;?></option>

</select></td>
        <td><label class="L">Remote PC</label>  </td><td>     
<select name="remote">
<option><?php echo $gg;?></option>

</select></td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th><label>XML</label></th><th>       
<select name="xml">
<option><?php echo $ggg;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>MIMC</label></th><th>     
<select name="mimc">
<option><?php echo $h;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>L2 HMI</label></th><th>     
<select name="l2">
<option><?php echo $hh;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>L1 OPC LINK</label></th><th>     
<select name="opc">
<option><?php echo $hhh;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>L2 services</label></th><th>     
<select name="services">
<option><?php echo $i;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>L3/ERP services</label></th><th>     
<select name="erp">
<option><?php echo $ii;?></option>

</select></th>
       </tr>
       <tr>
        <th><label>BF1 portal</label></th><th>     
<select name="portal">
<option><?php echo $iii;?></option>

</select></th>
       </tr>
       </table>
  </div>
</div>
<!--- -->
<h2 class="ads">ENVIRONMENT</h2>
<div class="col">
    <table>
      <tr>
        <th><label>Temperature</label></th><th>     
        <tag class="y"><?php echo $j;?></tag> 
      </th>
        <tr>
        <th><label>A/C status</label>   </th><th>  
<select name="ac" class="s">
<option><?php echo $jj;?></option>

</select></th>
       
      </tr>
      <tr>
      <th><label>UPS/Power supply status</label>   </th><th>  
<select name="ups" class="s" text="sas">
<option><?php echo $jjj;?></option>
</th>
      </tr>
    
       <tr>
      <th><label>Backup taken</label> </th><th>    
<select name="taken" class="s" text="sas">
<option><?php echo $k;?></option>

</select></th>
      </tr>
    
      <tr>
      <th><label>System downtime</label>   </th><th>  
      <tag class="y"><?php echo $kk;?></tag></th><th>  
  
      <label>Hours</label></th><th>  
      <tag class="y"><?php echo $kkk;?></tag></th><th>  
      <label>minutes</label></th></tr>
      <tr>
        <th>  
    <label>Remarks(not Mandatory)</label></th>  
    <br> <th>
    <tag class="y"><?php echo $l;?></tag>
</th>
      </tr>
    </table>
</div>
<button type="button" class="btn btn-danger"><a href="hm.php">EXIT</a></button>
</form>
</body>
</html>