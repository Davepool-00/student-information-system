<!-- resources/views/students/index.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT 106 project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>
   <h1 class="text-center bg-primary">Student Information</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($students as $student)

             <tr>
      <td>{{ $student->name }} ({{ $student->age }} years old)</td>
      <td> @foreach ($student->courses as $course)
                        {{ $course->course_title }}
                        <br>
                    @endforeach</td>
                     <td> @foreach ($student->courses as $course)
                       {{ $course->course_description }}
                        <br>
                    @endforeach</td>
    </tr>
        @endforeach

  </tbody>
</table>



</body>
</html>
