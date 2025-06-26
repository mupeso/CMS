@extends('layout.main')

@section("title", "post")

@section("content")

 <!-- Page Header-->
    <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Edit Article</h1>
                        {{-- <span class="meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on August 24, 2023
                        </span> --}}
                    </div>
                </div>
            </div>

        </div>
        
    </header>
      <!-- Post Content-->
    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Create New Article</h4>
            </div>
            <div class="card-body">
                @if (session("success"))
                    <div class="alert alert-success" role="alert">
                        {{ session("success") }}
                    </div>

                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>

                            @endforeach
                        </ul>

                    </div>

                @endif
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    {{-- <form action="" method="POST" enctype="multipart/form-data"> --}}

                        @csrf
                        
                            
                        <div class="mb-3">
                            <label for="title" class="form-label">Article Title</label>
                            <input type="text" value="{{ old('title', $moh->title ?? '') }}" name="title" id="title" class="form-control" placeholder="Enter title"
                            >
                        </div>
                        
                        
                        

                        <div class="mb-3">
                            <label for="body" class="form-label">Article Body</label>
                            <input name="body" value="{{ old('body', $moh->body ?? '') }}" id="body" rows="6" class="form-control"
                                placeholder="Write your article..." ></input>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="category_id">Category:</label>
                            <select name="categorie_id" class="form-select" >
                                <option value="">-- Choose Category --</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>  --}}

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        </div> 

                        <button type="submit" class="btn btn-success">Publish</button>
                    </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
</body>

</html>