$(document).ready(function(){


    $('#btn_your_details').click(function(){
    
                                
                                  var error_name = '';
                                  var error_email = '';
                                  var error_gender = '';
                                  var error_bday = '';
                                  var error_phone = '';
                                  var error_category = '';
                                  var error_country = '';
                                  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                  // for email
                                  if($.trim($('#email').val()).length == 0)
                                  {
                                   error_email = 'Email is required';
                                   $('#error_email').text(error_email);
                                   $('#email').addClass('has-error');
                                  }
                                  else
                                  {
                                   if (!filter.test($('#email').val()))
                                   {
                                    error_email = 'Invalid Email';
                                    $('#error_email').text(error_email);
                                    $('#email').addClass('has-error');
                                   }
                                   else
                                   {
                                    error_email = '';
                                    $('#error_email').text(error_email);
                                    $('#email').removeClass('has-error');
                                   }
                                  }
                                  // for name
                                  if($.trim($('#name').val()).length == 0)
                                  {
                                   error_name = 'Name is required';
                                   $('#error_name').text(error_name);
                                   $('#name').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_name = '';
                                   $('#error_name').text(error_name);
                                   $('#name').removeClass('has-error');
                                  }
                                // for gender
                                  if($.trim($('#gender').val()).length == 0)
                                  {
                                   error_gender = 'Gender is required';
                                   $('#error_gender').text(error_gender);
                                   $('#gender').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_gender = '';
                                   $('#error_gender').text(error_gender);
                                   $('#gender').removeClass('has-error');
                                  }
                                // birthday
                                if($.trim($('#bday').val()).length == 0)
                                  {
                                   error_bday = 'Birth Date is required';
                                   $('#error_bday').text(error_bday);
                                   $('#bday').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_bday = '';
                                   $('#error_bday').text(error_bday);
                                   $('#bday').removeClass('has-error');
                                  }
                                
                                // phone
                                if($.trim($('#phone').val()).length == 0)
                                  {
                                   error_phone = 'Phone Number is required';
                                   $('#error_phone').text(error_phone);
                                   $('#phone').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_phone = '';
                                   $('#error_phone').text(error_phone);
                                   $('#phone').removeClass('has-error');
                                  }
                                // Category
                                if($.trim($('#category').val()).length == 0)
                                  {
                                   error_category = 'category is required';
                                   $('#error_category').text(error_category);
                                   $('#category').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_category = '';
                                   $('#error_category').text(error_category);
                                   $('#category').removeClass('has-error');
                                  }
                                // country
                                
                                if($.trim($('#country').val()).length == 0)
                                  {
                                   error_country = 'country required';
                                   $('#error_country').text(error_country);
                                   $('#country').addClass('has-error');
                                  }
                                  else
                                  {
                                   error_country = '';
                                   $('#error_country').text(error_country);
                                   $('#country').removeClass('has-error');
                                  }
                                
                                
                                  if(error_email != '' || error_name != '' || error_gender != '' || error_bday != ''|| error_phone != '' || error_category != ''  || error_country != '')
                                  {
                                   return false;
                                  }
                                  else
                                  {
                                                /*first start*/
                                                 
                                                  $('#list_your_details').removeClass('active active_tab1');
                                                  $('#list_your_details').removeAttr('href data-toggle');
                                                  $('#your_details').removeClass('active');
                                                  $('#list_your_details').addClass('inactive_tab1');
                                                  $('#list_personal_details').removeClass('inactive_tab1');
                                                  $('#list_personal_details').addClass('active_tab1 active');
                                                  $('#list_personal_details').attr('href', '#personal_details');
                                                  $('#list_personal_details').attr('data-toggle', 'tab');
                                                  $('#personal_details').addClass('active in');
                                  }
       
       
       
       
       
       }); 
    
    
    
         $('#previous_btn_personal_details').click(function(){
          $('#list_personal_details').removeClass('active active_tab1');
          $('#list_personal_details').removeAttr('href data-toggle');
          $('#personal_details').removeClass('active in');
          $('#list_personal_details').addClass('inactive_tab1');
          $('#list_your_details').removeClass('inactive_tab1');
          $('#list_your_details').addClass('active_tab1 active');
          $('#list_your_details').attr('href', '#your_details');
          $('#list_your_details').attr('data-toggle', 'tab');
          $('#your_details').addClass('active in');
        
         });
                    /*first end*/
    
    
                    $('#btn_personal_details').click(function(){
    
    
                       var error_fname = '';
                       var error_foccu = '';
                       var error_fphone = '';
                       var error_mname = '';
                       var error_moccu = '';
                       var error_Mphone = '';
                       var error_paddress = '';
                       var error_pcity = '';
                       var error_pdistrict = '';
                       var error_ccity = '';
                       var error_cdistrict = '';
                       var error_caddress = '';
                       
                                          
                                          
                                          // for Father name
                                          if($.trim($('#fname').val()).length == 0)
                                          {
                                           error_fname = 'Father Name is required';
                                           $('#error_fname').text(error_fname);
                                           $('#fname').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_fname = '';
                                           $('#error_fname').text(error_fname);
                                           $('#fname').removeClass('has-error');
                                          }
                                          // for Father Occuption
                                          if($.trim($('#foccu').val()).length == 0)
                                          {
                                           error_foccu = 'Father Occuption is required';
                                           $('#error_foccu').text(error_foccu);
                                           $('#foccu').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_foccu = '';
                                           $('#error_foccu').text(error_foccu);
                                           $('#foccu').removeClass('has-error');
                                          }
                                          // For Father Phone 
                                          if($.trim($('#fphone').val()).length == 0)
                                          {
                                           error_fphone = 'Father Phone is required';
                                           $('#error_fphone').text(error_fphone);
                                           $('#fphone').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_fphone = '';
                                           $('#error_fphone').text(error_fphone);
                                           $('#fphone').removeClass('has-error');
                                          }
                                          
                                          // For Mother Name
                                          if($.trim($('#mname').val()).length == 0)
                                          {
                                           error_mname = 'Mother Name is required';
                                           $('#error_mname').text(error_mname);
                                           $('#mname').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_mname = '';
                                           $('#error_mname').text(error_mname);
                                           $('#mname').removeClass('has-error');
                                          }
                                          // Mother Occuption 
                                          if($.trim($('#moccu').val()).length == 0)
                                          {
                                           error_moccu = 'Mother Occuption is required';
                                           $('#error_moccu').text(error_moccu);
                                           $('#moccu').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_moccu = '';
                                           $('#error_moccu').text(error_moccu);
                                           $('#moccu').removeClass('has-error');
                                          }
                                          //for Mother phone
                                          
                                          if($.trim($('#Mphone').val()).length == 0)
                                          {
                                           error_Mphone = 'Mother Phone is required';
                                           $('#error_Mphone').text(error_Mphone);
                                           $('#Mphone').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_Mphone = '';
                                           $('#error_Mphone').text(error_Mphone);
                                           $('#Mphone').removeClass('has-error');
                                          }
                                          
                                          
                                          //for Permanent address
                                          
                                          if($.trim($('#paddress').val()).length == 0)
                                          {
                                           error_paddress = 'Permanent Address is required';
                                           $('#error_paddress').text(error_paddress);
                                           $('#paddress').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_paddress = '';
                                           $('#error_paddress').text(error_paddress);
                                           $('#paddress').removeClass('has-error');
                                          }
                                          
                                          //for Permanent pin City
                                          
                                          if($.trim($('#pcity').val()).length == 0)
                                          {
                                           error_pcity = 'Permanent City and Pin is required';
                                           $('#error_pcity').text(error_pcity);
                                           $('#pcity').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_pcity = '';
                                           $('#error_pcity').text(error_pcity);
                                           $('#pcity').removeClass('has-error');
                                          }
                                          // for district
                                          if($.trim($('#pdistrict').val()).length == 0)
                                          {
                                           error_pdistrict = 'Permanent District and State is required';
                                           $('#error_pdistrict').text(error_pdistrict);
                                           $('#pdistrict').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_pdistrict = '';
                                           $('#error_pdistrict').text(error_pdistrict);
                                           $('#pdistrict').removeClass('has-error');
                                          }
                                          
                                          
                                          // for Corrospondance address
                                          if($.trim($('#ccity').val()).length == 0)
                                          {
                                           error_ccity = 'Corrospondance City is required';
                                           $('#error_ccity').text(error_ccity);
                                           $('#ccity').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_ccity = '';
                                           $('#error_ccity').text(error_ccity);
                                           $('#ccity').removeClass('has-error');
                                          }
                                          
                                          
                                          // for Corrospondance District
                                          if($.trim($('#cdistrict').val()).length == 0)
                                          {
                                           error_cdistrict = 'Corrospondance District is required';
                                           $('#error_cdistrict').text(error_cdistrict);
                                           $('#cdistrict').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_cdistrict = '';
                                           $('#error_cdistrict').text(error_cdistrict);
                                           $('#cdistrict').removeClass('has-error');
                                          }
                                          
                                          // for Corrospondance Address
                                          if($.trim($('#caddress').val()).length == 0)
                                          {
                                           error_caddress = 'Corrospondance Address is required';
                                           $('#error_caddress').text(error_caddress);
                                           $('#caddress').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_caddress = '';
                                           $('#error_caddress').text(error_caddress);
                                           $('#caddress').removeClass('has-error');
                                          }
                                          
                                          
                                          if(error_fname != '' || error_foccu != '' || error_fphone != '' || error_mname != ''|| error_moccu != '' || error_Mphone != ''  || error_paddress != ''|| error_pcity != ''|| error_pdistrict != '' || error_ccity != ''|| error_cdistrict != '' || error_caddress != '')
                                          {
                                           return false;
                                          }
                                          else
                                          {
                                          
                                                       /*second start*/
                                                       
                                                          $('#list_personal_details').removeClass('active active_tab1');
                                                          $('#list_personal_details').removeAttr('href data-toggle');
                                                          $('#personal_details').removeClass('active');
                                                          $('#list_personal_details').addClass('inactive_tab1');
                                                          $('#list_address_details').removeClass('inactive_tab1');
                                                          $('#list_address_details').addClass('active_tab1 active');
                                                          $('#list_address_details').attr('href', '#address_details');
                                                          $('#list_address_details').attr('data-toggle', 'tab');
                                                          $('#address_details').addClass('active in');
                                          }
                  
                  
                  
                  
                  
                  }); 
    
    
    
                  $('#previous_btn_address_details').click(function(){
                   $('#list_address_details').removeClass('active active_tab1');
                   $('#list_address_details').removeAttr('href data-toggle');
                   $('#address_details').removeClass('active in');
                   $('#list_address_details').addClass('inactive_tab1');
                   $('#list_personal_details').removeClass('inactive_tab1');
                   $('#list_personal_details').addClass('active_tab1 active');
                   $('#list_personal_details').attr('href', '#personal_details');
                   $('#list_personal_details').attr('data-toggle', 'tab');
                   $('#personal_details').addClass('active in');
                  });
    
    
    
    
                 /*second end*/
                
    
    
    
    
    
                 /*third start*/
                 $('#btn_address_details').click(function(){
                    
                       var error_stream = '';
                       var error_class = '';
                       var error_board = '';
                       var error_Aclass = '';
                       var error_school = '';
                       var error_saddress = '';
                       var error_medium = '';
                       
                       
                                          
                                          
                                          // for Stream
                                          if($.trim($('#stream').val()).length == 0)
                                          {
                                           error_stream = 'Stream is required';
                                           $('#error_stream').text(error_stream);
                                           $('#stream').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_stream = '';
                                           $('#error_stream').text(error_stream);
                                           $('#stream').removeClass('has-error');
                                          }
                                          // for Class
                                          if($.trim($('#class').val()).length == 0)
                                          {
                                           error_class = 'Class is required';
                                           $('#error_class').text(error_class);
                                           $('#class').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_class = '';
                                           $('#error_class').text(error_class);
                                           $('#class').removeClass('has-error');
                                          }
                                          // For Board
                                          if($.trim($('#board').val()).length == 0)
                                          {
                                           error_board = 'Board is required';
                                           $('#error_board').text(error_board);
                                           $('#board').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_board = '';
                                           $('#error_board').text(error_board);
                                           $('#board').removeClass('has-error');
                                          }
                                          
                                          // For Admission Class
                                          if($.trim($('#Aclass').val()).length == 0)
                                          {
                                           error_Aclass = 'Admission Class is required';
                                           $('#error_Aclass').text(error_Aclass);
                                           $('#Aclass').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_Aclass = '';
                                           $('#error_Aclass').text(error_Aclass);
                                           $('#Aclass').removeClass('has-error');
                                          }
                                          // School
                                          if($.trim($('#school').val()).length == 0)
                                          {
                                           error_school = 'School is required';
                                           $('#error_school').text(error_school);
                                           $('#school').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_school = '';
                                           $('#error_school').text(error_school);
                                           $('#school').removeClass('has-error');
                                          }
                                          //for School Address
                                          
                                          if($.trim($('#saddress').val()).length == 0)
                                          {
                                           error_saddress = 'Mother Phone is required';
                                           $('#error_saddress').text(error_saddress);
                                           $('#saddress').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_saddress = '';
                                           $('#error_saddress').text(error_saddress);
                                           $('#saddress').removeClass('has-error');
                                          }
                                          
                                          
                                          //for Medium
                                          
                                          if($.trim($('#medium').val()).length == 0)
                                          {
                                           error_medium = 'Permanent Address is required';
                                           $('#error_medium').text(error_medium);
                                           $('#medium').addClass('has-error');
                                          }
                                          else
                                          {
                                           error_medium = '';
                                           $('#error_medium').text(error_medium);
                                           $('#medium').removeClass('has-error');
                                          }
                                          
                                          
                                          
                                          
                                          if(error_stream != '' || error_class != '' || error_board != '' || error_Aclass != ''|| error_school != '' || error_saddress != ''  || error_medium != '')
                                          {
                                           return false;
                                          }
                                          else
                                          {
                                          
                    $('#list_address_details').removeClass('active active_tab1');
                    $('#list_address_details').removeAttr('href data-toggle');
                    $('#address_details').removeClass('active');
                    $('#list_address_details').addClass('inactive_tab1');
                    $('#list_acedemic_details').removeClass('inactive_tab1');
                    $('#list_acedemic_details').addClass('active_tab1 active');
                    $('#list_acedemic_details').attr('href', '#acedemic_details');
                    $('#list_acedemic_details').attr('data-toggle', 'tab');
                    $('#acedemic_details').addClass('active in');
                    }
                  }); 
    
    
    
    
    
                  
                  $('#previous_btn_acedemic_details').click(function(){
                   $('#list_acedemic_details').removeClass('active active_tab1');
                   $('#list_acedemic_details').removeAttr('href data-toggle');
                   $('#acedemic_details').removeClass('active in');
                   $('#list_acedemic_details').addClass('inactive_tab1');
                   $('#list_address_details').removeClass('inactive_tab1');
                   $('#list_address_details').addClass('active_tab1 active');
                   $('#list_address_details').attr('href', '#address_details');
                   $('#list_address_details').attr('data-toggle', 'tab');
                   $('#address_details').addClass('active in');
                  });
                 /*third end */
                
    
    
                 /*fourth start*/
                 $('#btn_acedemic_details').click(function(){
                    $('#list_acedemic_details').removeClass('active active_tab1');
                    $('#list_acedemic_details').removeAttr('href data-toggle');
                    $('#acedemic_details').removeClass('active');
                    $('#list_acedemic_details').addClass('inactive_tab1');
                    $('#list_upload_details').removeClass('inactive_tab1');
                    $('#list_upload_details').addClass('active_tab1 active');
                    $('#list_upload_details').attr('href', '#upload_details');
                    $('#list_upload_details').attr('data-toggle', 'tab');
                    $('#upload_details').addClass('active in');
                  }); 
                  $('#previous_btn_upload_details').click(function(){
                   $('#list_upload_details').removeClass('active active_tab1');
                   $('#list_upload_details').removeAttr('href data-toggle');
                   $('#upload_details').removeClass('active in');
                   $('#list_upload_details').addClass('inactive_tab1');
                   $('#list_acedemic_details').removeClass('inactive_tab1');
                   $('#list_acedemic_details').addClass('active_tab1 active');
                   $('#list_acedemic_details').attr('href', '#acedemic_details');
                   $('#list_acedemic_details').attr('data-toggle', 'tab');
                   $('#acedemic_details').addClass('active in');
                  });
                
                 /*fourth end*/
                /*last*/
                
                    // $('#submit_form').click(function(){
                    
                    //   $('#submit_form').submit(); 
                     
                    // });
                    
                  //  });
    
    
                });