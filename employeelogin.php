<!DOCTYPE html>
<html>
<style>
  
div.container {
    width: 30em;
    border: 1em solid;
     margin: 0 auto;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-boxborder-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button {
    border-radius: 8px;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
  
  

</style>

<body>
<div class="container">
<div>
  
  <form action="action_page.php">

     <label for="fname" >Email</label>
    <input type="text"  id="fname" name="email">
    
   <!-- If statment, if eamil exists done, else add more info-->
    
    <label for="password" >Password</label>
    <input type="text" id="Password" name="Password">   
   

   <center> <button><a class="btn btn-default" href="http://plato.cs.virginia.edu/~jmb3qr/recep">Submit </a></button></center>
    

    
  </form>
</div>
  </div>

</body>
</html>