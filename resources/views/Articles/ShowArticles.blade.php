@extends('layout.main')

@section("title", "post")

@section("content")
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Your Articles</h1>
                        <a href="{{ route('post') }}" type="submit" class="btn btn-success">Create New Article</a>
                    </div>
                </div>
            </div>

        </div>

    </header>


    <div class="container mt-5">
        @if (session("success"))
            <div class="alert alert-success" role="alert">
                {{ session("success") }}
            </div>

        @endif
        @if ($articles->count() > 0)
            @foreach ($articles as $article)
                <div class="card mb-3">
                    <div class="card-body">
                        @if ($article->iamge_path)
                            <img src="{{ asset('storage/' . $article->iamge_path) }}" class="img-fluid rounded mb-3"
                                style="max-width: 100%; height: 250px; object-fit: cover;" alt="Article Image">

                            {{-- <img src="{{ asset('storage/' . $article->iamge_path) }}" width="200" class="mt-2"> --}}
                        @endif
                        <p><strong>Category:</strong> {{ $article->Categorie->name ?? 'No Category' }}</p>



                        <h4>{{ $article->title }}</h4>


                        <p>{{ Str::limit($article->body, 150) }}</p>


                        <strong></strong>
                        {{ $article->created_at->format('F d, Y - h:i A') }}


                        </p>
                        <div class="action-btn">
                            <!-- Interaction buttons (like, comment, share) -->
                            <div class="interaction-btn">
                                <!-- Like button -->
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>

                                <!-- Comment button -->
                                <span>
                                    <i class="fa-regular fa-comment"></i>
                                </span>

                                <!-- Share button -->
                                <span>
                                    <i class="fa-regular fa-paper-plane"></i>
                                </span>
                            </div>
                        </div>
                        <form action="{{ route('article.destroy', $article->id) }}" method="post">

                            @method("DELETE")
                            @csrf

                            <button type="submit" class="btn btn-success">delete</button>

                        </form>
                    </div>

                </div>
            @endforeach
        @else
            <p>No articles yet.</p>
        @endif
    </div>






@endsection






</body>

</html>