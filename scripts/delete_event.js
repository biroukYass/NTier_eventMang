$(function(){
  $('tr td button.btn').on('click',function() {

    data = {};
    data['id'] = $(this).parent().parent().find(".id").text();
    

  // alert(data['id'] );
    // alert("hello");
    $.ajax({   
          type: "POST",  
          url: "ajax_delete_event.php",  
          cache:false,  
          data: data,       
          success: function(response) { 
          // {   $("#msg").html(response);
            $("#msg").html("<span id='msg' class='alert-success'> success deleting </span>");
          },
          error: function(response)  
          {   
            $("#msg").html("<span id='msg' class='alert-danger'> error deleting </span>");
          }
        });
  });
});