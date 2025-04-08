@vite(['resources/js/app.js'])
<!DOCTYPE html>

<div class="container mt-5" style="max-width: 800px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center">Create Post</h1>
            <p class="text-center">Fill out the form to create a new post</p>
         
            <form action="{{ route('storeNewPost') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                        <div class="invalid-feedback">Please enter a post title.</div>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Post Content</label>
                        <textarea id="body" name="body" class="form-control" required></textarea>  <!-- Changed name to body -->
                        <div class="invalid-feedback">Please enter the post content.</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Create Post</button>
            </form>
        </div>
    </div>
</div>
