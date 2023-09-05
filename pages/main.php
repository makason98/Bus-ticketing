<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page">
	<head>
		<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
	</head>
<body>
  		<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>
  		
		 <? include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php") ?>


<section class="promo www ">

  <div class="promo__important vvv">
    <div class="promo__tour ccc">
        <button class="tour " id="tour">
            <div class="tur-name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_TUR']?></div>   <!-- Tur -->
            <div class="arrow">
                
                <span class="test">
                    <img src="/icons/Group.svg" alt=""> 
                </span>
                <span class="test2">
                    <img src="/icons/arr-wh.svg" alt="">
                </span>
                
            </div>
        </button>
        <button class="retour activity"  id="retour">
            <div class="retour__name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_RETOUR']?></div>   <!-- Retur -->
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
<div class="bread">

      	<a href="<?=$CCpu->writelink(1)?>"><?=$CCpu->writetitle(1)?></a>
							<a href="<?=$CCpu->writelink(69)?>"><?=$page_data['title']?></a>              <!-- bus link -->
   </div>
   </div>
</section>
<div class="mersedes1">
	<div class="mersedes__title general"><?=$CCpu->writetitle(69)?> </div>
	</div>
<?$getBuses = $Db->getall("SELECT * FROM ws_buses WHERE active = 1 ORDER BY sort DESC");
$i = 0;
	foreach ($getBuses AS $k=>$bus){
		$getBusGallery = $Db->getall("SELECT * FROM ws_photogallery WHERE page_id = '".$page_data['page_id']."' AND elem_id = '".$bus['id']."' ");
		if ($i % 2 == 0){?>
<section class="mersedes">
    <div class="wrapper">
    <div class="mersedes__first">
        <div class="mersedes__block ">
            <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class=".mySwiper"
        thumbs-swiper=".mySwiper21" loop="true" space-between="10" navigation="false" >
        <swiper-slide>
          <img src="/upload/buses/<?=$bus['image']?>" />
        </swiper-slide>
        <?
        	foreach ($getBusGallery AS $k=>$b_gallery){?>
        		<swiper-slide>
        		
		          <img  src="/upload/gallery/<?=$b_gallery['image']?>" />
		         
		        </swiper-slide>
        	<?}
        ?>
      </swiper-container>
      <swiper-container class="mySwiper21" loop="true" space-between="10" slides-per-view="4" free-mode="true"
        watch-slides-progress="true">
        <swiper-slide>
          <img class="thumbimg" src="/upload/buses/<?=$bus['image']?>" />
        </swiper-slide>
       <?
        	foreach ($getBusGallery AS $k=>$b_gallery_thumb){?>
        		<swiper-slide>
		          <img src="/upload/gallery/thumb/<?=$b_gallery_thumb['image']?>" />
		        </swiper-slide>
        	<?}
        ?>
        
      </swiper-container>
        </div>
        <div class="mersedes__block2">
        <div class="mersedes__subtitle"><?=$bus['title_'.$CCpu->lang]?></div>
      <div class="mersedes__text"><?=$bus['text_'.$CCpu->lang]?></div>
        </div>
      </div>
    </div>
    </section>
		<?}else{?>
			<section class="mersedes2" >
  <div class="wrapper2">
    <div class="mersedes2__first">

      <div class="mersedes2__block">
          <div class="mersedes2__subtitle"><?=$bus['title_'.$CCpu->lang]?></div>
        <div class="mersedes2__text"><?=$bus['text_'.$CCpu->lang]?></div>
          
      </div>
      <div class="mersedes2__block2">
        <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class=".mySwiper"
        thumbs-swiper=".mySwiper22" loop="true" space-between="10" navigation="false" allowTouchMove ="true" >
        <swiper-slide>
          <img src="/upload/buses/<?=$bus['image']?>" />
        </swiper-slide>
        <?
        	foreach ($getBusGallery AS $k=>$b_gallery){?>
        		<swiper-slide>
		          <img src="/upload/gallery/<?=$b_gallery['image']?>" />
		        </swiper-slide>
        	<?}
        ?>
      </swiper-container>
      
      <swiper-container class="mySwiper22" loop="true" space-between="10" slides-per-view="4" free-mode="true"
        watch-slides-progress="true" allowTouchMove ="true" >
        
        <swiper-slide>
          <img class="thumbimg" src="/upload/buses/<?=$bus['image']?>" />
        </swiper-slide>
        <?
        	foreach ($getBusGallery AS $k=>$b_gallery){?>
        		<swiper-slide>
		          <img src="/upload/gallery/thumb/<?=$b_gallery['image']?>" />
		        </swiper-slide>
        	<?}
        ?>
      </swiper-container>
         
      </div>
    
</div>
  
  </div>
</section>
		<?}?>

<? $i ++; } ?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    
    
    <script>
    
      function setCallback(){
          $('.callback').show();
          $('.popup_overlay').show();
          const popup = $(".callback");
      $(popup).fadeIn(2000);
      }
  </script>
  <script>
      function setClosePop(){
          $('.callback').hide();
          $('.popup_overlay').hide();
      };
  </script>   
    <script>
        function setOk(tab){
            $('.cookie').hide();
          
        };
        

    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>
</body>
</html>

