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
// create txt file
// function WriteToFile(index){
//     var txt = getActiveXObject("prog-id");
//     var s = txt.CreateTextFile("first_completeb.txt", true);
//     s.WriteLine(document.getElementById('build'+index).innerHTML.replaceAll('<br>','\n'));
//     s.Close();
//     console.log(document.getElementById('build'+index).innerHTML.replaceAll('<br>','\n'));
// }