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
            setTimeout(function(){ $('#msg').html(''); },2000);
          },
          error: function(response)  
          {   
            $("#msg").html("<span id='msg' class='alert-danger'> error deleting </span>");
          }
        });
    $.ajax({
          url: 'ajax.php',
          type: 'get',
          success: function(res){
              $('#evts').html(res);
          }
      });
  });
});