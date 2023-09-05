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
  	<div class="mersedes__title title_news"><?=$CCpu->writetitle(4)?></div>
        <div class="about__wrapper">
               <div class="about__block1">
                 <div class="about__img">
                	<?$getOffers = $Db->getall("SELECT * FROM ws_offers WHERE active = 1 ORDER BY sort DESC");
						foreach ($getOffers AS $k=>$offers){?>
                    <img src="/upload/offers/<?=$offers['image']?>" alt="header image" >
                 </div>
                      <? } ?>
               </div>
        </div>
        <div class="offer_txt">
			<?=$Main->GetPageIncData('TEXT_ABOUT__US' , $CCpu->lang)?>
		</div>
    </section>

 
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>

</body>