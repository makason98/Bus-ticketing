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
  	<div class="mersedes__title title_news"><?=$CCpu->writetitle(735)?></div>

        <div class="about__wrapper">
        	
               <div class="about__block1">
               	
                <div class="about__img">
                	<?$getAbout = $Db->getall("SELECT * FROM ws_about WHERE active = 1 ORDER BY sort DESC");
						foreach ($getAbout AS $k=>$aboutimg){?>
                    <img src="/upload/about/<?=$aboutimg['image']?>" alt="header image" >
                    
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
                   
                   
               </div>
        </div>
  <div class="about_txt">
			    <?=$Main->GetPageIncData('TEXT_ABOUT_US' , $CCpu->lang)?>
		     </div>

    </section>

 
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>

</body>