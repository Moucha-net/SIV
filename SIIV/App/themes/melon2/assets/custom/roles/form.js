


var current_url = $('#current_url').val();
var baseUrl = $("#baseUrl").val();

$.ajax({
          type: "GET",
          url: current_url +"/SearchEngine",
          data: "",
          /*Uncomment this if you want to send the additional data*/
          //data: dataString+"&refid="+ref_id+"&custid="+cust_id,
          beforeSend:  function() 
          {
            //$('input#faq_search_input').addClass('loading');
            //alert("antes de enviar");
          },
          success: function(server_response)
          { 
            //alert("bien");
            $('#grants').html(server_response).show();
            //$("#grants").show(5000);
          },
          error: function(server_response)
          {
            //alert("error");
          }
        });

$("#guardar").click(function(){
  var myArray = [];

  $('input[type=checkbox]:checked').each(function () {
    var check = $(this);
    myArray.push($(this).attr('id'));
  });

  $.ajax({
    type: "POST",
    url: current_url +"/create/rol/"+$("#Roles_roleName").val()+"/grants/"+myArray,
    data: "",
    /*Uncomment this if you want to send the additional data*/
    //data: dataString+"&refid="+ref_id+"&custid="+cust_id,
    beforeSend:  function() 
    {
      //$('input#faq_search_input').addClass('loading');
      //alert("antes de enviar");
    },
    success: function(server_response)
    { 
      $(location).attr('href',baseUrl+'/roles/admin');
      //$('#grants').html(server_response).show();
    },
    error: function(server_response)
    {
      //alert("error");
    }
  });
});
