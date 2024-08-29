var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");

function showPanel1(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
    tabButtons[panelIndex].style.backgroundColor="rgb(40 59 150)";
    tabButtons[panelIndex].style.color="white";
    tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels[panelIndex].style.display="block";
}
showPanel1(0,'rgb(40 59 150)');




