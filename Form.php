<!DOCTYPE html>
<html>
    <header>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </header>
<style>
input[type=text], select {
/* width: 100%; */
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  /* width: 100%; */
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;

}
</style>
<body>
    


<div class="form-group col-4">
  <form action="connect.php">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="firstname" required placeholder="Your name.."><br/>

    <label for="mname">Middle Name</label>
    <input type="text" class="form-control" id="mname" name="midname" required placeholder="Your middle name.."><br/>

    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lastname"required placeholder="Your last name.."><br/>

    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" required placeholder="Please enter your email.."><br/>

    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password"required placeholder="Password here.."><br/>

    <label for="gender">Gender</label>
    <div>
        <label for="male">Male
    <input type="radio" class="radio-inline" id="male" name="gender" ></label>
    <label for="male">Female
    <input type="radio" class="radio-inline" id="female" name="gender" ></label>
    <label for="male">Other
    <input type="radio" class="radio-inline" id="other" name="gender" ></label>
    </div>
    <!-- <select id="gender" class="form-control" name="gender">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option> -->

    <label for="country">Country</label>
    <select id="country" class="form-control" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></br>
  
    <input type="submit" name="submit" class="form-control" value="Submit" >
  </form>
</div>

</body>
</html>


