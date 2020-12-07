const data = [
  {
    id: 1,
    image: "./images/product-1-img-1.jpg",
    name: "Stackable Chair",
    type: "Art",
    price: 721,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 2,
    image: "./images/product-2-img-1.jpg",
    name: "Rack Small",
    type: "Style",
    price: 310,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 3,
    image: "./images/product-3-img-1.jpg",
    name: "Mirage Mirror",
    type: "Art, Style",
    price: 98,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 4,
    image: "./images/product-4-img-1.jpg",
    name: "Cabinet Low",
    type: "Home",
    price: 1150,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 5,
    image: "./images/product-5-img-1.jpg",
    name: "Krenit Bowl",
    type: "Style",
    price: 35,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 6,
    image: "./images/product-6-img-1.jpg",
    name: "Shorebird black",
    type: "Art",
    price: 35,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 7,
    image: "./images/product-7-img-1.jpg",
    name: "Table Lamp",
    type: "Home",
    price: 160,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 8,
    image: "./images/product-8-img-1.jpg",
    name: "Sofa Oak",
    type: "Style",
    price: 2350,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
  {
    id: 9,
    image: "./images/product-9-img-1.jpg",
    name: "Mormor White",
    type: "Art",
    price: 20,
    discription:
      "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat laborum in libero, quasi voluptate hic nobis omnis maxime quis facere.",
  },
];

const container_row = document.getElementById("row");
container_row.innerHTML = data
  .map(
    (item) =>
      ` <div class="col-lg-4 col-md-6 mt-2 mb-2" >
    <div class='cart-image-container'>
        <img src=${item.image} class='img-fluid' alt="">
        <div class="cart-icon d-flex">
            <div class="m-auto d-flex justify-content-around">
                <span class='d-flex icon-img'>
                    <i class="fas fa-plus m-auto"></i>
                </span>
                <span class='d-flex icon-img view' id = ${item.id}>
                    <i class="far fa-eye  m-auto "></i>
                </span>
                <span class='d-flex icon-img'>
                    <i class="far fa-heart m-auto"></i>
                </span>
            </div>
        </div>
    </div>
    <div class='text-center p-2' id=${item.id}>
        <h2>${item.name}</h2>
        <span class='text-muted text-capitalize'>${item.type}</span>
        <h2 class='mt-2'>$ ${item.price.toFixed(2)}</h2>
    </div>
</div>`
  )
  .join("");

//model

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

container_row.addEventListener("click", (e) => {
  if (e.target.classList.contains("view")) {
    modalCard(e.target.id);
    modal.classList.add("active");
  }
});
modal.addEventListener("click", (e) => {
  if (e.target.classList.contains("cross")) {
    modal.classList.remove(["active"]);
  }
  if (e.target !== e.currentTarget) return;
  modal.classList.remove(["active"]);
});
