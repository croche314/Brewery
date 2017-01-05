</div> <!-- end .container-fluid -->

<script>
$("document").ready(function($){
   var leftNav = $('#leftNav');
   $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          leftNav.addClass("visible");
          leftNav.removeClass("hidden");
      } else {
          leftNav.addClass("hidden");
          leftNav.removeClass("visible");
      }
   });
});
</script>