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
    <th>SupCategory_Name</th>
    <th>categoryID</th>

    @foreach ($Sup_Categories as $Sup_category)
    <tr>
        <td> {{ $Sup_category->id}}</td>
        <td> {{ $Sup_category->title}}</td>
        <td> {{ $Sup_category->categoryID}}</td>
        <td>
              <form  action="{{ route('Sup_category.delete',$Sup_category->id) }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="category_id" value="{{ $category->id }}"> --}}
            <button  type="submit">Delet</button>
        </form>
        </td>
        <td>
              <form action="{{ route('Sup_category.edit')}}" method="get">
                @csrf
                 <input type="hidden" name="Sup_category" value="{{ $Sup_category->id }}">
                <button  type="submit">update</button>
             </form>

        </td>
    </tr>





     @endforeach
</table>

<div class="bg-secondary rounded h-100 p-4">
    <h6 class="mb-4">Responsive Table</h6>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">ZIP</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>jhon@email.com</td>
                    <td>USA</td>
                    <td>123</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mark@email.com</td>
                    <td>UK</td>
                    <td>456</td>
                    <td>Member</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>jacob@email.com</td>
                    <td>AU</td>
                    <td>789</td>
                    <td>Member</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
