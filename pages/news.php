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
  	
  	<div class="mersedes__title "><?=$GLOBALS['ar_define_langterms']['MSG_ALL_NEWS_TITLE']?></div>
 <div class="news_data ">
 	
 	
         <div class="bus__wrapper  ">
            <?$getNews = $Db->getall("SELECT * FROM ws_news WHERE active = 1 ORDER BY date DESC  ");
                    foreach ($getNews as $k => $article) { ?>
            <a href="<?= $CCpu->writelink(15, $article['id']) ?>" class="text-btn">
            <div class="bus__block img1 ">
            	
                <div class="bus__img    ">
                    <img src="/upload/news/<?= $article['image'] ?>" alt="">
                </div>
                <div class="bus__text newsblock ">

                    <div class="bus__title"><?= $article['title_' . $CCpu->lang] ?></div>
                    <div class="bus__descr"><?= $article['preview_' . $CCpu->lang] ?></div>
                    <?
                                $monthId = date('m', strtotime($article['date']));
                                $month = $Db->getone("SELECT title_" . $CCpu->lang . " AS title FROM ws_months WHERE id = '" . $monthId . "' ");
                                $day = date('d', strtotime($article['date']));
								$year = date('Y', strtotime($article['date']));
                                
                                ?>
                     <div class="bus__data "><?= $day . ' ' . $month['title'] . ' ' . $year ?></div>
                    <div class="review__link">
						                            <hr>
						                            <a href="<?= $CCpu->writelink(15, $article['id']) ?>"><?=$GLOBALS['ar_define_langterms']['MSG_ALL_READ_ALL_NEEWS_BUTTON']?>
						                                <span><img src="/icons/arrow-dark.png" alt=""></span>
						                            </a>
						                        </div>
                </div>
                
            </div>
            </a>
<? } ?>
        </div>
       
        
</div>

    </section>

 
<?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>


</body>