function arrow(index) {
  var dots = document.getElementById("dots"+index);
  var moreText = document.getElementById("more"+index);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    moreText.style.display = "inline";
  }
}