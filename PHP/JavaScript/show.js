function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    // var btnText = document.getElementById("click");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
    //   btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
    //   btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
// text file
function WriteToFile()
        { 
            var txt = new ActiveXObject("Scripting.FileSystemObject");
            var s = txt.CreateTextFile("first_completeb.txt", true);
            // s.WriteLine('Hello');
            s.Close();
            }