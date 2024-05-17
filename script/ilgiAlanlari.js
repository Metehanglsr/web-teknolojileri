async function showRandomMovie() {
    const searchKeyword = document.getElementById("arananKelime").value;
    console.log(searchKeyword);
    const response = await fetch(`http://www.omdbapi.com/?s=${searchKeyword}&apikey=f7b7f0ba`);
    const data = await response.json();

    if (data.Response === "False") {
        console.error(data.Error);
        return;
    }

    const movies = data.Search;
    const randomMovie = movies[Math.floor(Math.random() * movies.length)];

    const detailedResponse = await fetch(`http://www.omdbapi.com/?i=${randomMovie.imdbID}&apikey=f7b7f0ba`);
    const detailedData = await detailedResponse.json();

    const movieResult = document.getElementById("movieResult");
    movieResult.innerHTML = `
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="${detailedData.Poster}" class="img-fluid rounded-start" alt="${detailedData.Title} Poster">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">${detailedData.Title}</h5>
                        <p class="card-text">${detailedData.Plot}</p>
                    </div>
                </div>
            </div>
        </div>
    `;
}