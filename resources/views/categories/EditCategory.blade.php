<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{  route('category.update') }}" method="post">
        @csrf
        <input type="hidden" name="category_id"  value="{{ $category->id }}" >
        <input type="text" name="title" value="{{ $category->title }}" >
        <input type="submit" value="ADD">
    </form>
</body>
</html>
