<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <body>
        <div class="min-h-screen sm:items-center py-4 sm:pt-0 background">
            <nav>
                <ul class="px-3 nav bg-dark">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lists</a>
                <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">todo</a></li>
                </ul>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </nav>
            <div class="container">
            <h1 class="home-title mt-3">TO DO LIST</h1>
            <h5 class="home-title mb-3">Choose or create a new to do list</h5>

        <div class="card p-3 bg-dark">
            <div class="card w-50">
                <div class="card-body">
                  <h5 class="card-title">Todo List Title</h5>
                  <p class="card-text">To do list Complete Description with everything you need to know.</p>
                    <div class="text-end">
                        <button class="btn btn-primary px-3" type="button">See List</button>
                    </div>
                </div>
              </div>

            <div class="mt-3 text-end">
                <a href="/create" class="btn btn-primary" type="button">Create a new To Do List</a>
            </div>
        </div>
    </div>
    </body>
</html>
