<html>
<body>

<form action="index.php" method="get">
<p>
  Name: <input type="text" name="username"><br>
</p>
<p>
  E-mail: <input type="text" name="email"><br>
</p>
<input type="submit">
</form>
<script>
  p{
    margin: 10rem;
    color: red;
    padding:30px;
  
  }
  input{
    margin:10rem;
  }
  
</script>
  <p>
    Your name is <?php echo $_GET['username']?>
  </p>
  <p>
    Your email is <?php echo $_GET['email']?>
  </p>


  
</body>
</html>