<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>createSup_category</title>
        @include('Dashboard\layouts\HeadDashboard')
</head>
<body>
    {{-- @dd($categories) --}}
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
            {{-- @include('Dashboard\layouts\Navbar') --}}
            <!-- Navbar End -->
    <form action="{{  route('Sup_category.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="sup">
        {{-- <input type="text" name="categoryID"> --}}

        <select name="categoryID" placeholder="category">
            <option value="" disabled selected>Choose a category</option>
            @foreach ($categories as $Category)
                
            
            <option value="{{$Category->id}}">{{$Category->title}}</option>
            @endforeach

        </select>

        <input type="submit" value="ADD">
    </form>
    @include('Dashboard\layouts\Footer')

    @include('Dashboard\layouts\JSScript')

</body>
</html>
