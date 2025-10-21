<nav class="navbar navbar-expand-lg navbar-light shadow-sm py-2" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3 text-primary" href="/">
            VideoHost
        </a>
        <div class="row">
            <div class="collapse navbar-collapse">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle " type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Категории
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/">Все видео</a></li>
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <button class="btn btn-gradient" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Поиск</button>
            </div>
        </div>
    </div>
</nav>
