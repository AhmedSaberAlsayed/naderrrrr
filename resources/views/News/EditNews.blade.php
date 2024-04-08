<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News update</title>
</head>
<body>

    <form action="{{ route('News.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="News_id" value="{{ $News->id }}">
        <input type="text" name="title" placeholder="title" value="{{ $News->title }}">
        <input type="text" name="content" placeholder="content" value="{{ $News->content }}">
        <input type="file" name="image_path" placeholder="image_path" value="{{ $News->image_path }}">
        <input type="text" name="keyWords" placeholder="keyWords" value="{{ $News->keyWords }}">
        <input type="text" name="timeReading" placeholder="timeReading" value="{{ $News->timeReading }}">
        <input type="text" name="createdBy" placeholder="createdBy" value="{{ $News->createdBy }}">
        <input type="number" name="categoryID" placeholder="categoryID" value="{{ $News->categoryID }}">
        <input type="number" name="supCategoryID" placeholder="supCategoryID" value="{{ $News->supCategoryID }}">
        <input type="submit" value="Update">
    </form>
</body>
</html>
