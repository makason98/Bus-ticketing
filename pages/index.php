<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page" >
	<head>
		<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
	</head>
	<body>
		<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>

		
		
	
                <? include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php") ?>
                


				    <section class="promo">

        <div class="promo__important">
            <div class="promo__tour ccc">
                <button class="tour tab_btn " id="tour" >
                    <div class="tur-name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_TUR']?></div>     
                    <div class="arrow">
                        
                        <span class="test arrowBlack">
                            <img src="/icons/Group.svg" alt=""> 
                        </span>
                        <span class="test2 arrowWhite">
                            <img src="/icons/arr-wh.svg" alt="">
                        </span>
                        
                    </div>
                </button>

                <button class="retour tab_btn activity"  id="retour" >
                    <div class="retour__name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_RETOUR']?></div>  
                
                    <div class="arrow__retour">
                        <img src="/icons/izmenenie.svg" alt="">
                    </div>
                    
                </button>
            </div> 
    
            <form class="promo__form" method="get" action="<?=$CCpu->writelink(71)?>">
                <div class="start"  >
                    <label for="start" class="label" >
                    	<?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_FROM']?>
                    </label>
                   <select class="select nice-select" id="start" name="departure">
                       <?$getCities = $Db->getall("SELECT id,title__ AS title FROM ws_cities WHERE active = 1 ORDER BY sort DESC ");
							foreach ($getCities AS $k=>$citi){?>
                       <option value="<?=$citi['id']?>"><?=$citi['title']?></option>
                       <?} ?>
                   </select>
                   
                  </div>
                
                <div class="finish"  >
                    <label for="finish" class="label" >
                    	<?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_TO']?>
                    </label>
                    
                   <select class="select nice-select" id="finish" name="arrival">
                       <?foreach ($getCities AS $k=>$citi){?>
                       <option value="<?=$citi['id']?>">
                       	<?=$citi['title']?>
                       	</option>
                       <?	} ?>
                   </select>
                  </div>
                  <div class="data"  >
                    <label for="data" class="label" ><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_GO_DATE']?>   
                    </label>
                   
                   <input type="date" class="data" id="data" name="date" placeholder="<?php echo date('d-m-Y'); ?>">
                   
                  </div>  
                
                  <div class="pasagere"  >
                    <label for="pasagere" class="label" ><?=$GLOBALS['ar_define_langterms']['MSG_ALL_PASSANGERS']?>
                    </label>
                   <input type="text" class="pasagere" id="pasagere" name="passangers" placeholder="<?=$GLOBALS['ar_define_langterms']['MSG_ALL_PASSANGER_PLACEHOLDER_TEXT']?>">
                   
                  </div>
                <input type="submit" value="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_BUTTON_INPUT_SEARCH']?>" class="input__btn" id="input__btn">
            </form> 
        </div>

		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <div class="swiper">
            <div class="swiper-wrapper">
					<?$getSlider = $Db->getall("SELECT * FROM ws_slider WHERE active = 1 ORDER BY sort DESC");
						foreach ($getSlider AS $k=>$slide){?>
							<div class="swiper-slide">
						<div class="promo__first slide_<?=$slide['id']?>">
                	
			                    <div class="promo__wrapper">
			                    	
			                        <div class="promo__title"><?=$slide['title_'.$CCpu->lang]?></div> 
			                    <div class="promo__descr"><?=$slide['text_'.$CCpu->lang]?></div>
			                    <hr class="promo__hr">
			                    <div class="promo__link">
			                        <a href="<?=$slide['link_'.$CCpu->lang]?>"><?=$slide['linkname_'.$CCpu->lang]?></a>
			                        <span><img src="/icons/arr-wh.svg" alt=""></span>
			                    </div>
			                    </div>
			                </div>
			                </div>
					<?	}?>	
            </div>
        </div>  	
    </section> 
 <section class="about">
        <div class="about__wrapper">
               <div class="about__block1">
                <div class="about__img">
                	<?$getIndeximg = $Db->getall("SELECT * FROM ws_index WHERE active = 1 ORDER BY sort DESC");
						foreach ($getIndeximg AS $k=>$index){?>
                    <img src="/upload/index/<?=$index['image']?>" alt="header image" >
                </div>
                <? } ?>
                <div class="about__subtitle">
                    <div class="about__text">
                        <?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_SUBTITLE']?>
                    </div>
                </div>
               </div>  
               <div class="about__block2">
                    <div class="about__title">
                        <?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_TITLE']?>
                    </div>
                    <div class="about__descr">
                        <div class="about__item">
                            <div class="about__icons">
                                <img src="/icons/icons.png" alt="">
                            </div>
                            <div class="about__subtext">
                                <div class="about__pretitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_PRETITLE']?></div>
                            <div class="about__subdescr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_SUBDESCR']?></div>
                            </div>
                        </div>
                        <div class="about__item">
                            <div class="about__icons">
                                <img src="/icons/icons.png" alt="">
                            </div>
                            <div class="about__subtext">
                                <div class="about__pretitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_PRETITLE1']?></div>
                            <div class="about__subdescr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_SUBDESCR1']?></div>
                            </div>
                        </div>
                        <div class="about__item">
                            <div class="about__icons">
                                <img src="/icons/icons.png" alt="">
                            </div>
                            <div class="about__subtext">
                                <div class="about__pretitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_PRETITLE2']?></div>
                            <div class="about__subdescr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_SUBDESCR2']?></div>
                            </div>
                        </div>
                    </div>
                   <div class="about__link">
                        <hr>
                        <a href="<?=$CCpu->writelink(735)?>"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ABOUT_INDEX_MORE_ABOUT_COMPANY']?></a>
                        <img src="/icons/arrow-dark.png" alt="">
                    </div>
                   
               </div>
        </div>
    </section>
    <section class="questions" >
        <div class="questions__block1">
            <div class="questions__title"><?=$CCpu->writetitle(7)?></div>                            
                    <?$getQuestions = $Db->getall("SELECT * FROM ws_questions WHERE active = 1 ORDER BY sort DESC LIMIT 3");
					$i = 0;
								foreach ($getQuestions AS $k=>$question){
										$collapse = 'collapse';
										$collapsed = 'collapsed';
									if ($i == 0){
										$collapse = '';
										$collapsed = '';
									}?>
                <div class="accordion-item">
	            	<div class="accordion accordion-flush">
	                  <h2 class="accordion-header">
	                    <button class="accordion-button <?=$collapsed?>" type="button" onclick="toggleAnswer($(this))">
	                       <p class="acordion__text"><?=$question['question']?></p>
	                    </button>
	                  </h2>
	                  <div class="accordion-collapse <?=$collapse?>" >
	                    <div class="accordion-body"><?=$question['answer']?></div>
	                  </div>
	                </div>
            	</div>
			<? $i++; } ?>
            <div class="questions__link">
                <hr>
                <a href="<?=$CCpu->writelink(7)?>"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_QUESTION_ANSWER_INDEX_LINK_TOPAGE']?></a>
                <span><img src="/icons/arrow-dark.png" alt=""></span>
            </div>
        </div>
        <div class="questions__block2 blockreview1">
            <div class="questions__subtitle"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_TITLE']?></div>
            <div class="questions__form">
                <div class="name">
                    <label for="name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_NAME']?><span>*</span></label>
                    <input type="text" id="named" class="feedback_input" >
                </div>
                <div class="phone" >
                    <label for="phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_PHONE_NUMBER']?><span>*</span></label>
                    <input type="text" id="teled" class="feedback_input" >
                </div> 
            </div>
            <button class="questions__btn" onclick="send_question()" ><?=$GLOBALS['ar_define_langterms']['MSG_MSG_CALL_POPUP_CALL_BUTTON']?></button>
        </div>
    </section>
    <section class="review">
        <div class="review__wrapper">
            <div class="swiper">
                <div class="swiper-wrapper">
                   <?$getReviews = $Db->getall("SELECT * FROM ws_reviews WHERE active = 1 ORDER BY sort DESC ");
				   $reviewsArray = array_chunk($getReviews,2);
								foreach ($reviewsArray AS $k=>$review){?>
									<div class="swiper-slide content">
									<?foreach ($review AS $key=>$rev){
										if ($key == 0){?>
										<div class="review__block">
						                        <div class="review__title">
						                            <div class="review__icon">
						                                <img src="/icons/straight-quotes 1.png" alt="">
						                            </div>
						                            <div class="review__name"><?=$rev['name']?></div>
						                        </div>
						                        <div class="review__descr"><?=$rev['text']?></div>
						                    </div>
										<?}else{?>
											<div class="review__block_2">
						                        <div class="review__title">
						                            <div class="review__icon">
						                                <img src="/icons/straight-quotes 1.png" alt="">
						                            </div>
						                            <div class="review__name"><?=$rev['name']?></div>
						                        </div>
						                        <div class="review__descr"><?=$rev['text']?></div>
						                        <div class="review__link">
						                            <hr>
						                            <a href=""><?=$GLOBALS['ar_define_langterms']['MSG_ALL_REVIEWS_BUTTON_MORE']?>
						                                <span><img src="/icons/arrow-dark.png" alt=""></span>
						                            </a>
						                        </div>
						                    </div>
										<?} }?>
										
									</div> 
                  <? }?>
                </div>
                <div class="swiper-pagination"></div>
         </div> 
         <button class="review__btn" onclick="setCallback1($(this))" ><?=$GLOBALS['ar_define_langterms']['MSG_ALL_LEFT_REWIEW_BUTTON']?></button>  <!-- Orde a call -->
    </section> 
 <section class="bus">
         <div class="bus__wrapper news1">
            <?$getNewsIndex = $Db->getall("SELECT * FROM ws_news WHERE active = 1 ORDER BY date DESC LIMIT 3");
                    foreach ($getNewsIndex as $k => $newsindex) { ?>
            
            <div class="bus__block   ">
            	<a href="<?= $CCpu->writelink(15, $newsindex['id']) ?>" class="text-btn">                <!-- News INDE BLOCKS -->
                <div class="bus__img  radiusimg  ">
                    <img src="/upload/news/<?= $newsindex['image'] ?>" alt="">
                </div>
                <div class="bus__text">
                    <div class="bus__title"><?= $newsindex['title_' . $CCpu->lang] ?></div>
                    <div class="bus__descr descriere"><?= $newsindex['preview_' . $CCpu->lang] ?></div>
                    <?
                                $monthId = date('m', strtotime($newsindex['date']));
                                $month = $Db->getone("SELECT title_" . $CCpu->lang . " AS title FROM ws_months WHERE id = '" . $monthId . "' ");
                                $day = date('d', strtotime($newsindex['date']));
                                $year = date('Y', strtotime($newsindex['date']));
                                ?>
                    <div class="bus__data "><?= $day . ' ' . $month['title'] . ' ' . $year ?></div>
                    <div class="review__link">
						                            <hr>
						                            <a href="<?= $CCpu->writelink(15, $newsindex['id']) ?>"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_READ_ALL_NEEWS_BUTTON']?>
						                                <span><img src="/icons/arrow-dark.png" alt=""></span>
						                            </a>
						                        </div>
                </div>
            </div>
            </a>
<? } ?>
        </div>
    </section> 
		<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>
		<style>
			<?$getSlider = $Db->getall("SELECT * FROM ws_slider WHERE active = 1 ORDER BY sort DESC");
				foreach ($getSlider AS $k=>$slide){?>
				.slide_<?=$slide['id']?>{
					background:url(/upload/slider/<?=$slide['image']?>) no-repeat  center;
				}
			<?	}?>	
		</style>
		<script>
			function toggleAnswer(item){
				$(item).toggleClass('collapsed');
				$(item).closest('.accordion-header').next().toggleClass('collapse');
			}
		</script>

		<script>
	function send_question(){
		var name = $.trim($('#named').val()) ;
		var tel = $.trim($('#teled').val());
		var errors = false;
		$('.feedback_input').each(function(){
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
						$('.feedback_input').val('');
					}else{
						show('Ощибка-проверьте введеные данные');
					}
				}
			})
		}
	}
</script>

	</body>
</html>