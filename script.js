// Film

// fetch("film.json")
// .then(response => response.json())
// .then(response => console.log(response));

const searchInput = document.getElementsByClassName("form-search")[0];

searchInput.addEventListener("input", function () {
  let totalFilterFilms = 0;
  let text = searchInput.value;
  let cards = document.getElementsByClassName("card");

  [...cards].forEach(function (card) {
    const title = card.getElementsByClassName("card-title")[0].textContent;

    if (title.toLowerCase().includes(text.toLowerCase())) {
      totalFilterFilms++;
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });

  if (totalFilterFilms == 0) {
    let searchError = document.getElementsByClassName("search-error")[0];

    searchError.classList.add("show");
  } else {
    searchError.classList.remove("show");
  }
});

function handlefilm() {
  fetch("fetchFilm.php")
    .then((response) => response.json())
    .then(function (films) {
      console.log(films);
      const contentContainer = document.querySelector(".content-container");
      let allFilms = "";

      films.forEach(function (film) {
        console.log(film);
        allFilms += `<div class="card">
      <img src= "film/${film.path}" class="card-img-top" alt="...">
      <div class="card-body d-flex justify-content-between flex-column">
          <div>
              <p class="card-text">${film.judul}</p>
              <p class="card-text">${film.deskripsi}</p>
              <p class="card-text">${film.jenis_kategori}</p>
              <p class="card-text">${film?.jadwal[0]?.tanggal}</p>
              <p class="card-text">${film?.jadwal[0]?.jam_tayang}</p>
              <p class="card-text">${film?.jadwal[1]?.jam_tayang}</p>
              <p class="card-text">${film?.jadwal[2]?.jam_tayang}</p>
              </div>
          <div>
              <p class="card-text d-flex justify-content-end text-warning fw-bold">★${film.rating}</p>
          </div>
      </div>
  </div>`;
      });
      contentContainer.innerHTML = allFilms;
    });
}

let katalogfilm = document.getElementsByClassName("btn-film")[0];
katalogfilm.addEventListener("click", function () {
  let contentContainer =
    document.getElementsByClassName("content-container")[0];
  contentContainer.innerHTML = "";
  handlefilm();
});
// End Film
// Makan

function handlemakanan() {
  fetch("fetchMakanan.php")
    .then((response) => response.json())
    .then(function (foods) {
      console.log(foods);
      const contentContainer = document.querySelector(".content-container");
      let allFoods = "";

      foods.forEach(function (food) {
        allFoods += `<div class="card">
      <img src= "makanan/${food.path}" class="card-img-top" alt="...">
      <div class="card-body d-flex justify-content-between flex-column">
          <div>
              <p class="card-text">${food.nama}</p>
              <p class="card-text">Rp. ${food.harga}</p>
              </div>
          <div>
              <p class="card-text d-flex justify-content-end fw-bold">Stok : ${food.stok}</p>
          </div>
      </div>
  </div>`;
      });
      contentContainer.innerHTML = allFoods;
    });
}

let katalogmakanan = document.getElementsByClassName("btn-mkn")[0];
katalogmakanan.addEventListener("click", function () {
  let contentContainer =
    document.getElementsByClassName("content-container")[0];
  contentContainer.innerHTML = "";
  handlemakanan();
});
// End Makan

// Minum

function handleminuman() {
  fetch("fetchMinuman.php")
    .then((response) => response.json())
    .then(function (drinks) {
      console.log(drinks);
      const contentContainer = document.querySelector(".content-container");
      let allDrinks = "";

      drinks.forEach(function (drink) {
        allDrinks += `<div class="card">
      <img src= "minuman/${drink.path}" class="card-img-top" alt="...">
      <div class="card-body d-flex justify-content-between flex-column">
          <div>
              <p class="card-text">${drink.nama}</p>
              <p class="card-text">Rp. ${drink.harga}</p>
              </div>
          <div>
              <p class="card-text d-flex justify-content-end fw-bold">Stok : ${drink.stok}</p>
          </div>
      </div>
  </div>`;
      });
      contentContainer.innerHTML = allDrinks;
    });
}

let katalogminuman = document.getElementsByClassName("btn-mnm")[0];
katalogminuman.addEventListener("click", function () {
  let contentContainer =
    document.getElementsByClassName("content-container")[0];
  contentContainer.innerHTML = "";
  handleminuman();
});

handlefilm();
// End Minum
