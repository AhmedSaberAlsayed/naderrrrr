<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>createSup_category</title>
</head>
<body>

    <form action="{{  route('Sup_category.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="sup">
        <input type="text" name="categoryID">
        <input type="submit" value="ADD">
    </form>
</body>
</html>
