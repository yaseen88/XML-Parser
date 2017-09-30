<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container">
  <header>
    <h1 class="text-center">XML Parser Program</h1>
  </header>


    <form method="post" action="db.php">
      <div class="form-group">
        <label for="link">Link</label>
        <input type="url" value="http://www.feedforall.com/sample.xml" class="form-control" id="link" name="link" placeholder="Insert Link" required>
      </div>

  <section class="col-md-6">
      <fieldset class="well">
       <legend class="text-danger">Database Server Connection</legend>
      <div class="form-group">
        <label for="db">Database Server</label>
        <select class="form-control" id="table" required name="dbserver">
          <option value="">Select a Database Server</option>
          <option value="dsfs">Main server</option>
          <option value="localhost">Localhost</option>
        </select>
      </div>

      <div class="form-group">
        <label for="dbuser">Db User</label>
        <input type="text" value="yasoo" class="form-control" id="table" placeholder="Insert Database User" name="dbuser" required>
      </div>

      <div class="form-group">
        <label for="dbuserpass">Db User Password</label>
        <input type="password" value="yasoo123" class="form-control" id="table" placeholder="Insert Database User password" name="dbuserpass">
      </div>
    </fieldset>
</section>

<section class="col-md-6">
    <fieldset style="padding-bottom: 38px;" class="well">
     <legend class="text-danger">Save Data To:</legend>

    <div class="form-group">
      <label for="db">Database</label>
      <select class="form-control" id="table" required name="db">
        <option value="">Select a Database</option>
        <option value="xmldb">XMLdb</option>
        <option value="sdfsd">2nd database</option>
      </select>
    </div>

    <div class="form-group">
      <label for="table">Table</label>
      <select class="form-control" id="table" required name="table">
        <option value="">Select a Table</option>
        <option value="dsfs">Products</option>
        <option value="posts">Posts</option>
      </select>
    </div>
</fieldset>
      <button type="submit" class="btn btn-primary btn-block">Submit</button>

    </section>
    </form>
</div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
