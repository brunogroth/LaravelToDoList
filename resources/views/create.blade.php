<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a new To do List</title>
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="app.css">
        <!-- JavaScript Bundle with Popper -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="min-h-screen sm:items-center py-4 sm:pt-0 background">
        <!-- Menu -->
        <nav>

            <ul class="px-3 nav bg-dark">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/create">Create</a>
                </li>
            </ul>
        </nav>
        <!-- Title -->
        <div class="container">
                <div class="home-title mt-3 mb-3">
                    <h1>TO DO LIST</h1>
                    <h5>Create a new to do list</h5>
                </div>

            <div class="row">
                <form action="{{route('todo.store')}}" method="POST">
                @csrf              
                <div class="col-12 col-md-6 mb-3">
                    <label for="title" class="form-label">Title </label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Ex: Supermarket List" required>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control lh-lg" placeholder="Ex: List of all the things that i need to buy at the market this month." aria-label="With textarea"></textarea>
                    <input type="submit" hidden />
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <label for="color" class="form-label">Color </label>
                    <select id="color" name="color" class="form-control" required>
                        <option value="white" class="text-secondary" selected>White</option>
                        <option value="blue" class="text-info">Blue</option>
                        <option value="red" class="text-danger">Red</option>
                        <option value="yellow" class="text-warning">Yellow</option>
                        <option value="dark" class="text-dark">Dark</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-4 text-end">
                        <a href="/" class="btn btn-danger" type="button">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>