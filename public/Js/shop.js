const data = obj;

// model

const modal = document.getElementById("modal");

const modalCard = (id) => {
  const modalData = data.find((item) => item.id.toString() === id);
  modal.innerHTML = `<div class="container">
  <div class="row">
      <div class="col-lg-6">
          <img src=${modalData.image} class='img-fluid' alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center pb-2">
          <h3>${modalData.name}</h3>
          <span class='mt-2 mb-2'>$ ${modalData.price.toFixed(2)}</span>
          <p class='text-muted'>${modalData.discription}</p>
          <div class="d-flex form align-items-center mb-3">
              <input type="text" class="form" value="1">
              <button type='submit' class='button ml-3 text-uppercase'>add to cart</button>
          </div>
          <div class="d-flex"><span class='mr-3'>Category: </span><a href="#" class='text-dark'>Style</a>
          </div>
          <div class="d-flex"><span class='mr-3'>Tags: </span><a href="#" class='text-dark'>furniture,
                  gallery,
                  m-home</a></div>
      </div>
      <div class='cross mt-4 d-flex justify-content-center align-items-center'>
          <span></span>
      </div>
  </div>
</div>`;
};



modal.addEventListener("click", (e) => {
  if (e.target.classList.contains("cross")) {
    modal.classList.remove(["active"]);
  }
  if (e.target !== e.currentTarget) return;
  modal.classList.remove(["active"]);
});
