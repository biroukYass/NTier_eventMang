
    $(function(){
      
      $('#get_evts').click(function(e){
        e.preventDefault();
         // alert("hello");
        $.ajax({
          url: 'ajax.php',
          type: 'get',
          success: function(res){
              $('#evts').html(res);
          }
      })
      });
      
     return false;
  });
  $(function(){
      $('#add_evt').click(function(e){
        e.preventDefault();
        // alert("hello");
        $.ajax({
          url: 'ajax_add_event.php',
          type: 'post',
          data: $('#my_form').serialize(),
          success: function(res,statut){
              $('#storage2').html(res);
          },

      });
      });
      
     return false;
  });
  