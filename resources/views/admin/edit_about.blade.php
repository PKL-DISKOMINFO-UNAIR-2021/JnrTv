<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>

@foreach ( $about as $ab)
<form action="/admin/about/update/{{ $ab->id}}" method="POST" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
      <label>TITLE</label>
      <input type="text" class="form-control" name="judul" value="{!! $ab->title !!}">
  </div>
  <div class="form-group">
      <label>CONTENT</label>
      <textarea class="form-control" name="content" id="content">{!! $ab->content !!}</textarea>
  </div>
  <div class="form-group">
      <label>TITLE_ADDRESS</label>
      <input type="text" class="form-control" name="judul2" value="{!! $ab->title_address !!}">
  </div>
  <div class="form-group">
      <label>CONTENT_ADDRESS</label>
      <textarea class="form-control" name="content2" id="content2">{!! $ab->content_address !!}</textarea>
  </div>
  

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Informasi</button>
  </div>

  </form>
  @endforeach
  
<script >
  CKEDITOR.replace( 'content' );
  CKEDITOR.replace( 'content2' );
</script>

</body>
</html>