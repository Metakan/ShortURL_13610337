<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>index</title>
</head>
<body>
<div class="container my-4">
    @if($message = Session::get('success'))
        <p> {{ $message }} </p>
    @endif



    <p><h4>Your Quota Remaining {{ 10-count($urls) }}/10</h4></p>

    @if(!$urls->isEmpty())
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th scope="col">long url</th>
                <th scope="col">short url</th>
                <th scope="col">create</th>
                {{--            <td>long url</td>--}}
                {{--            <td>short url</td>--}}
                {{--            <td>create</td>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($urls as $url)
                <tr>
                    <td>{{ $url->long_url }}</td>
                    <td><a href="/gt/{{ $url->short_url}}" target="_blank"> {{ $url->short_url}}</a></td>
                    <td>{{ $url->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-outline-primary"><a href="/new">create</a></button>
    @endif
</div>
</body>
</html>
