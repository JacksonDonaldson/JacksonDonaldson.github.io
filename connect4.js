function mouseover(event){
    
    let column = event.id[8];
    for(let i = 1; i < 8; i++){
        let element = document.getElementById("connect1" + i);
        if(i == column){
            element.src= "./Images/topRed.png";
        }
        else{
            element.src = "./Images/topEmpty.png";
        }
    }
}
function clickEvent(event){
    console.log(event);
}
