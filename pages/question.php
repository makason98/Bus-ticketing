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
  <section class="questions answerblock">
        <div class="questions__block1">
            <div class="questions__title"><?=$CCpu->writetitle(7)?></div>                            
                    <?$getQuestions = $Db->getall("SELECT * FROM ws_questions WHERE active = 1 ORDER BY sort DESC ");
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

        </div>
        
    </section>
    </section>
   
<?include($_SERVER['DOCUMENT_ROOT'].'/pages/blocks/footer.php')?>

<script>
			function toggleAnswer(item){
				$(item).toggleClass('collapsed');
				$(item).closest('.accordion-header').next().toggleClass('collapse');
			}
		</script>
</body>