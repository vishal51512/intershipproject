$(".product-colors span").click(function() {
    $(".product-colors span").removeClass("active");
    $(this).addClass("active");
    $(".active").css("border-color", $(this).attr("data-color-sec"))
   
    $(".content h2").css("color", $(this).attr("data-color-sec"));
    $(".content h3").css("color", $(this).attr("data-color-sec"));
    $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
    $(".container .details button").css("background", $(this).attr("data-color-sec"));
    $(".imgBx img").attr('src', $(this).attr("data-pic"));
});
let constrain = 20;
let mouseOverContainer = document.getElementById("ex1");
let ex1Layer = document.getElementById("ex1-layer");

function transforms(x, y, el) {
  let box = el.getBoundingClientRect();
  let calcX = -(y - box.y - (box.height / 2)) / constrain;
  let calcY = (x - box.x - (box.width / 2)) / constrain;
  
  return "perspective(100px) "
    + "   rotateX("+ calcX +"deg) "
    + "   rotateY("+ calcY +"deg) ";
};

 function transformElement(el, xyEl) {
  el.style.transform  = transforms.apply(null, xyEl);
}

mouseOverContainer.onmousemove = function(e) {
  let xy = [e.clientX, e.clientY];
  let position = xy.concat([ex1Layer]);

  window.requestAnimationFrame(function(){
    transformElement(ex1Layer, position);
  });
};