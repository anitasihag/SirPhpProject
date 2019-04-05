<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Canvas</title>
  <link rel="stylesheet" href="css/style.css">
  
  
</head>

<body>
  
  <style>
    body {
      margin: 0px;
      padding: 50px;
    }
	
	#container {
      width: 200px;
      height: 600px;
      
	  border-radius: 5px;
	  background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
	
    
    #square {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
	#square1 {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
	#square2 {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
	#square3 {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
	#square4 {
      width: 150px;
      height: 150px;
      border-radius: 5px;
      background-color: #CCC;
      transition: background-color 1s ease-in-out;
      animation: colorTimer 2s infinite;
    }
		
   </style>
  
  <center><h1>Select your colour 
  
  <?php echo $_SESSION['user'] ?>
  </h1></center>
  <center><div id = "container">
    <a href="homepage.php" background-color=changeColor()><div id="square"></div></a>
	
  

  <script>
    changeColor()
    function changeColor(e) {
      square.style.backgroundColor = getRandomColor();
    }
    
    function getRandomColor() {
      var characters = "0123456789ABCDEF";
      var color = '#';
    
      for (var i = 0; i < 6; i++) {
        color += characters[getRandomNumber(0, 15)];
      }
      
      return color;
    }
    
    function getRandomNumber(low, high) {
      var r = Math.floor(Math.random() * (high - low + 1)) + low;
      return r;
    }
  </script>
  
  
    <a href="homepage.php"><div id="square1"></div></a>
  

  <script>
    //var square = document.querySelector("#square");
    //var container = document.querySelector("#container");
    //square.addEventListener("animationiteration", changeColor, false);
    changeColor()
    function changeColor(f) {
      square1.style.backgroundColor = getRandomColor();
    }
    
    function getRandomColor() {
      var characters = "0123456789ABCDEF";
      var color = '#';
    
      for (var i = 0; i < 6; i++) {
        color += characters[getRandomNumber(0, 15)];
      }
      
      return color;
    }
    
    function getRandomNumber(low, high) {
      var r = Math.floor(Math.random() * (high - low + 1)) + low;
      return r;
    }
  </script>
  
  
    <a href="homepage.php"><div id="square3"></div></a>
  

  <script>
    //var square = document.querySelector("#square");
    //var container = document.querySelector("#container");
    //square.addEventListener("animationiteration", changeColor, false);
    changeColor()
    function changeColor(f) {
      square3.style.backgroundColor = getRandomColor();
    }
    
    function getRandomColor() {
      var characters = "0123456789ABCDEF";
      var color = '#';
    
      for (var i = 0; i < 6; i++) {
        color += characters[getRandomNumber(0, 15)];
      }
      
      return color;
    }
    
    function getRandomNumber(low, high) {
      var r = Math.floor(Math.random() * (high - low + 1)) + low;
      return r;
    }
  </script>
  
  
    <a href="homepage.php"><div id="square4"></div></a>
  

  <script>
    //var square = document.querySelector("#square");
    //var container = document.querySelector("#container");
    //square.addEventListener("animationiteration", changeColor, false);
    changeColor()
    function changeColor(f) {
      square4.style.backgroundColor = getRandomColor();
    }
    
    function getRandomColor() {
      var characters = "0123456789ABCDEF";
      var color = '#';
    
      for (var i = 0; i < 6; i++) {
        color += characters[getRandomNumber(0, 15)];
      }
      
      return color;
    }
    
    function getRandomNumber(low, high) {
      var r = Math.floor(Math.random() * (high - low + 1)) + low;
      return r;
    }
  </script>
  
  </div>
 </center> 
  

</body>

</html>