document.addEventListener("DOMContentLoaded", function () {
  botonDeleteUser();
  botonDeletePlan();
});

function botonDeleteUser() {
  let img = document.getElementsByClassName("delete");
  let filas = document.getElementsByClassName("identificador");
  for (let i = 0; i < filas.length; i++) {
    img[i].addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      let identificador = filas[i].innerHTML;
      ejecutarDeleteUser(identificador);
    });
  }
}

function ejecutarDeleteUser($id) {
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      refresh1();
    }
  });
  xhttp.open("GET", "deleteUser.php?id=" + $id, true);
  xhttp.send();
}

function botonDeletePlan() {
  let img = document.getElementsByClassName("deletePlan");
  let filas = document.getElementsByClassName("identificadorPlan");
  for (let i = 0; i < filas.length; i++) {
    img[i].addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      let identificador = filas[i].innerHTML;
      ejecutarDeletePlan(identificador);
    });
  }
}

function ejecutarDeletePlan($id) {
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      refresh2();
    }
  });
  xhttp.open("GET", "deletePlan.php?id=" + $id, true);
  xhttp.send();
}

function refresh1() {
  let tabla = document.getElementById("tablaUsuario");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      tabla.innerHTML = "";
      tabla.innerHTML = xhttp.responseText;
      botonDeleteUser();
    }
  });
  xhttp.open("GET", "updateUser.php", true);
  xhttp.send();
}

function refresh2() {
  let tabla = document.getElementById("tablaPlan");
  const xhttp = new XMLHttpRequest();
  xhttp.addEventListener("readystatechange", function () {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      tabla.innerHTML = "";
      tabla.innerHTML = xhttp.responseText;
      botonDeletePlan();
    }
  });
  xhttp.open("GET", "updatePlan.php", true);
  xhttp.send();
}
