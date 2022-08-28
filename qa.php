<!--- connection -->
<?php 
$conn=mysqli_connect("localhost","root","") ;
$db=mysqli_select_db($conn,'rudop');
if(isset($_POST['insert']))
{
$a=$_POST['date'] ;
$aa=$_POST['shift']; 
$aaa=$_POST['bf'] ;
$b=$_POST['name'] ;
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
$er="insert into`rud`(`date`,`shift`,`bf`,`name`,`app1`,`app2`,`db1`,`db2`,`dc1`,`dc2`,`dev`,`lab`,`apps`,`dc`,`fire`,`nw`,`hmi`,`bhsi`,`cr`,`remote`,`xml`,`mimc`,`l2`,`opc`,`services`,`erp`,`portal`,`temp`,`ac`,`ups`,`taken`,`down`,`min`,`rem`)values('$a','$aa','$aaa','$b','$bb','$bbb','$c','$cc','$ccc','$d','$dd','$ddd','$e','$ee','$eee','$f','$ff','$fff','$g','$gg','$ggg','$h','$hh','$hhh','$i','$ii','$iii','$j','$jj','$jjj','$k','$kk','$kkk','$l')";
$quer=mysqli_query($conn,$er);
if(!empty($a) and !empty($b)){

header('location:hm.php') ;

} 
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
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

.ads{text-align:center;margin-bottom:40px;} 
dfc{display:flex;justify-content:space-around;}
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
  width: 40%;
 
}

th, td {
  text-align: left;
  padding: 3px;
  border:1px solid black;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
.tt{color:red;background-color:blue;padding:10px 16px;}
.ty{text-decoration:none;}
.container{position:relative;background:white;}
.xs{text-align:center;}
</style>


<h2 class="xs">BF Control System Log sheet</h2>
<form action="" method="POST" name="qas">
  <div class="coli">
    <table>
      <tr>
        <th><label>Shift Date</label></th>
        <th><input type="date" name="date" placeholder="DD-MM-YY">
      </th>
        
      <tr>
        <th><label>Shift</label></th>   
<th><select name="shift" class="s">
<option value="A">A</option> 
<option value="B">B</option>
<option value="C">C</option>
<option value="G">General</option>
</select></th>
       
      </tr>
      <tr>
      <th><label>BF</label></th><th>   
<select name="bf" class="s" text="sas">
<option value="BF1">BF1</option> 
<option value="BF2">BF2</option>
<option value="BF3">BF3</option>
</select></th>
      </tr>
      <tr>
      <th><label>Service executive name</label></th><th>   
      <input type="txt" name="name" placeholder="name" class="ty"> 
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
        <td><label>App server1</label></td><td>
<select name="app1">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label>App Storage</label></td><td>   
<select name="apps">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>App server2</label>   </td><td>  
<select name="app2">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label class="L">DC storage</label>   </td><td>  
<select name="dc">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>DB server1</label>   </td><td>  
<select name="db1">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label>Firewall</label>   </td><td>  
<select name="fire">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr> 
      <tr>
        <td><label>DB Server2</label>   </td><td>  
<select name="db2">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label class="L">N/W Switch</label>   </td><td>  
<select name="nw">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>DC Server1</label>   </td><td>  
<select name="dc1">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label>L2 HMI PC</label>   </td><td>  
<select name="hmi">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>DC server2</label>   </td><td>  
<select name="dc2">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label>BHSI PC</label>   </td><td>  
<select name="bhsi">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
      <tr>
        <td><label>Dev PC</label>   </td><td>  
<select name="dev">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label>C/R L2 PC</label>   </td><td>  
<select name="cr">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr> 
      <tr>
        <td><label>Lab PC</label>   </td><td>  
<select name="lab">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
        <td><label class="L">Remote PC</label>   </td><td>  
<select name="remote">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></td>
      </tr>
    </table>
  </div>
  <div class="column">
    <table>
      <tr>
        <th><label>XML</label>   </th><th>  
<select name="xml">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>MIMC</label>   </th><th>  
<select name="mimc">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L2 HMI</label>   </th><th>  
<select name="l2">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L1 OPC LINK</label>   </th><th>  
<select name="opc">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L2 services</label>   </th><th>  
<select name="services">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>L3/ERP services</label>   </th><th>  
<select name="erp">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       </tr>
       <tr>
        <th><label>BF1 portal</label>   </th><th>  
<select name="portal">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
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
        <input type="txt" name="temp" placeholder="name"> 
      </th>
        <tr>
        <th><label>A/C status</label>   </th><th>  
<select name="ac" class="s">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
       
      </tr>
      <tr>
      <th><label>UPS/Power supply status</label>   </th><th>  
<select name="ups" class="s" text="sas">
<option value="ok">ok</option> 
<option value="not ok">not ok</option>
</select></th>
      </tr>
    
       <tr>
      <th><label>Backup taken</label>   </th><th>  
<select name="taken" class="s" text="sas">
<option value="yes">yes</option> 
<option value="no">no</option>
</select></th>
      </tr>
    
      <tr>
          <tr>
      <th><label>System downtime</label>   </th><th>  
  <select name="down" class="s" text="sas">
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
<th>
    <label>Remarks(not Mandatory)</label></th>  
    <br> 
    <th>
      <input type="txt" name="rem" placeholder="name" class="ty"></th>
      
    </table>
</div>
<form name="xyz">

<button type="submit" name="insert" class="tt" onclick="fun();">Insert Data</button>
<button class="tt"><a href="qa.php" class="ty">Clear</a></button>
<button class="tt"><a href="hm.php" class="ty">Back</a></button>
</form>
<script type="text/javascript">
  function fun()
  {
   
  
      var b = document.forms["qas"]["date"].value;
    var c = document.forms["qas"]["name"].value;
    if (b == null || b == "", c == null || c == "") {
      
      
      alert("please fill the required details");
    }

  }
</script>    
</body>
</html>
