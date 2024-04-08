<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="2">
        <th>#</th>
        <th>title</th>
        <th>content</th>
        
        <th>image_path</th>
        <th>keyWords</th>
        <th>timeReading</th>
        <th>createdBy</th>
        <th>categoryID</th>
        <th>supCategoryID</th>
        <th>Delete</th>
        <th>Update</th>

        @foreach ($News as $New)
        <tr>
            <td> {{ $New->id}}</td>
            <td> {{ $New->title}}</td>
            <td> {{ $New->content}}</td>
            <td>
                 <img src="{{asset($New->image_path)}}" alt="" >
             </td>
            <td> {{ $New->keyWords}}</td>
            <td> {{ $New->timeReading}}</td>
            <td> {{ $New->createdBy}}</td>
            <td> {{ $New->categoryID}}</td>
            <td> {{ $New->supCategoryID}}</td>
            <td>
                  <form  action="{{ route('News.delete',$New->id) }}" method="POST">
                @csrf
                <button  type="submit">Delete</button>
            </form>
            </td>
            <td>
                  <form action="{{ route('News.edit')}}" method="get">
                    @csrf
                     <input type="hidden" name="News_id" value="{{ $New->id }}">
                    <button  type="submit">update</button>
                 </form>

            </td>
        </tr>





         @endforeach
    </table>

</body>
</html>
