<?php
include "co.php";
$id=$_GET['updateid'];
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
if(isset($_POST['update'])){
$shift= $_POST['shift'];
$bf=$_POST['bf'];
$name=$_POST['name'];
$bb=$_POST['app1'] ;
$bbb=$_POST['app2'] ;
$c=$_POST['db1'] ;
$cc=$_POST['db2'] ;
$ccc=$_POST['dc1'] ;
$d=$_POST['dc2'] ;
$dd=$_POST['dev'] ;
$ddd=$_POST['lab'] ;
$e=$_POST['apps'] ;
$ee=$_POST['dc'] ;
$eee=$_POST['fire'] ;
$f=$_POST['nw'] ;
$ff=$_POST['hmi'] ;
$fff=$_POST['bhsi'] ;
$g=$_POST['cr'] ;
$gg=$_POST['remote']; 
$ggg=$_POST['xml'] ;
$h=$_POST['mimc'] ;
$hh=$_POST['l2'] ;
$hhh=$_POST['opc'] ;
$i=$_POST['services'] ;
$ii=$_POST['erp'] ;
$iii=$_POST['portal'];
$j=$_POST['temp'] ;
$jj=$_POST['ac'];
$jjj=$_POST['ups'] ;
$k=$_POST['taken'] ;
$kk=$_POST['down'] ;
$kkk=$_POST['min'] ;
$l=$_POST['rem'];
$sql="update `rud` set shift='$shift',bf='$bf',name='$name',app1='$bb',app2='$bbb',db1='$c',db2='$cc',dc1='$ccc',dc2='$d',
dev='$dd',lab='$ddd',apps='$e',dc='$ee',fire='$eee',nw='$f',hmi='$ff',bhsi='$fff',cr='$g',remote='$gg',xml='$ggg',
mimc='$h',l2='$hh',opc='$hhh',services='$i',erp='$ii',portal='$iii',temp='$j',ac='$jj',ups='$jjj',taken='$k',down='$kk',
min='$kkk',rem='$l'
where id=$id";
$result=mysqli_query($conn,$sql);
if($result and !empty($name))
{header('location:hm.php');}
else{ 'omprove';}
}
?>
<html>
<head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>


<body>
<style>

.xs{text-align:center;}
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

* {
  box-sizing: border-box;
  background-color:pink;
}

