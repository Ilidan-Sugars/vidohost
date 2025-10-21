<footer>
    <div class="modal fade text-white" data-bs-theme="dark" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Поиск по названию</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex" role="search" action="{{ route('search') }}" method="POST">
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Введите название видео..." aria-label="Search" required />
                        <button class="btn btn-outline-success" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
