<!DOCTYPE html>

<html>  
 <head><title>robot control buttons</title>
 
 <style>
body{
font-family: Arial, Helvetica, sans-serif;
background:#fafafa;
}
#mainstopwatch{
width: 400px;
height: 60vh;
margin:100px auto;
padding:60px 50px 10px;
text-align:center;
font-size: 30px;
background: #e0e0e0;
box-shadow: 15px 15px 30px #afafaf,-15px -15px 30px #ffffff;
border-radius:40px;
background: #e0e0e0;
box-shadow:6px -6px 8px #9d9d9d, -6px 6px 8px #ffffff;
}

#mainstopwatch button{
margin-right: 5px;
margin-left: 5px;
font-size: 20px;
-webkit-appearance: none;
border:none;
background-color: #2e80b3;
color:white;
width:110px;
height:55px;
justify-content: space-between;
transition:0.2s;
border-radius:40px;
box-shadow: 6px -6px 8px #9d9d9d, -6px 6px 8px #ffffff;
}

#mainstopwatch button:nth-child(9){
background-color:  rgb(241, 64, 64);
}
#mainstopwatch button:hover{
background:#333;
color:#e0e0e0;
border-radius:35px;
box-shadow: 6px -6px 8px #9d9d9d, -6px 6px 8px #ffffff;
transition: 0.2s;
}
</style>
    <head>
        <body>
                <form action="functioncalling.php" method="get">
                <div id="mainstopwatch">
                <br>
                <b>Robot Control Buttons</b><br><br>
                <button name="forward" id="forward" >forward</button><br><br>
                <button name="left" id="left"  >left</button>
                <button name="stop" id="stop"  >Stop</button>
                <button name="right" id="right" >right</button><br><br>
                <button name="backward" id="backward"  >backward</button>
                </form>


</body> 
 
</html> 
