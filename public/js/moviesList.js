const movies = window.moviesFromPHP || []; // Dữ liệu phim từ PHP
const moviesPerPage = 4;
let currentPage = 1;

function updatePaginationButtons() {
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    if (currentPage === 1) {
        prevBtn.classList.add('disabled');
    } else {
        prevBtn.classList.remove('disabled');
    }

    if (currentPage * moviesPerPage >= movies.length) {
        nextBtn.classList.add('disabled');
    } else {
        nextBtn.classList.remove('disabled');
    }
}

document.getElementById('prev-btn').addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderMovies();
    }
});

document.getElementById('next-btn').addEventListener('click', () => {
    if (currentPage * moviesPerPage < movies.length) {
        currentPage++;
        renderMovies();
    }
});

function renderMovies() {
    const movieGrid = document.getElementById('movie-grid');
    movieGrid.innerHTML = '';

    const start = (currentPage - 1) * moviesPerPage;
    const end = start + moviesPerPage;
    const currentMovies = movies.slice(start, end);

    currentMovies.forEach(movie => {
        const movieCard = `
            <div class="movie-card">
                <img src="${movie.image}" alt="${movie.title}">
                <h3 class="movie-title">${movie.title}</h3>
                <p class="release-date">Ngày phát hành: ${movie.release_date || 'Đang cập nhật'}</p>
                <div class="movie-actions">
                    <a href="${movie.trailer}" target="_blank" class="btn btn-primary">Xem Trailer</a>
                </div>
            </div>
        `;
        movieGrid.innerHTML += movieCard;
    });

    updatePaginationButtons();
}

renderMovies();