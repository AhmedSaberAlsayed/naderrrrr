<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Dashboard\layouts\HeadDashboard')

</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">

        {{-- @dd($categories) --}}
        <!-- Spinner Start -->
        @include('Dashboard\layouts\Spinner')
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('Dashboard\layouts\Sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">


             <!-- Navbar Start -->
            @include('Dashboard\layouts\Navbar')
            <!-- Navbar End -->
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>المحتوي</th>
                                <th>صوره الخبر</th>
                                <th>الكلمات الداله</th>
                                <th>وقت القرائه</th>
                                <th>الكاتب</th>
                                <th>العنوان الرئيسي</th>
                                <th>العنوان الفرعي</th>
                                <th>حذف</th>
                                <th>تعديل</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($News as $New)
                            <tr>
                                <td> {{ $New->id}}</td>
                                <td> {{ $New->title}}</td>
                                <td> 
                                    <?php 
                                echo $New->content ;
                                    ?>
                                </td>
                                <td>
                                    <img src="{{asset($New->image_path)}}" height="180px" loading="lazy" alt="" >
                                 </td>
                                <td> {{ $New->keyWords}}</td>
                                <td> {{ $New->timeReading}}</td>
                                <td> {{ $New->user->name}}</td>
                                <td> {{ $New->category->title}}</td>
                                <td> <?php 
                                if (isset($New->SupCategory->title)) {
                                    echo $New->SupCategory->title;
                                }else {
                                    echo 'noooo';
                                }
                                    ?>
                                </td>
                                <td>
                                      <form  action="{{ route('News.delete',$New->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-primary"  type="submit">حذف</button>
                                </form>
                                </td>
                                <td>
                                      <form action="{{ route('News.edit')}}" method="get">
                                        @csrf
                                         <input type="hidden" name="News_id" value="{{ $New->id }}">
                                        <button class="btn btn-primary"  type="submit">تعديل</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    {{-- <table border="2">
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
    </table> --}}
    @include('Dashboard\layouts\Footer')

    @include('Dashboard\layouts\JSScript')
</body>
</html>
