function color1(){
$("#colors1").addClass( "activated", -1000);
$( "#colors1" ).removeClass( "deactivated" );
$("#colors2,#colors3").addClass( "deactivated", -1000);
$( "#colors2,#colors3" ).removeClass( "activated" );

if($("#colors6").hasClass("activated")){
$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("two");
}
else if($("#colors5").hasClass("activated")){
$("#colors-box").addClass( "two", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("three");
}
else{
$("#colors-box").addClass( "one", -1000);
$("#colors-box").removeClass("two");
$("#colors-box").removeClass("three");
}
return false;
}
function color2(){
$("#colors2").addClass( "activated", -1000);
$( "#colors2" ).removeClass( "deactivated" );
$("#colors3").addClass( "deactivated", -1000);
$( "#colors3" ).removeClass( "activated" );

if($("#colors6").hasClass("activated")){
$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("two");
}
else{
$("#colors-box").addClass( "two", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("three");
}
return false;
}
function color3(){
$("#colors1").addClass( "activated", -1000);
$( "#colors1" ).removeClass( "deactivated" );
$("#colors2").addClass( "activated", -1000);
$( "#colors2" ).removeClass( "deactivated" );
$("#colors3").addClass( "activated", -1000);
$( "#colors3" ).removeClass( "deactivated" );

$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass("zero");
$("#colors-box").removeClass("two");
$("#colors-box").removeClass("one");
return false;
}
function color4(){
$("#colors4").addClass( "activated", -1000);
$( "#colors4" ).removeClass( "deactivated" );
$("#colors5,#colors6").addClass( "deactivated", -1000);
$( "#colors5,#colors6" ).removeClass( "activated" );

if($("#colors3").hasClass("activated")){
$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("two");
}
else if($("#colors2").hasClass("activated")){
$("#colors-box").addClass( "two", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("three");
}
else{
$("#colors-box").addClass( "one", -1000);
$("#colors-box").removeClass("two");
$("#colors-box").removeClass("three");
}
return false;
}
function color5(){
$("#colors5").addClass( "activated", -1000);
$( "#colors5" ).removeClass( "deactivated" );
$("#colors6").addClass( "deactivated", -1000);
$( "#colors6" ).removeClass( "activated" );

if($("#colors3").hasClass("activated")){
$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("two");
}
else{
$("#colors-box").addClass( "two", -1000);
$("#colors-box").removeClass("one");
$("#colors-box").removeClass("three");
}
return false;
}
function color6(){
$("#colors4").addClass( "activated", -1000);
$( "#colors4" ).removeClass( "deactivated" );
$("#colors5").addClass( "activated", -1000);
$( "#colors5" ).removeClass( "deactivated" );
$("#colors6").addClass( "activated", -1000);
$( "#colors6" ).removeClass( "deactivated" );

$("#colors-box").addClass( "three", -1000);
$("#colors-box").removeClass( "one" );
$("#colors-box").removeClass("two");
$("#colors-box").removeClass("zero");
return false;
}