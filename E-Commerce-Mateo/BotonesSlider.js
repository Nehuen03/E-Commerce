$("#mySlider").slider({
    range: "min",
    value: 0,
    min: 10000,
    max: 300000,
    step: 500
});

$('#agregar').click(function(){
var valorSlider = $("#mySlider").slider("value");
$("#mySlider").slider("value", valorSlider+5000);
});

$('#restar').click(function(){
var valorSlider = $("#mySlider").slider("value");
$("#mySlider").slider("value", valorSlider-5000);
});