document.getElementById("help").addEventListener("click", () => {
  document.getElementById("help-tooltip").classList.add("visible");
});

document.getElementById("help-close").addEventListener("click", () => {
  document.getElementById("help-tooltip").classList.remove("visible");
});
