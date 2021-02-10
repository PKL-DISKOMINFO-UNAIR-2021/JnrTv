<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>


<form action="/admin/about/store" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>TITTLE</label>
      <input type="text" class="form-control" name="judul" >
  </div>
  <div class="form-group">
      <label>CONTENT</label>
      <textarea class="form-control" name="content" id="content"></textarea>
  </div>
  <div class="form-group">
      <label>TITTLE_ADDRESS</label>
      <input type="text" class="form-control" name="judul2" >
  </div>
  <div class="form-group">
      <label>CONTENT_ADDRESS</label>
      <textarea class="form-control" name="content2" id="content2"></textarea>
  </div>
  

  <div class="form-group">
      <button class="btn btn-primary btn-block">TambahInformasi</button>
  </div>
  </form>

  
<script >
  CKEDITOR.replace( 'content' );
  CKEDITOR.replace( 'content2' );
</script>

</body>
</html>