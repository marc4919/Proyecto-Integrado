document.addEventListener("DOMContentLoaded", function () {
  main();
  document
    .getElementById("filtroNombre")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement = document.getElementById("filtroNombre");
      let formData = new FormData(formElement);
      formularNombre(formData);
    });

  document
    .getElementById("filtroPrecio")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement2 = document.getElementById("filtroPrecio");
      let formData2 = new FormData(formElement2);
      formularPrecio(formData2);
    });

  document
    .getElementById("filtroTransporte")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement3 = document.getElementById("filtroTransporte");
      let formData3 = new FormData(formElement3);
      formularTransporte(formData3);
    });

  document
    .getElementById("filtroCategoria")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement4 = document.getElementById("filtroCategoria");
      let formData4 = new FormData(formElement4);
      formularCategoria(formData4);
    });

  document
    .getElementById("filtroCompleto")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement5 = document.getElementById("filtroCompleto");
      let formData5 = new FormData(formElement5);
      formularCompleto(formData5);
    });
});

function main() {
  let gP = document.getElementById("galeriaPrincipal");
  //let tabla = document.getElementById("lista");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      gP.innerHTML = xhttp.responseText;
      botonGuardar();
      refresh();
    }
  });
  xhttp.open("GET", "mostrarGaleria.php", true);
  xhttp.send();
}

function refresh() {
  let borrado = document.getElementById("Borrado");
  borrado.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    main();
  });
}

function botonGuardar() {
  let cajaPlan = document.getElementsByClassName("cajaPlan");
  let idPlan = document.getElementsByClassName("idPlan");
  console.log(idPlan);
  for (let i = 0; i < idPlan.length; i++) {
    cajaPlan[i].addEventListener("click", function (e) {
      console.log(20);
      e.preventDefault();
      e.stopPropagation();
      let identificador = idPlan[i].innerHTML;
      guardar(identificador);
    });
  }
}

function guardar(identificador) {
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xhttp.responseText);
    }
  });
  xhttp.open("GET", "guardarPlan.php?id=" + identificador, true);
  xhttp.send();
}

function formularNombre(formData) {
  caja = document.getElementById("galeriaSecundaria");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      caja.innerHTML = xhttp.responseText;
      botonGuardar();
    }
  });
  xhttp.open("POST", "filtroNombre.php", true);
  xhttp.send(formData);
}

function formularPrecio(formData) {
  caja = document.getElementById("galeria3");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      caja.innerHTML += xhttp.responseText;
    }
  });
  xhttp.open("POST", "filtroPrecio.php", true);
  xhttp.send(formData);
}

function formularTransporte(formData) {
  caja = document.getElementById("galeria4");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      caja.innerHTML += xhttp.responseText;
    }
  });
  xhttp.open("POST", "filtroTransporte.php", true);
  xhttp.send(formData);
}

function formularCategoria(formData) {
  caja = document.getElementById("galeria5");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      caja.innerHTML += xhttp.responseText;
    }
  });
  xhttp.open("POST", "filtroCategoria1.php", true);
  xhttp.send(formData);
}

function formularCompleto(formData) {
  caja = document.getElementById("galeria6");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (this.readyState == 4 && this.status == 200) {
      caja.innerHTML += xhttp.responseText;
    }
  });
  xhttp.open("POST", "filtroCompleto.php", true);
  xhttp.send(formData);
}
