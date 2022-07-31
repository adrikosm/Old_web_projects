window.addEventListener("DOMContentLoaded", () => {
  const dash = document.getElementById("circle_2");
  

  const dash_undash = function () {
    if (dash.classList.contains("dash")) {
      dash.classList.remove("dash");
      dash.classList.add("undash");
    } else {
      dash.classList.remove("undash");
      dash.classList.add("dash");
    }
  };
  dash.addEventListener("click", dash_undash);
});
