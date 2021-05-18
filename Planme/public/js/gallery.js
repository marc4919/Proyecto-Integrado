document.addEventListener("DOMContentLoaded", function () {
  main();
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
  for (let i = 0; i < idPlan.length; i++) {
    cajaPlan[i].addEventListener("click", function (e) {
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
