<main>

    <section class="blog-sec py-5">
        <div class="container py-5">
            <div class="page-title">
                <p class="fs-6 mb-0">Unlocking the Worlds Expertise</p>
                <h1 class="fs-1 mb-5">Featured Posts</h1>
            </div>
            <div class="blog-grid">
                @include('components.blog-card')
                <div>{{ $posts->links('vendor.pagination.bootstrap-5' ) }}</div>

            </div>
        </div>

    </section>

</main>

