<!doctype html>
   <html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>E Mutasi</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
       <div class="container">
           <h1 class="mt-5">Register</h1>
           <form action="{{ url('/register') }}" method="POST">
               @csrf
               <div class="mb-3">
                   <label for="username" class="form-label">Email address</label>
                   <input type="email" class="form-control" id="username" name="username" required>
               </div>
               <div class="mb-3">
                   <label for="password" class="form-label">Password</label>
                   <input type="password" class="form-control" id="password" name="password" required>
               </div>
               <button type="submit" class="btn btn-primary">Register</button>
           </form>
       </div>
   </body>
   </html>