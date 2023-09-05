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
  	<div class="mersedes__title title_news"><?=$CCpu->writetitle(75)?></div>
        <div class="about__wrapper">
               <div class="about__block1">
                <div class="about__img">
                	<?$getPolitics = $Db->getall("SELECT * FROM ws_politic WHERE active = 1 ORDER BY sort DESC");
						foreach ($getPolitics AS $k=>$polite){?>
                    <img src="/upload/politic/<?=$polite['image']?>" alt="header image" >
                </div>
                <? } ?>
               </div>  
             
        </div>
			<div class="contacts_txt">
			    <?=$Main->GetPageIncData('TEXT_PRIVACY' , $CCpu->lang)?>
		    </div>
   </section>

<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>

</body>