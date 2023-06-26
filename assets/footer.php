    <a id="back-to-top" style="cursor: pointer;">
        <i class="fa fa-angle-up"></i>
    </a>

    <style type="text/css">
        .search-result {
            position: fixed;
            top: 80px;
            right: 340px;
            background-color: #c21a68;
            height: 80%;
            width: 200px;
            display: none;
        }
    </style>
    <div class="search-result" id="search-result"></div>

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
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#word').keyup(function()
            {
                var value = $(this).val()
                var data = "value="+value

                if( value == '' )
                {
                    $('.search-result').css('display', 'none')
                }

                else
                {
                    $.ajax
                    (
                        {
                            type: 'POST',
                            url: 'http://localhost/beyit-odev/api.php',
                            data: data,
                            success: function(e)
                            {
                                $('.search-result').css('display', 'block')
                                $('.search-result').html(e)
                            }
                        }
                    )
                }
            })
        })
    </script>
</body>
</html>