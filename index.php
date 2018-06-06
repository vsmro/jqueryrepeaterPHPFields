<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <title>Jquery PHP repeaater</title>
</head>
<body>
  <div class="container">
    <h2>Dinamic fields with Jquery</h2>
    <div>
      <div class="panel panel-default">
        <div class="panel-heading"> <h3>Add a School Course</h3></div>
        <div class="panel-body">
          <span id="success_result"></span>
          <form action="" method="post" id="repeater_form">
            <div class="form-group">
              <label for="name">Student Name</label>
              <input type="text" name="name" id="name" class="form-control" required/>
            </div>
            <div id="repeater">
              <div class="repeater-heading">
                <button type="button" class="btn btn-primary repeater-add-btn">Add Courses</button>
              </div>
              <div class="clearfix"></div>
              <div class="items" data-group="courses_group">
                <div class="item-content">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-9">
                        <label for="">Select Courses</label>
                        <select class="form-control" data-skip-name="true" data-name="courses[]" required>
                          <option value="">Select</option>
                          <option value="Romana">Limba Romana</option>
                          <option value="Matematica">Matematica</option>
                          <option value="Istorie">Istorie</option>
                          <option value="Geografie">Geografie</option>
                          <option value="Fizica">Fizica</option>
                          <option value="Chimie">Chimie</option>
                          <option value="Desen">Desen</option>
                          <option value="Sport">Sport</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <button id="remove-btn" class="btn btn-danger" onclick="$(this).parents('.items').remove()"> Remove</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <br><br>
              <input type="submit" value="insert" name="insert" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--SCRIPTS-->
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="repeater.js"></script>
  <script src="app.js"></script>
  
</body>
</html>