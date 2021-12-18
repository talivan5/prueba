<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
    </style>
  </head>
  <body>
      <div class="container mt-5">
        <h1 class="text-center">Assign Subject</h1>
        <h3>{{$student->email}}</h3>
        <form action="{{route('students.asignarMateria')}}" method="POST">
            @csrf
            <select class="selectpicker" multiple data-live-search="true" name="ids[]">
            @foreach ($lessons as $lesson)
                    <option value="{{$lesson->id}}">{{$lesson->name}}</option>
            @endforeach
            </select>
            <div class="text-center" style="margin-top: 10px;">
            <input type="text"  style="visibility:hidden" value="{{$student->id}}" name="id">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
      </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
    </script>
  </body>
</html>