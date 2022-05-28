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
        
        <div class="container">
        <h1 class="home-title mt-3">TO DO LIST</h1>
        <h5 class="home-title mb-3">All your lists are here:</h5>
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
                @foreach ($lists as $list)   
                    <div class="card col-12 col-md-6 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$list->title}}</h5>
                        <p class="card-text">{{$list->description}}</p>
                        <div class="text-end">
                            <form style="display:inline" action="{{route('todo.show', $list->id)}}" method="get">
                                    
                                <input type="hidden" name="id" value="{{$list->id}}">
                                <button class="btn btn-primary px-3" type="submit">See List</button>
                            </form>
                                <form style="display:inline" action="{{route('todo.delete')}}" method="POST">
                                        @csrf
                                    <input type="hidden" name="id" value="{{$list->id}}">
                                    <button class="btn btn-danger px-1 py-1" type="submit"><img src="{{URL('/images/trash.png')}}" height="24"></button>
                                </form>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mt-3 text-end">
                    <a href="/create" class="btn btn-primary" type="button">Create a new To Do List</a>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>