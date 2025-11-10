window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementsByClassName("logo").style.width = "100px";
  } else {
    document.getElementsByClassName("logo").style.width = "14px";
  }
}