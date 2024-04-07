const api = "http://localhost/cookviewer/"
function load(url, element) {
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      element.innerHTML = data
    })
}
load(api + "recipes.php", document.getElementById("recipes"))