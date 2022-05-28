<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body>
    <div class="min-h-screen sm:items-center py-4 sm:pt-0 background">
        <nav>
            <ul class="px-3 nav bg-dark">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/create">Create</a>
                </li>
            </ul>
        </nav>
        <div class="container">
            <h1 class="home-title mt-3">TO DO LIST</h1>
            <h5 class="home-title mb-3">Check your list:</h5>
            <div class="row col-12">
                <div class="card p-3">
                    
                    @foreach ($lists as $list)
                        <h5 class="card-title">{{ $list->title }}</h5>
                        <p class="card-text">{{ $list->description }}</p>
                    @endforeach
                    @foreach ($item as $value)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="itemtodo" @if ($value->checked === 1) checked @endif>
                        <label class="form-check-label" for="itemtodo"> {{ $value->todo_item }}</label>
                    </div>
                    @endforeach
                    <form class="form-group">

                            <label class="form-check-label" for="newitem"><input type="text" class="" placeholder="Insert a to do item here." required></label>
                            <button type="submit" class="btn btn-primary mb-2">Criar item</button>

                      </form>
                    {{-- <div class="form-check">
                        <input class="" type="checkbox" id="newitem">
                        <label for="newitem"><input type="text" required placeholder="Insert a to do item here."></label>
                    </div> --}}
                    

                    <div class="mt-3 text-end">
                        <div class="form-group">
                            @foreach ($lists as $list)
                            <form action="{{ route('todo.delete') }}" method="POST" class="display-inline">
                                @csrf
                                <input type="hidden" name="id" value="{{ $list->id }}">
                                <button class="btn btn-danger px-1 py-1" type="submit"><img src="{{ URL('/images/trash.png') }}" height="24"></button>
                                <a href="/" class="btn btn-primary">Return</a>
                                <button class="btn btn-success">Save</button>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
