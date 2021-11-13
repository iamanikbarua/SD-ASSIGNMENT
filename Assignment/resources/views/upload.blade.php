<html lang="en">
<head>
  <title>Laravel  Image Intervention</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
    <h3 class="jumbotron">Image Intervention </h3>
    <form class="form-horizontal"  method="post" action="{{url('upload-image')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4">
          <input type="txt" name="alttext" placeholder="Alt-text" class="form-control">
          </div>
        <div class="form-group col-md-4">
          <input type="file" name="filename[]" id="file-input" class="form-control" multiple>
          </div>
          
          <div id="preview">

          </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div> 
        <div>
        </div>  
        <div>
      
        </div>  

        <div>
      
        </div> 
  </form>

  </div> 
  <div>
    @if ($image)
       @foreach($image as $img)
       <img width="200px" hight="200px" src = "{{ asset('thumbnail/'.$img->filename) }}" alt="">
      @endforeach
    @endif
  </div>
   <!-- <script>
      filename.onchange = evt => {
  const [file] = filename.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}

   </script> -->

<script>
function previewImages() {

var preview = document.querySelector('#preview');

if (this.files) {
  [].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
    return alert(file.name + " is not an image");
  } // else...
  
  var reader = new FileReader();
  
  reader.addEventListener("load", function() {
    var image = new Image();
    image.height = 100;
    image.title  = file.name;
    image.src    = this.result;
    preview.appendChild(image);
    });
    reader.readAsDataURL(file);
  }
  }
    document.querySelector('#file-input').addEventListener("change", previewImages);
        </script>

</body>
   </html>