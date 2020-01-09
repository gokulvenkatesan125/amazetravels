 $(document).ready(function() {
      
      
            $(".add-more").click(function(){ 
      
                var html = $(".copy").html();
      
                $(".after-add-more").after(html);
      
            });
      
      
            $("body").on("click",".remove",function(){ 
      
                $(this).parents(".control-group").remove();
      
            });
      
      
          });

$(document).ready(function(){
 
 $("#one_way").click(function(){
    $("#add_btn").hide();
  });

  $("#round_trip").click(function(){
    $("#add_btn").show();
  });
});