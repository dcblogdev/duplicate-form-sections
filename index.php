<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Duplicate Form Sections</title>
  <style type="text/css">
  a {
    color:#679CCA;
  }
  </style>
</head>
<body>

<h1>Duplicate Form Sections</h1>

<form>

<div id="sections">
  <div class="section">
    <fieldset>
        <legend>User</legend>

        <p>
            <label for="firstName">First Name:</label>
            <input name="firstName[]" id="firstName" value="" type="text" />
        </p>

        <p>
            <label for="lastName">Last Name:</label>
            <input name="lastName[]" id="lastName" value="" type="text" />
        </p>

        <p><a href="#" class='remove'>Remove Section</a></p>

    </fieldset>
  </div>
</div>

<p><a href="#" class='addsection'>Add Section</a></p>

</form>

<script src="js/jquery.js"></script>
<script src="js/app.js"></script>
</body>
</html>
