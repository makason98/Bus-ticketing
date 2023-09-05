<footer class="footer">

        <div class="footer__cont">
            <div class="footer__wrapper">
                <div class="footer__block">
                    <div class="footer__name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADRESS_FOOTER_NAME']?></div>          
                    <div class="footer__adres"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADRESS_FOOTER_ADRESS']?></div>       <!-- FOOTER_ADRESS -->     
                    <div class="footer__link">
                        <a href="#" id="email"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADRESS_FOOTER_EMAIL']?></a>
                    </div>
                </div>
                <div class="footer__block">
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(735)?>"><?=$CCpu->writetitle(735)?></a>
                    </div>
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(7)?>"><?=$CCpu->writetitle(7)?></a>
                    </div>
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(70)?>"><?=$CCpu->writetitle(70)?></a>
                    </div>
                </div>
                <div class="footer__block">
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(4)?>"><?=$CCpu->writetitle(4)?></a>    <!-- Offers -->
                    </div>
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(734)?>"><?=$CCpu->writetitle(734)?></a>      <!-- Colaboration-->
                    </div>
                    
                </div>
    
                <div class="footer__block">
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(74)?>"><?=$CCpu->writetitle(74)?></a>  <!-- Contacts -->
                    </div>
                    <div class="footer__link">
                        <a href="<?=$CCpu->writelink(75)?>"><?=$CCpu->writetitle(75)?></a>    <!-- Privacy -->
                    </div>
                    
                </div>
                <div class="footer__icons">
                    <a class="footer__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_FACEBOOK']?>" target="_blank"></a>
                    <a class="footer__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_VKONTAKTE']?>" target="_blank"></a>              <!-- Social MEdia -->
                    <a class="footer__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_ODNOKLASSNIKI']?>" target="_blank"></a>
                </div>
    
            </div>
        </div>
 <div class="logo-wm" >
<a href="https://webmaster.md">
    <img src="/img/webmaster.png" alt="">
    </a>
</div> 

        
    </footer>


 
<section class="cookie" >
    <hr class="cookie__hr">
    <div class="cookie__wrapper">
     <div class="cookie__text">
        <div class="cookie__title"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_COOKIES_COOKIE']?></div>
        <div class="cookie__descr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_COOKIES_DESCRIERE']?></div>
     </div>  
    <div class="cookie__btn">
        <button class="cookie__accept" onclick="setOk($(this))">
            <?=$GLOBALS['ar_define_langterms']['MSG_MSG_COOKIES_ACCEPT']?></button>
    <button class="cookie__decline"  onclick="setOk($(this))" ><?=$GLOBALS['ar_define_langterms']['MSG_MSG_COOKIES_NOT_ACCEPT']?></button>
    </div>
    </div>
</section>
<div class="popup_overlay" onclick="setClosePop($(this))"></div>
    <section class="callback">
        
        <div class="questions__block2 callback__pop">
            <button class="callback__close" onclick="setClosePop($(this))">
                <span></span>
                <span></span>
            </button>
            <div class="questions__subtitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_TITLE']?></div>
            <div class="questions__form">
                <div class="name">
                    <label for="name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_NAME']?><span>*</span></label>
                    <input type="text" id="name1" class= "feedback_input1">
                </div>
                <div class="phone" >
                    <label for="phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_PHONE_NUMBER']?> <span>*</span></label>
                    <input type="tel" id="tel1" class= "feedback_input1">
                </div>  
            </div>
            <button class="questions__btn" onclick="send_question1()" ><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_CALL_BUTTON']?></button>
        </div>
        <div id="back"></div>
    </section>
    
    <section class="callback1">
        
        <div class="questions__block2 blockreview callback__pop">
            <button class="callback__close" onclick="setClosePop($(this))">
                <span></span>
                <span></span>
            </button>
            <div class="questions__subtitle"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_LEFT_REWIEW_BUTTON']?></div>
            <div class="questions__form">
                <div class="name">
                    <label for="name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_NAME']?><span>*</span></label>
                    <input type="text" id="name2" class= "feedback_input2">
                </div>
                <div class="phone" >
                    <label for="phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_POP_UP_REVIEWS_SEND_']?> <span>*</span></label>
                    <textarea  type="text" id="message1" class= "feedback_input2"> </textarea>
                </div>  
            </div>
            <button class="questions__btn" onclick="send_question2()" ><?=$GLOBALS['ar_define_langterms']['MSG_ALL_LEFT_REWIEW_BUTTON']?></button>
        </div>
        <div id="back"></div>
    </section>
    

<button onclick="topFunction()" id="myBtn" title="Go to top"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_SCROLL_TITLE']?></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
	function send_question1(){
		var name = $.trim($('#name1').val());
		var tel = $.trim($('#tel1').val());
		var errors = false;
		$('.feedback_input1').each(function(){
			if ($.trim($(this).val()) == ''){
				accent($(this));
				errors = true;
			}
		})
		
		if (errors == false){
			loader();
			$.ajax({
				type:'post',
				url:'<?=$CCpu->writelink(3)?>',
				data:{
					'task':'feedback',
					'name':name,
					'tel':tel

				},
				success:function(msg){
					loader_destroy();
					if ($.trim(msg) == 'ok'){
						show('Запроc был отправлен');
						$('.feedback_input1').val('');
					}else{
						show('Ощибка-проверьте введеные данные');
					}
				}
			})
		}
	}
</script>

<script>
	function send_question2(){
		var name = $.trim($('#name2').val());
		var text = $.trim($('#message1').val());
		var errors = false;
		$('.feedback_input2').each(function(){
			if ($.trim($(this).val()) == ''){
				accent($(this));
				errors = true;
			}
		})
		
		if (errors == false){
			loader();
			$.ajax({
				type:'post',
				url:'<?=$CCpu->writelink(3)?>',
				data:{
					'task':'feedback1',
					'name':name,
					'text':text

				},
				success:function(msg){
					loader_destroy();
					if ($.trim(msg) == 'ok'){
						show('Запроc был отправлен');
						$('.feedback_input2').val('');
					}else{
						show('Ощибка-проверьте введеные данные');
					}
				}
			})
		}
	}
</script>

<script>
    function setTakeoff(){
        $('.station_descr').toggleClass('text-decoration');
    };
</script>


<script>
    function setCallback(){
        $('.callback').show();

        $('.popup_overlay').show();
        const popup = $(".callback");
    $(popup).fadeIn(2000);
    }

</script>
<script>
    function setCallback1(){
        $('.callback1').show();

        $('.popup_overlay').show();
        const popup = $(".callback1");
    $(popup).fadeIn(2000);
    }

</script>










<script>
    function setClosePop(){
        $('.callback').hide();
        $('.callback1').hide();
        $('.popup_overlay').hide();
    };
</script>
    <script>
    function setOk(tab){
            $('.cookie').hide();
            
        };
    function setClose(btn){
        $('.rezerv').hide();
        $('.btn_buy').closest(".result__block").removeClass("block-activity");
        $('.btn_buy').removeClass('btn-cancel');
        $('.btn_buy').text('Купить билет');
    }


function setFreeLocal(item){
    $(item).toggleClass('item-free');
};
    

    </script>
    
    

    <script src="/js/script.js"></script> 
    <script src="/js/search.js"></script>
    <script src="/js/blocks.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/js/swiper.js"></script>
