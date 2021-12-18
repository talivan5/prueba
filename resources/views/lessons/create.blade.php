<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
        <h5 class="text-center">Create Lesson</h5>
       <div class="card">
           <div class="card-body">
                <form action="{{ route('lessons.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="enter your name">
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{route('lessons.index')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
           </div>
       </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>