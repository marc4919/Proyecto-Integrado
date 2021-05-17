document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formulario")
    .addEventListener("submit", function (e) {
      e.preventDefault();
      let formElement = document.getElementById("formulario");
      let formData = new FormData(formElement);
      formular(formData);
    });
});

function formular(formData) {
  formulario = document.getElementById("formulario").childElementCount;
  console.log(formulario);
  if (formulario == 8) {
    const xhttp = new XMLHttpRequest();
    xhttp.addEventListener("readystatechange", function () {
      if (this.readyState == 4 && this.status == 200) {
      }
    });
    xhttp.open("POST", "introducePlan.php", true);
    xhttp.send(formData);
  }
}
