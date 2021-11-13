<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
    <div class = "container">
        <h2>
            Create Employee
        </h2>
   
        <form method= "post" action="{{ URL :: to('/store-employee')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class ="form-control" name = "name" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email"class ="form-control" name = "email" id="">
            </div>
            <div class="form-group">
                <label for="">Birth Date</label>
                <input type="date"class ="form-control" name = "birth_date" id="">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number"class ="form-control" name = "salary" id="">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                        
                            <div class="custom-control custom-radio pmd-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input", required>
                    <label class="custom-control-label pmd-radio-ripple-effect" for="customRadioInline1">Male</label>
                </div>
                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input">
                    <label class="custom-control-label pmd-radio-ripple-effect" for="customRadioInline2">Female</label>
                </div>
                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3">Others</label>
                </div>

            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea id="form21" class="md-textarea form-control" rows="3"></textarea>
                
                </div>

          <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>

            </div>
            
        </form>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>