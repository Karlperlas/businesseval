let container = document.querySelector('.card-box');

for (let i = 1; i <= 10; i++) {
    let myDiv = document.createElement('div');
    myDiv.className="phone";
    myDiv.innerHTML="<div class=\"card\-title\"><h1>" + "Phone"+ i +"</h1> </div> \n<div class=\"card\-pic\"> </div> </div>";
    
    container.appendChild(myDiv);
}

