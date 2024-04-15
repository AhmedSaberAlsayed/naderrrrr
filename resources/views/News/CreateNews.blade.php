<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create News</title>
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
                <h6 class="mb-4">Horizontal Form</h6>
                <form action="{{ route('News.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" placeholder="title" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">content</label>
                        <div class="col-sm-10">
                            <input type="text" name="content" placeholder="content" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">keyWords</label>
                        <div class="col-sm-10">
                            <input type="text" name="keyWords" placeholder="keyWords" class="form-control" id="inputEmail3">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">timeReading</label>
                        <div class="col-sm-10">
                            <input  type="text" name="timeReading" placeholder="timeReading" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">createdBy</label>
                        <div class="col-sm-10">
                            <input type="text" name="createdBy" placeholder="createdBy" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Choose a image</label>
                        <div class="col-sm-10">
                            <input class="form-control bg-dark" name="image_path" placeholder="image_path"  type="file" id="formFile">
                            {{-- <input type="text" name="createdBy" placeholder="createdBy" class="form-control" id="inputPassword3"> --}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Choose a category</label>
                        <div class="col-sm-10">
                            <select name="categoryID" placeholder="category" class="form-select mb-3" aria-label="Default select example">
                                <option value="" disabled selected>Choose a category</option>
                                @foreach ($categories as $Category)
                                <option value="{{$Category->id}}">{{$Category->title}}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Choose a Sup_category</label>
                        <div class="col-sm-10">
                            <select name="supCategoryID" placeholder="supCategoryID" class="form-select mb-3" aria-label="Default select example">
                                <option value="" disabled selected>Choose a Sup_category</option>
                                @foreach ($Sup_categories as $Sup_category)
                                <option value="{{$Sup_category->id}}">{{$Sup_category->title}}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">اضافه خبر </button>
                </form>
            </div>
    </form>
    @include('Dashboard\layouts\Footer')
    @include('Dashboard\layouts\JSScript')
</body>
</html>
