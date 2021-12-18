<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
        <h5 class="text-center">List of Lessons</h5>
        <a href="{{route('lessons.create')}}" class="btn btn-warning btn-sm">New student</a>
        <div class="table-responsive">
          <table class="table aling-middle">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th colspan="4">Options</th>
            </tr>
            @foreach ($lessons as $lesson)
            <tr>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->name }}</td>
                <td width="150px">
                  <a href="{{ route('lessons.asigLesson', $lesson)}}" class="btn btn-success btn-sm">Assign Student</a>
                </td>
                <td width="10px">
                  <a href="{{ route('lessons.show', $lesson)}}" class="btn btn-secondary btn-sm">Show</a>
                </td>
                <td width="10px">
                  <a href="{{ route('lessons.edit', $lesson)}}" class="btn btn-primary brn-sm">Editar</a>
                </td>
                <td width="10px">
                  <form action="{{ route('lessons.destroy', $lesson) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>