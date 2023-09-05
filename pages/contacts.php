<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page">
<head>
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
</head>
<body>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php")?>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/breadcrumbs.php")?>
  <section class="result res">
        <div class="about__wrapper">
               <div class="about__ceva">
                   <div class="about__img">
                	  <?$getContacts = $Db->getall("SELECT * FROM ws_contacts WHERE active = 1 ORDER BY sort DESC");
						foreach ($getContacts AS $k=>$contact){?>
                         <img src="/upload/contacts/<?=$contact['image']?>" alt="header image" >
                   </div>
                         <? } ?>
               </div>  
        </div>
             <div class="contacts_txt container ">
			    <div class="row">
			   <div class="textcontact col-12 col-sm-12 col-md-4 col-lg-2 col-x2-2"><?=$Main->GetPageIncData('TEXT_CONTACTS' , $CCpu->lang)?></div>
			    <div class="blok3 col-1 col-sm-12 col-md-4 col-lg-2 col-x1-1 ">
            <div class="questions__subtitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_KONTAKTS_SEND_BUTTON_FORM_TITLE']?></div>
            <div class="questions__form">
                <div class="name">
                    <label for="name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_NAME']?><span>*</span></label>
                    <input type="text" id="name3" class="feedback_input3" >
                </div>
                <div class="name">
                    <label for="name"><?=$GLOBALS['ar_define_langterms']['MSG_KONTAKT_PAGE_POP_UP']?><span>*</span></label>
                    <input type="text" id="email3" placeholder="transmixt.lines@mail.ru"  class="feedback_input3" >
                </div>
                <div class="phone" >
                    <label for="phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_PHONE_NUMBER']?><span>*</span></label>
                    <input type="text" id="tel3" class="feedback_input3" >
                    </div> 
                    <div class="phone" >	
                    <label for="phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_POP_UP_REVIEWS_SEND_']?> <span>*</span></label>
                    <textarea  type="text" id="text3" class= "feedback_input3"> </textarea>
                </div>  
            </div>
            <button class="questions__btn" onclick="send_question3()" ><?=$GLOBALS['ar_define_langterms']['MSG_MSG_KONTAKTS_SEND_BUTTON_FORM_BUTTON']?></button>
        </div>
        </div>
</div>
   </section>
   




   
   


 
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>
<script>
	function send_question3(){
		var name = $.trim($('#name3').val()) ;
		var email = $.trim($('#email3').val());
		var message = $.trim($('#text3').val());
		var phone = $.trim($('#tel3').val());
		var errors = false;
		$('.feedback_input3').each(function(){
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
					'task':'feedback3',
					'name':name,
					'message':message,
					'email':email,
					'phone':phone

				},
				
				success:function(msg){
					loader_destroy();
					if ($.trim(msg) == 'ok'){
						show('Запроc был отправлен');
						$('.feedback_input3').val('');
					}else{
						show('Ощибка-проверьте введеные данные');
					}
				}
			})
		}
	}
	</script>
</body>