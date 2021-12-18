<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">List of Students</h1>
        <a href="{{route('students.create')}}" class="btn btn-warning btn-sm">New student</a>
        <div class="table-responsive">
          <table class="table align-middle">
              <tr>
                  <th>#</th>
                  <th>Email</th>
                  <th colspan="4">Options</th>
              </tr>
              @foreach ($students as $student)
              <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->email }}</td>
                  <td width="150px">
                    <a href="{{ route('students.asignar', $student)}}" class="btn btn-success btn-sm">Assign Lesson</a>
                  </td>
                  <td width="10px">
                    <a href="{{ route('students.show', $student)}}" class="btn btn-secondary btn-sm">Show</a>
                  </td>
                  <td width="10px">
                    <a href="{{ route('students.edit', $student)}}" class="btn btn-primary btn-sm">Edit</i></a>
                  </td>
                  <td width="10px">
                    <form action="{{ route('students.destroy', $student) }}" method="POST">
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>