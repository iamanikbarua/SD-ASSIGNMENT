<!DOCTYPE html>
<html lang="en">
<head>
       
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href=  "{{ URL:: to('/employee')}}" class="btn btn-secondary">All Employee</a>
     <a href=  "{{ URL:: to('/')}}" class="btn btn-primary">Create New Employee</a>
        <h2>Edit Employee</h2>
        
  <div class="row">
            <div class="col-6 ">
                @if(Session::has('msg'))
<div class="alert alert-success">
    <strong>{{ Session:: get('msg') }}</strong>
</div>
@endif
             <form action="{{ URL::to('/update/'.$employee->id)}}" method="post">
             <form action="{{ URL::to('/store/'.$employee->id)}}" method="post">
                 {{csrf_field() }}


       <div class="from-goup">
           <label for="">Name</label>
           <input type="text" class="form-control" name ="name" value="{{$employee->name}}">
       </div>
       <div class="from-goup">
           <label for="">Email</label>
           <input type="text" class="form-control" name ="email" value="{{$employee->email}}">
       </div>
       <div class="form-goup">
           <label for="">Salary</label>
           <input type="number" class="form-control" name ="salary" value="{{$employee->salary}}">
       </div>
       <div class="form-group">
           <label for="">Birth Date</label>
           <input type="date" class="form-control" name ="birth_date" value="{{$employee->birth_date}}">
       </div>
       <div class="form-group">
       <label class="form-label" for="">Department</label>
                        <select class="form-select" aria-label="Default select example" name="department">
                            <option value="">SELECT DEPARTMENT</option>
                            <option value="CSE" {{$employee->department=='CSE'?'selected':''}}>Computer Science & Engineering</option>
                            <option value="CE" {{$employee->department=='CE'?'selected':''}}>Civil Engineering</option>
                            <option value="ME" {{$employee->department=='ME'?'selected':''}}>Mechanical Engineering</option>
                        </select>
       </div>

       <div class="form-group">
           <label for="">Active</label>
           <input type="checkbox" name="active" value="{{$employee->active}}" id="">
       </div>

       <div class="form-group">
           <label for="">Gender</label>
           <div class="br"></div>
           <input type="radio" name="gender" value="male" id="">
           <label for=""> Male</label>
           <div class="br"></div>
           <input type="radio" name="gender" value="female" id="">
           <label for="">Female</label>
           <div class="br"></div>
           <input type="radio" name="gender" value="other" id="">
           <label for="">other</label>
       </div>

       <div class="form-group">
           <button type="submit" class="btn btn-primary" >Update</button>
        
           </div>
         </form> 
     </div>
</div>
    </div> 
</body>
</html>
