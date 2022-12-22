<!DOCTYPE html>
<html lang="it">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>php-todo-list-json</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

   <div id="app">
      <div class="bg-dark vh-100">
         <div class="container">
            <h1 class="text-center py-5 text-light">ToDo List</h1>
            <div class="row justify-content-center">
               <div class="col-5">
                  <div class="card">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                           <span>ciao</span>
                           <i class="fa-regular fa-trash-can p-1"></i>
                        </li>
                     </ul>
                  </div>
                  <div class="py-3">
                     <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Aggiungi un ToDo" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-warning" type="button" id="button-addon2">Aggiungi</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- javascript -->
   <script src="js/main.js"></script>
</body>

</html>