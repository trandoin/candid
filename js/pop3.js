// if stream is selected then 

const selected_stream = document.querySelector("#course_name");

selected_stream.addEventListener("change",()=>{
    var stream_name = selected_stream.value;
    if(stream_name != "Choose Stream"){
    showcoursetitle(stream_name);
    }
    // else{
    
    //     $('#course_title').html("<option id=''1'>Choose Course Name</option>");
    // }
});

// if course title is select 
const selected_title= document.querySelector("#course_title");

selected_title.addEventListener("change",()=>{
    var stream_title= selected_title.value;
    if(stream_title != "Choose  Course Name"){
    showcourseclass(stream_title);
    }
    else{
    
        $('#course_class').html("<option id=''1'>Choose Course Class</option>");
    }
});



// it will show the related  title to the  stream
function showcoursetitle(stream_name){

    $.ajax({
        url:'send.php',
        type:'post',
        data:{
            stream_name:stream_name
        },
        success:function(data){
            $('#course_title').html(data);
      
        }
    })


}

// it will show the related class to the stream
function showcourseclass(stream_title){
    $.ajax({
        url:'send.php',
        type:'post',
        data:{
            stream_title:stream_title
        },
        success:function(data){
            $('#course_class').html(data);
      
        }
    })


}

// if show courses button is click

function showcourse(){
    var stream_name = $('#course_name').val();
    var stream_titles = $('#course_title').val();
    var stream_class = $('#course_class').val();
    if( stream_name != 'Choose Stream' && stream_titles != 'Choose Course Name' && stream_class !='Choose Course Class'){
        $.ajax({
            url:'send.php',
            type:'post',
            data:{
                stream_names:stream_name,
                stream_titles:stream_titles,
                stream_class:stream_class
            },
            success:function(data){
                $('.course_taking').html(data);
          
            }
        })
    }
    else{
        alert("Please Select All The Fields");
    }
   
  

}



function fncc(){
document.getElementById('classroomc').style.display='none';
document.getElementById('classroomc_all').style.display='block';
document.getElementById('recordedc').style.display="none";
document.getElementById('onlinec').style.display="none";
document.getElementById('coursewise').style.display="none";
}
function fnoc(){
document.getElementById('classroomc').style.display='none';
document.getElementById('recordedc').style.display="none";
document.getElementById('onlinec').style.display="block";
document.getElementById('coursewise').style.display="none";

}

function fncn(){
document.getElementById('classroomc').style.display='none';
document.getElementById('recordedc').style.display="block";
document.getElementById('onlinec').style.display="none";
document.getElementById('coursewise').style.display="none";

}

// in course.php if course  dropdown is open and any field is click


function cou(x){

    var field_name = document.querySelector('.course'+x).innerHTML;

    for(var i=0;i<=3;i++){
        if(i==x){
            document.getElementById('classroomc').style.display='none';
            document.getElementById('classroomc_all').style.display='none';

            document.getElementById('recordedc').style.display="none";
            document.getElementById('onlinec').style.display="none";

            showfielddata(field_name);
document.getElementById('coursewise').style.display="block";

            
        }
        else{
            document.querySelector("#M").style.display="none";
        }
    }






}

function  showfielddata(field_name){
    $.ajax(
        {
            url:'send.php',
            type:'post',
            data:{
                field_name:field_name
            },
            success:function(data){
                $('#coursewise').html(data);
            }
        }
    )





}
