const chatbtn = document.querySelector('.chaticon');
// show the chat box
let chatconentbtn = document.querySelector('#chatcontent');
chatbtn.addEventListener("click",()=>{


    const chatform = document.querySelector('#chat');
    
    const chaticonimg = document.querySelector('#chaticonimg');
    if(chatconentbtn.style.display=="block"){
        chatconentbtn.style.display="none";
         
            chatform.reset();
    }
    else{
        chaticonimg.style.display="none" 
        chatconentbtn.style.display="block";
    }
});
// To Close The Chat Window
const crossiconimg = document.querySelector('#crossiconimg');


crossiconimg.addEventListener("click",()=>{
    chaticonimg.style.display="block";
        chatconentbtn.style.display="none";
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

