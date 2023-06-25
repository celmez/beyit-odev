    <footer class="footer" id="footer">
        <div class="foot-text">
            ©2023 yemedendoydum.com | Her hakkı saklıdır.
            <br>
            Beyit Kutsi Özalan | 211909003
        </div>
    </footer>

    <a id="back-to-top" style="cursor: pointer;">
        <i class="fa fa-angle-up"></i>
    </a>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function(){
                var distance = $(window).scrollTop();
                //console.log(distance)

                if( distance > 100 )
                {
                    $('.navbar').attr( 'class', 'navbar-sticky' )
                    $('#back-to-top').css('display', 'block')
                    $('#back-to-top').css('transition', '.4s ease')
                }

                else
                {
                    $('.navbar-sticky').attr( 'class', 'navbar' )
                    $('#back-to-top').css('display', 'none')
                }
            })
            $('#back-to-top').click(function(){
                window.scrollTo(0, 0)
            })
        })
    </script>
</body>
</html>