.row {
  display:flex;
  margin-left:250px;
  margin-right:-20px;
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
.bt{color:white;text-decoration:none;}
</style>



<form action="" method="POST" name="qas">
<input type="submit" class="btn btn-success" value="update" name="update" onclick="return fun();">
<button type="button"class="btn btn-danger"><a href="hm.php" class="bt">EXIT</a></button>
<button type="reset"class="btn btn-primary"><a class="bt">CLEAR</a></button>
<h2 class="xs">BF Control System Log sheet</h2>
  <div class="coli">
    <table>
      <tr>
        <th><label>Shift Date</label>   </th><th>  
        <tag class="y" name="date"><?php echo $date;?></tag>
      </th>
        
      <tr>
        <th><label>Shift</label>   </th><th>  
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
      <th><label>Service executive name</label>   </th><th>  
      <input type="txt" name="name" placeholder="name"  value=<?php echo $name;?>> 
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
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
        <th><label>App Storage</label>   </th><th>  
<select name="apps">
<option><?php echo $e;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
      </tr>
      <tr>
        <td><label>App server2</label>   </td><td>  
<select name="app2">
<option><?php echo $bbb;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label class="L">DC storage</label>   </td><td>  
<select name="dc">
<option><?php echo $ee;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>DB server1</label>   </td><td>  
<select name="db1">
<option><?php echo $c;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label>Firewall</label>   </td><td>  
<select name="fire">
<option><?php echo $eee;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr> 
      <tr>
        <td><label>DB Server2</label>   </td><td>  
<select name="db2">
<option><?php echo $cc?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label class="L">N/W Switch</label>   </td><td>  
<select name="nw">
<option><?php echo $f;?></option>
<option value="ok">ok</option> 
<option value="not">not</option>
</select></td>
      </tr>
      <tr>
        <td><label>DC Server1</label>   </td><td>  
<select name="dc1">
<option><?php echo $ccc;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label>L2 HMI PC</label>   </td><td>  
<select name="hmi">
<option><?php echo $ff;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>DC server2</label>   </td><td>  
<select name="dc2">
<option><?php echo $d;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label>BHSI PC</label>   </td><td>  
<select name="bhsi">
<option><?php echo $fff;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>Dev PC</label>   </td><td>  
<select name="dev">
<option><?php echo $dd;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label>C/R L2 PC</label>   </td><td>  
<select name="cr">
<option><?php echo $g;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr> 
      <tr>
        <td><label>Lab PC</label>   </td><td>  
<select name="lab">
<option><?php echo $g;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
        <td><label class="L">Remote PC</label>   </td><td>  
<select name="remote">
<option><?php echo $gg;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th><label>XML</label>   </th><th>  
<select name="xml">
<option><?php echo $ggg;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>MIMC</label>   </th><th>  
<select name="mimc">
<option><?php echo $h;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L2 HMI</label>   </th><th>  
<select name="l2">
<option><?php echo $hh;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L1 OPC LINK</label>   </th><th>  
<select name="opc">
<option><?php echo $hhh;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L2 services</label>   </th><th>  
<select name="services">
<option><?php echo $i;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L3/ERP services</label>   </th><th>  
<select name="erp">
<option><?php echo $ii;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>BF1 portal</label>   </th><th>  
<select name="portal">
<option><?php echo $iii;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
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
        <th><label>Temperature</label>   </th><th>  
        <input type="txt" name="temp" placeholder="name" value=<?php echo $j;?>> 
      </th>
        <tr>
        <th><label>A/C status</label>   </th><th>  
<select name="ac" class="s">
<option><?php echo $jj;?></option>
<option value="Y">ok</option> 
<option value="N">not ok</option>
</select></th>
       
      </tr>
      <tr>
      <th><label>UPS/Power supply status</label> </th><th>    
<select name="ups" class="s" text="sas">
<option><?php echo $jjj;?></option>
<option value="ok">ok</option> 
<option value="not">not ok</option>
</select></th>
      </tr>
    
       <tr>
      <th><label>Backup taken</label>   </th><th>  
<select name="taken" class="s" text="sas">
<option><?php echo $k;?></option>
<option value="yes">yes</option> 
<option value="no">no</option>
</select></th>
      </tr>
    
      <tr>
      <th><label>System downtime</label>   </th><th>  
  <select name="down" class="s" text="sas">
<option><?php echo $kk;?></option>
<option value="1">1</option> 
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="0">00</option>
</select>
      </th><th>  
      <label>Hours</label>
      </th><th>  
      <select name="min" class="s" text="sas">
<option><?php echo $kkk;?></option>
<option value="1">1</option> 
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="00">00</option>
</select>
      </th><th>  
      <label>minutes</label>
      </th></tr>
      <tr>
        <th>  
    <label>Remarks(not Mandatory)</label> </th>   
    <br> 
    <th>  
      <input type="txt" name="rem" placeholder="name" class="ty" value=<?php echo $l;?>>
</th>
      </tr>
    </table>
</div>
<input type="submit" class="btn btn-success" value="update" name="update" onclick="fun();">
<button type="button"class="btn btn-danger"><a href="hm.php" class="bt">EXIT</a></button>
<button type="reset"class="btn btn-primary"><a class="bt">CLEAR</a></button>
</form>
<script type="text/javascript">
  function fun(){

    var c = document.forms["qas"]["name"].value;
    if (c == null || c == "") {
      
      
      alert("name is required field");
    }

 
  }
</script>    
</body>
</html>