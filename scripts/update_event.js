$(function(){
  $('tr.edit').on('focusout', function() {

    data = {};
    data['id'] = $(this).find(".id").text();
    data['nom'] = $(this).find(".nom").text();
    data['date'] = $(this).find(".date").text();
    data['adress'] = $(this).find(".adress").text();

  
    // alert("hello");
    $.ajax({   
          type: "POST",  
          url: "ajax_update_event.php",  
          cache:false,  
          data: data,       
          success: function(response) { 
          // {   $("#msg").html(response);
            $("#msg").html("<span id='msg' class='alert-success'> success modification </span>");
            setTimeout(function(){ $('#msg').html(''); },2000);
          },
          error: function(response)  
          {   
            $("#msg").html("<span id='msg' class='alert-danger'> error modification </span>");
          }
        });

  });
});
