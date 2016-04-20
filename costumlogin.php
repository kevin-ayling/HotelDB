<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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

<div>
  <form action="MakeGuest.php" method=POST>
    
    <label for="email">Email</label><br>
    <input type="text" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
      <br>
    
   <!-- If statment, if eamil exists done, else add more info-->
    
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" required pattern="[A-Za-z]+">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" required pattern="[A-Za-z]+">

      <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phonenumber" placeholder="757-276-9803" required pattern="\d{3}[\-]\d{3}[\-]\d{4}">
    
    <label for="dob">Date of Birth</label>
    <input type="text" id="dob" name="dob" placeholder="04/06/1987" required pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
   
  

   <center><input type=submit name=submit></center>
    

    
  </form>
</div>

</body>
</html>

