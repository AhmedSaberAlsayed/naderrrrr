<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Responsive Table</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>category_Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td> {{ $category->id}}</td>
                    <td> {{ $category->title}}</td>
                    <td>
                          <form  action="{{ route('category.delete',$category->id) }}" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="category_id" value="{{ $category->id }}"> --}}
                        <button  type="submit">Delet</button>
                    </form>
                    </td>
                    <td>
                          <form action="{{ route('category.edit')}}" method="get">
                            @csrf
                             <input type="hidden" name="category_id" value="{{ $category->id }}">
                            <button  type="submit">update</button>
                         </form>
            
                    </td>
                </tr>
            
            
            
            
            
                 @endforeach
               
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
