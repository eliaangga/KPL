<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<style>
.container {
  margin-top : 300px;
}
body {
  background-color: lightblue;
}
</style>
<body>

<div class="container">
  <h2>Elia Angga</h2>
  <form name="finput" method="get" action="KPL">
    <div class="form-group">
      <label for="usr">Masukkan:</label>
      <input type="text" class="form-control" id="usr" name="nama">
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    <br><br><br>
    <div class="form-group">
      <label for="pwd">Hasil:</label>
      <input type="text" class="form-control" id="msg" value="Halo <?php echo $_GET["nama"]; ?>">
      
    </div>
  </form>
</div>


</body>
</html>