<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Laravel</title>
  <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ url('') }}">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('') }}">Bikes</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row w-100" style="margin: auto; margin-top: 150px">
    <div class="row" style="margin-top: 20px; margin: auto; width: 60%">
      <h4 class="p-2">Bikes</h4>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Bicicleta Wheelies</td>
            <td>1000</td>
            <td>
              <a href="{{ url('delete/1') }}">
                @csrf
                @method('delete')
                delete
              </a>
            </td>
            <td>
              <a href="{{ url('edit/1') }}">
                edit
              </a>
            </td>
            <td>
              <a href="{{ url('show/1/Bicicleta Wheelies/1000') }}">show</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Bicicleta wheelies 2</td>
            <td>2000</td>
            <td>
              <a href="{{ url('delete/2') }}">
                @csrf
                @method('delete')
                delete
              </a>
            </td>
            <td>
              <a href="{{ url('edit/2') }}">edit</a>
            </td>
            <td>
              <a href="{{ url('show/2/Bicicleta wheelies 2/2000') }}">show</a>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="{{ url('create') }}" class="btn btn-success">Add bike</a>
    </div>
  </div>

  <footer class="container mt-3">
    <p>&copy; IZV 2022</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>