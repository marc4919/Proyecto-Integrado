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
      botonGuardar();
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
  console.log(identificador);
}
