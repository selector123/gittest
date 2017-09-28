


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/template/js/bootstrap.js"></script>
    <script src="/template/js/salvattore.min.js"></script>
    <script src="/template/js/prettyPhoto.js" type="text/javascript" charset="utf-8"></script> 
    <!-- include Cycle2 -->
    <script src="/template/js/cycle1.js"></script>

    <!-- include one or more optional Cycle2 plugins -->
    <script src="/template/js/cycle2.js"></script>
    <script>
      $(document).ready(function() {
        $(".add-to-cart").click(function() {
          var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+id, {}, function (data) {
          $("#cart-count").html(data);
        });
        return false;
        });
        
      });
    </script>
  </body>
</html>