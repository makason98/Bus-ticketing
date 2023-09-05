<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page">
<head>
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
</head>
<body>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php")?>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/breadcrumbs.php")?>
  <section class="result res ">
  	<div class="mersedes__title title_news"><?=$CCpu->writetitle(734)?></div>
        <div class="about__wrapper">
               <div class="about__block1">
                <div class="about__img">
                	<?$getColaborations = $Db->getall("SELECT * FROM ws_colaborat WHERE active = 1 ORDER BY sort DESC");
						foreach ($getColaborations AS $k=>$colab){?>
                    <img src="/upload/colaborat/<?=$colab['image']?>" alt="header image" >
                </div>
                <? } ?>
               </div>
        </div>
             <div class="colab_txt">
			    <?=$Main->GetPageIncData('TEXT_COLABORATION' , $CCpu->lang)?>
		     </div>
    </section>
    

<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>

</body>