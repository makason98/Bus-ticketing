<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page">
<head>
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
<?$article = $Db->getone("SELECT * FROM ws_news WHERE id = '".$pageData['elem_id']."' ")?>
</head>
<body>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php")?>
  <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/breadcrumbs.php")?>

   <section class="result res ">
  	
  	<div class="mersedes__title title_news"><?= $article['title_'. $CCpu->lang] ?></div>
 <div class="bus__wrapper contacts_txt">
               <div class="about__block3">
               	<img class=" imgkintatks" src="/upload/news/<?= $article['image'] ?>" alt="">  
               	     
                    <?
                                $monthId = date('m', strtotime($article['date']));
                                $month = $Db->getone("SELECT title_" . $CCpu->lang . " AS title FROM ws_months WHERE id = '" . $monthId . "' ");
                                $day = date('d', strtotime($article['date']));
								$year = date('Y', strtotime($article['date']));
                                
                                ?>
                     <div class="bus__data1 data2"><?= $day . ' ' . $month['title'] . ' ' . $year ?></div>  
               </div>  
            <div class="bus__descr  " ><?= $article['text_'. $CCpu->lang] ?></div>
        </div>

    </section>
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>


</body>