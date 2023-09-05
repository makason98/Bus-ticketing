  <nav>
        <header class="header">
            <div id="button" class="burger" onclick="myFunction()" >
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__part1">
                <div class="header__logo">
                    <a href="<?=$CCpu->writelink(1)?>"><img src="/img/logo.png" alt="logo"></a> <!-- logo -->
                </div>
                <div class="header__online online-active">
                    <a href="<?=$CCpu->writelink(1)?>"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_HEADER_BUY_TICKETS']?></a>  <!-- Right logo text -->
                    <div class="header__descr"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_HEADER_TRANSPORT']?></div>  <!-- Right logo text -->
                </div>
                <div class="header__icons icons-active">
                    <div class="header__wrapper">
                        <a class="header__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_FACEBOOK']?>" target="_blank"></a>
                        <a class="header__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_VKONTAKTE']?>" target="_blank"></a>        <!-- Social MEdia -->
                        <a class="header__item" href="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_SOCIAL_MEDIA_ODNOKLASSNIKI']?>" target="_blank"></a>
                    </div>
                </div>
                <button class="header__btn btn-active" onclick="setCallback($(this))"  ><?=$GLOBALS['ar_define_langterms']['MSG_ALL_CALL_ORDER']?></button>  <!-- Orde a call -->
        
                
            </div>
            <hr class="header__hr">
    
            <div id="butoff" class="header__part2 menu-active">
                <ul class="header__ul ">
                    <li class="header__list">

                        <button class="btn1"><?=$CCpu->writetitle(735)?></button>    <!-- О компаний -->
                        <span class="header__span">
                            <img src="/icons/Down_Arrow.png" alt="">
                        </span>
                        <div class="company">
                            <button><a href="<?=$CCpu->writelink(735)?>"><?=$CCpu->writetitle(735)?></a></button> <!-- О компаний -->
                        </div>
                        <div class="autobus"><a href="<?=$CCpu->writelink(69)?>"><?=$CCpu->writetitle(69)?></a></div>  <!-- Autobus -->
                    </li>
                    
                    <li class="header__list">
                        <a href="<?=$CCpu->writelink(7)?>"><?=$CCpu->writetitle(7)?></a>    <!-- Voprosy Otvety-->
                    </li>
                    <li class="header__list">
                        <a href="<?=$CCpu->writelink(70)?>"><?=$CCpu->writetitle(70)?></a>   <!-- novosty -->
                    </li>
                    
                    <li class="header__list">
                        <button class="preoffer"><?=$CCpu->writetitle(4)?></button>   <!-- PreOffers-->
                        <span class="header__span">
                            <img src="/icons/Down_Arrow.png" alt="">
                        </span>
                        <div class="offer"><a href="<?=$CCpu->writelink(4)?>"><?=$CCpu->writetitle(4)?></a></div>    <!-- -->
    
                        
                    </li>
                    <li class="header__list">
                        <!-- <a href="">Сотрудничество</a> -->
                        <button class="precooperation"><a href="<?=$CCpu->writelink(734)?>"><?=$CCpu->writetitle(734)?></a></button>     <!-- <a href="<?=$CCpu->writelink(734)?>"></a> -->
                        
                        	
                    </li>
                    <li class="header__list">
                        <a href="<?=$CCpu->writelink(74)?>"><?=$CCpu->writetitle(74)?></a>     <!-- Contatcs -->
                    </li>
                    
                    
                </ul>
                <div>
                    <select name="lang" id="lang" class="ro nice-select">
                    	<?$ArrLangs = get_list_lang_public();?>
		                    <?foreach ($ArrLangs['lang'] AS $k=>$lang_code){?>             <!-- Language select -->
                        <option value="" <a href="<?=$lang_code['href']?>"<?if ($lang_code['code'] == $CCpu->lang){?>class="active"<?}?>><?=$lang_code['code']?></a></option>
                       <?	}?>
                    </select>
                </div>
    
                


            </div>
            
        </header>
        
    </nav> 
   <script>
   function myFunction() {
  var element = document.getElementById("buttoff");
  element.classList.remove("menu-active");
} 

</script>