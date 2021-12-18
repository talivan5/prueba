<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
        <h5 class="text-center">Edit Student</h5>
       <div class="card">
           <div class="card-body">
                <form action="{{ route('students.update',$student)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" value="{{$student->email}}" name="email">
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('students.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
           </div>
       </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>