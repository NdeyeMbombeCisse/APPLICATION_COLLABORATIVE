
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>php CRUD APPLICATION</title>
    <style>
        .navbar{
            background-color:blue;
            color:white;
            text-align: center;
            height: 100px;
        }

        .container h1{
            margin-top:50px;
        }

        .table{
            text-align:center;
        }

        .titre tr{
            background-color: black;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
        <p><h1>CRUD APPLICATION</h1></p>
        </nav>
        </header>
        <div class="container">
             <a href="index.php"><h1>Ajouter un Utilisateur</h1></a>



<table class="table">
  <thead class="titre">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href="" class="link-dark"></a><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></td>
    </tr>
    
  </tbody>
</table>
        </div>

        
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>