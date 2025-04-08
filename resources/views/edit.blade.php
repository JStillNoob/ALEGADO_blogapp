@vite(['resources/js/app.js'])

<!DOCTYPE html>
<div class="container mt-5" style="max-width: 800px; margin: 0 auto;">

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center">Edit Post</h1>
            <p class="text-center">Edit the post below</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                        <div class="invalid-feedback">Please enter a post title.</div>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Post Content</label>
                        <textarea id="body" name="body" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                        <div class="invalid-feedback">Please enter the post content.</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Update Post</button>
            </form>
        </div>
    </div>
</div>
