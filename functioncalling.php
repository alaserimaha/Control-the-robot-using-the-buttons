
    <?php


if (array_key_exists("stop",$_GET))
{ $var="s";}
elseif(array_key_exists("forward",$_GET))
{ $var="f";}
elseif(array_key_exists("backward",$_GET))
{ $var="b";}
elseif(array_key_exists("left",$_GET))
{ $var="l";}
elseif(array_key_exists("right",$_GET))
{ $var="r";}

echo $var;

$conn = mysqli_connect("localhost","root", "", "db");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$sqlquery = "INSERT INTO tabel  VALUES('$var')";
if(mysqli_query($conn, $sqlquery)){
    echo "<br><br><h3>The char <mark>$var</mark> has been stored Successfully</h3>";

} else{
    echo "ERROR: Hush! Sorry $sqlquery. "
        . mysqli_error($conn);
}
 mysqli_close($conn);  

  ?>
