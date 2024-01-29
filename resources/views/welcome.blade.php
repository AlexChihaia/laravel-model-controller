<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>

    @vite('resources/js/app.js')
</head>



    <div class="container bg-secondary">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-3 py-5">
                    <div class="card bg-primary">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Released in: {{ $movie->date }}</p>
                            <p class="card-text">Production nationality: {{ $movie->nationality }}</p>
                            <p class="card-text">Vote: {{ $movie->vote }}</p>
                            <p class="card-text">Original title: {{ $movie->original_title }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


<body>

</body>

</html>