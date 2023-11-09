<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center" >
        <div class="row">
            <div class="col s12">
                <h1>CRUD laravel</h1>
                <hr>
                   <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
                   <hr>
                        <table class="table">
                           <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Classe</th>
                                <th>Actions</th>
                            </tr>
                           </thead>
                           <tbody>
                            <tr>
                                <td>1</td>
                                <td>AZER</td>
                                <td>Judes</td>
                                <td>5eme</td>
                                <td>
                                    <a href="#"  class="btn btn-info">Update</a> 
                                    <a href="#"  class="btn btn-danger">Delete</a> 
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>RASAQ</td>
                                <td>Axel</td>
                                <td>5eme</td>
                                <td>
                                    <a href="#"  class="btn btn-info">Update</a> 
                                    <a href="#"  class="btn btn-danger">Delete</a> 
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>SAQ</td>
                                <td>Axuiel</td>
                                <td>5eme</td>
                                <td>
                                    <a href="#"  class="btn btn-info">Update</a> 
                                    <a href="#"  class="btn btn-danger">Delete</a> 
                                </td>
                            </tr>
                           </tbody>
                        </table>
               
            </div>
    </div>

    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>