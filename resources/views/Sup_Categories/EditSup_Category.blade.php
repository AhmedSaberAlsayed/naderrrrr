<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sup_category.update</title>
</head>
<body>
    <form action="{{  route('Sup_category.update') }}" method="post">
        @csrf
        <input type="hidden" name="Sup_category"  value="{{ $Sup_Category->id }}" >
        <input type="text" name="title" value="{{ $Sup_Category->title }}" >
        <input type="text" name="categoryID" value="{{ $Sup_Category->categoryID }}" >
        <input type="submit" value="update">
    </form>
</body>
</html>
