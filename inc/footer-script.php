    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">

    window.onload = function(){

       $( 'img' ).each( function () {
           var iw = $(this).width();
           var ih = $(this).height();
           if(iw > ih){
             $(this).css({'width':'auto'});
             $(this).css({'height':100+'%'});
           }
           else if(ih > iw){
             alert('this');
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
           else if(ih == iw){
             $(this).css({'width':100+'%'});
             $(this).css({'height':'auto'});
           }
        });
      }

    </script>
