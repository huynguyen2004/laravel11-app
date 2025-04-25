const movies = window.moviesFromPHP;
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
                <p>Khởi chiếu: ${movie.release_date || 'Đang cập nhật'}</p>
                <div class="movie-actions">
                    <button onclick="showTrailer('${movie.trailer}')">Xem Trailer</button>
                    <button onclick="viewDetails('movieDetail.php?id=${movie.id}')">Tìm Hiểu Thêm</button>
                </div>
            </div>
        `;
        movieGrid.innerHTML += movieCard;
    });

    updatePaginationButtons();
}

function showTrailer(url) {
    window.open(url, '_blank');
}

function viewDetails(url) {
    window.location.href = url;
}

renderMovies();