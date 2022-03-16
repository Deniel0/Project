function arrow1() {
    var dots = document.getElementById("dots1");
    var moreText = document.getElementById("more1");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      moreText.style.display = "inline";
    }
}
function arrow2() {
    var dots2 = document.getElementById("dots2");
    var moreText2 = document.getElementById("more2");
  
    if (dots2.style.display === "none") {
      dots2.style.display = "inline";
      moreText2.style.display = "none";
    } else {
      dots2.style.display = "none";
      moreText2.style.display = "inline";
    }
}
function arrow3() {
    var dots3 = document.getElementById("dots3");
    var moreText3 = document.getElementById("more3");
  
    if (dots3.style.display === "none") {
      dots3.style.display = "inline";
      moreText3.style.display = "none";
    } else {
      dots3.style.display = "none";
      moreText3.style.display = "inline";
    }
}
function arrow4() {
    var dots4 = document.getElementById("dots4");
    var moreText4 = document.getElementById("more4");
  
    if (dots4.style.display === "none") {
      dots4.style.display = "inline";
      moreText4.style.display = "none";
    } else {
      dots4.style.display = "none";
      moreText4.style.display = "inline";
    }
}
function arrow5() {
    var dots5 = document.getElementById("dots5");
    var moreText5 = document.getElementById("more5");
  
    if (dots5.style.display === "none") {
      dots5.style.display = "inline";
      moreText5.style.display = "none";
    } else {
      dots5.style.display = "none";
      moreText5.style.display = "inline";
    }
}
function arrow6() {
    var dots6 = document.getElementById("dots6");
    var moreText6 = document.getElementById("more6");
  
    if (dots6.style.display === "none") {
      dots6.style.display = "inline";
      moreText6.style.display = "none";
    } else {
      dots6.style.display = "none";
      moreText6.style.display = "inline";
    }
}
function arrow7() {
    var dots7 = document.getElementById("dots7");
    var moreText7 = document.getElementById("more7");
  
    if (dots7.style.display === "none") {
      dots7.style.display = "inline";
      moreText7.style.display = "none";
    } else {
      dots7.style.display = "none";
      moreText7.style.display = "inline";
    }
}
function arrow8() {
    var dots8 = document.getElementById("dots8");
    var moreText8 = document.getElementById("more8");
  
    if (dots8.style.display === "none") {
      dots8.style.display = "inline";
      moreText8.style.display = "none";
    } else {
      dots8.style.display = "none";
      moreText8.style.display = "inline";
    }
}
function arrow9() {
    var dots9 = document.getElementById("dots9");
    var moreText9 = document.getElementById("more9");
  
    if (dots9.style.display === "none") {
      dots9.style.display = "inline";
      moreText9.style.display = "none";
    } else {
      dots9.style.display = "none";
      moreText9.style.display = "inline";
    }
}
function arrow10() {
    var dots10 = document.getElementById("dots10");
    var moreText10 = document.getElementById("more10");
  
    if (dots10.style.display === "none") {
      dots10.style.display = "inline";
      moreText10.style.display = "none";
    } else {
      dots10.style.display = "none";
      moreText10.style.display = "inline";
    }
}
function arrow11() {
    var dots11 = document.getElementById("dots11");
    var moreText11 = document.getElementById("more11");
  
    if (dots11.style.display === "none") {
      dots11.style.display = "inline";
      moreText11.style.display = "none";
    } else {
      dots11.style.display = "none";
      moreText11.style.display = "inline";
    }
}
function arrow12() {
    var dots12 = document.getElementById("dots12");
    var moreText12 = document.getElementById("more12");
  
    if (dots12.style.display === "none") {
      dots12.style.display = "inline";
      moreText12.style.display = "none";
    } else {
      dots12.style.display = "none";
      moreText12.style.display = "inline";
    }
}
// text file
function WriteToFile(){
    var txt = new ActiveXObject("Scripting.FileSystemObject");
    var s = txt.CreateTextFile("first_completeb.txt", true);
    // s.WriteLine('Hello');
    s.Close();
}