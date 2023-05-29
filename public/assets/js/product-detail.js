const accordions = Array.from(document.getElementsByClassName("accordion"));

accordions.forEach(acc => {
  acc.addEventListener("click", function() {
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    panel.style.display = panel.style.display === "block" ? "none" : "block";
  });
});
