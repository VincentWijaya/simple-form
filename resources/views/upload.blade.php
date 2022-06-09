<html>
  <head>
    <title>Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
    @endif

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
    
    <div class="container">
      <h1>Upload Data</h1>
      <form action="/upload" method="POST" enctype="multipart/form-data">
          @csrf <!-- {{ csrf_field() }} -->
          <div>
            <b>Nama Lengkap:</b><br/>
            <input type="text" name="fullName">
          </div>

          <br>
          <div>
            <b>Jenis Kelamin:</b><br/>
            <input type="radio" name="gender" value="laki-laki" id="laki-laki">
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" name="gender" value="perempuan" id="perempuan">
            <label for="perempuan">Perempuan</label>
          </div>

          <br>
          <div>
            <b>Tempat Lahir:</b><br/>
            <input type="text" name="birthPlace">
          </div>

          <br>
          <div>
            <b>Tanggal Lahir:</b><br/>
            <input type="date" name="birthday">
          </div>

          <br>
          <div>
            <b>File Gambar:</b><br/>
            <input type="file" name="image">
          </div>

          <br>
          <div>
            <b>File Attachment:</b><br/>
            <input type="file" name="attachment">
          </div>

          <br>
          <div>
            <b>File CV:</b><br/>
            <input type="file" name="cv">
          </div>

          <br>
          <input type="submit" value="Upload">
          <input type="reset" value="Reset">
      </form>
    </div>
  </body>
</html>