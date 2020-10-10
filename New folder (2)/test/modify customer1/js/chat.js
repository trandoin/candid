const chatbtn = document.querySelector('.chaticon');
// show the chat box
let chatconentbtn = document.querySelector('#chatcontent');


// To Close The Chat Window
const crossiconimg = document.querySelector('#crossiconimg');

    const chatform = document.querySelector('#chat');


crossiconimg.addEventListener("click",()=>{
        
    chaticonimg.style.display="block";
    chatconentbtn.style.display="none";
    chatform.reset();
});



//To Send The Message

const sendbtn = document.querySelector('.send');

sendbtn.addEventListener("click",() =>{

  const phoneno = document.querySelector('#phoneno').value;

  const cls = document.querySelector('.class').value;
 

  const course = document.querySelector('.course').value;


  const name = document.querySelector('#name').value.toUpperCase();
  const message = document.querySelector('#msg').value.toUpperCase();
  if(name != "" && phoneno != "" && phoneno.length ==10){
     const sendmsg = "NAME :" +name +"\nClass :"+cls+"\nCourse :"+course+"\n Phone No :"+phoneno+"\n Message :"+message;
     window.open('https://api.whatsapp.com/send?phone='+916375255436+'&text='+sendmsg,'_blank','height:60,width:100,top:50,left:100');
  }
  

});




// To click button in menubar

const menubtn = document.querySelector('.menu_bar');
const menucontentbtn = document.querySelector('#navbarNavDropdown');

menubtn.addEventListener("click",()=>{

    if(menucontentbtn.style.display != "none"){
            menucontentbtn.style.display="none";
    }
    else{
        if(chatconentbtn.style.display == "block"){
            alert("Please Close The Chat Application To Open The MenuBar");
       
        }
        else{
            menucontentbtn.style.display="block";
        }
    }



});


// show the chat box for big screen and small screen


chatbtn.addEventListener("click",()=>{
    const screen_width = window.innerWidth;
    if(screen_width >=1000){
        chatconentbtn.style.display="block";
    }  
    else{
        if(menucontentbtn.style.display =="none"){
            chatconentbtn.style.display="block";
        }
        else{
            alert("Please Close The Menubar To Open The Chat Application");

        }
    }
});




// To change The background Of Chat Box
// window.addEventListener("scroll",()=>{
//     let pos = parseInt(window.pageYOffset);
//     const chatheader = document.querySelector('#chatheader');
//     if(pos>300){
//         chatconentbtn.style.background = "#3078c1";
//         chatheader.style.color="white";
//     }
//     else{
//         chatconentbtn.style.background = "rgba(250,225,0)";
//         chatheader.style.color="black";
//     }

// });

