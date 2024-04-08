<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create News</title>
</head>
<body>
    <form action="{{ route('News.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title" >
        <input type="text" name="content" placeholder="content" >
        <input type="file" name="image_path" placeholder="image_path" >
        <input type="text" name="keyWords" placeholder="keyWords" >
        <input type="text" name="timeReading" placeholder="timeReading" >
        <input type="text" name="createdBy" placeholder="createdBy" >
        <input type="number" name="categoryID" placeholder="categoryID" >
        <input type="number" name="supCategoryID" placeholder="supCategoryID" >
        <input type="submit" value="Add News">
    </form>
</body>
</html>
