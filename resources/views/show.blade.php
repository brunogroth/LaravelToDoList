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
                @if($errors->any())
                        <h4>{{$errors->first()}}</h4>
                    @endif
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif    
                <div class="card p-3">
                        <h5 class="card-title">{{ $list->title }}</h5>
                        <p class="card-text">{{ $list->description }}</p>
                    @foreach ($item as $value)
                    <form class="form-check">
                        <input class="form-check-input" type="checkbox" id="itemtodo" @if ($value->checked === 1) checked @endif>
                        <label class="form-check-label" for="itemtodo"> {{ $value->todo_item }}</label>
                    </form>
                    @endforeach
                    <form class="form-inline" action="{{route('item.store')}}" method="POST">
                        @csrf
                        <div class="form-group my-2">
                            <input type="hidden" name="todo_list_id" value="{{$list->id}}"/>
                            <input type="hidden" name="checked" value="0"/>
                            <input type="text" name="todo_item" class="pt-2" placeholder="Insert a to do item here." required>
                            <button type="submit" class="btn btn-primary mb-2">Create item</button>
                        </div>
                    </form>
                    <div class="mt-3 text-end">
                        <div class="form-inline list-inline ">
                            <form action="{{ route('item.delete') }}" method="POST" class="list-inline-item mx-0">
                                @csrf
                                <input type="hidden" name="id" value="{{ $list->id }}">
                                <button class=" list-inline-item btn btn-danger " class="form-control" type="submit">Empty To Do List</button>
                            </form>
                                <a href="/" class=" list-inline-item btn btn-primary mx-0">Return</a>
                                <button class="btn btn-success mx-0">Save</button>
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
