<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

  <div class="container">
  <div style="text-align:center">
    <h2>CONTACT US!</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="photos/contact.jpg" style="width:100%">
    </div>
    <div class="column">

<form action="contactTest2.php" method="post" >
<label>Name</label>
<input type="text" name="name" placeholder="Name"  required>

<label>Email</label>
<input type="email" name="email" placeholder="Email" required>

<label>Message</label>
<textarea name="msg" placeholder="write your message here" required></textarea>
<br>
<button id="btn" >Submit</button> <br>
<span id="response"></span>
</form>

</div>
</div>
</div>

</body>
</html>


