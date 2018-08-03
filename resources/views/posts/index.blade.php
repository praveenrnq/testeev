<!DOCTYPE html>
<html>
<head>
    <title>PHPZONE - Laravel 5 column sorting with pagination example with kyslik/column-sortable package</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h3 class="text-center">PHPZONE - Laravel 5 column sorting with pagination example with kyslik/column-sortable package</h3>
    <table class="table table-bordered">
        <tr>
            <th>@sortablelink('id')</th>
            <th>@sortablelink('title')</th>
            <th>@sortablelink('status')</th>
            <th>@sortablelink('author')</th>
            <th>@sortablelink('created_at','Created At')</th>
        </tr>
        @if($posts->count())
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->status }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    {!! $posts->appends(request()->except('page'))->render() !!}
</div>


</body>


</html>