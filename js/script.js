var my_list = document.getElementById("my_list");



function bache_jadid(){
    var input = document.createElement("INPUT");
    input.type="text";
    input.style.width="400px";
    input.style.height="39px";
    input.style.border="none";
    input.style.borderRadius ="30px";
    input.style.boxShadow ="inset -4px -4px 4px #fff,inset  4px 4px 4px  rgba(0,0,0,0.3)";
    input.style.marginBottom ="5px";
    input.style.marginTop ="10px";
    input.style.marginLeft ="20px";
    var bache =document.createElement("LI");
    my_list.appendChild(bache);
    bache.appendChild(input);
    container.style.height="auto" ;

}

function remove_jadid(){
    my_list.removeChild(my_list.childNodes[0]);
    container.style.height="auto" ;
  
}