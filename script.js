const api = "http://localhost/cookviewer/recipes.php"
function load(url, element) {
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      element.innerHTML = data
    })
}
load(api, document.getElementById("recipes"))