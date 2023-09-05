<!DOCTYPE html>
<html lang="<?=$CCpu->lang?>" class="page">

<head>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/head.php")?>
</head>

<body>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/whitefog.php")?>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/header.php")?>
    <section class="result">
        <section class="promo www yyy">
            <div class="promo__important vvv">
                <div class="promo__tour ccc">
                    <button class="tour tab_btn" id="tour">
                        <div class="tur-name">
                            <?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_TUR']?>
                        </div>
                        <div class="arrow">

                            <span class="test">
                                <img src="/icons/Group.svg" alt="">
                            </span>
                            <span class="test2">
                                <img src="/icons/arr-wh.svg" alt="">
                            </span>

                        </div>
                    </button>

                    <button class="retour activity tab_btn" id="retour">
                        <div class="retour__name">
                            <?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_RETOUR']?>
                        </div>

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
                   
                   <input type="date" class="data" id="data" name="date" placeholder="<? echo date('d-m-Y'); ?>">
                   
                  </div>  
                
                  <div class="pasagere"  >
                    <label for="pasagere" class="label" ><?=$GLOBALS['ar_define_langterms']['MSG_ALL_PASSANGERS']?>
                    </label>
                   <input type="text" class="pasagere" id="pasagere" name="passangers" placeholder="<?=$GLOBALS['ar_define_langterms']['MSG_ALL_PASSANGER_PLACEHOLDER_TEXT']?>">
                   
                  </div>
                <input type="submit" value="<?=$GLOBALS['ar_define_langterms']['MSG_MSG_ADMIN_BUTTON_INPUT_SEARCH']?>" class="input__btn" id="input__btn">
            </form> 
            </div>
        </section>
        <div class="wrapper-result">
            <div class="result__container">
                <div class="result__title">
                    <?$departure = $Db->getone("SELECT title__ AS title FROM ws_cities WHERE id = '".(int)$_GET['departure']."' ");
                    $arrival = $Db->getone("SELECT title__ AS title FROM ws_cities WHERE id = '".(int)$_GET['arrival']."' ")?>
                    <?=$departure['title']?> - <?=$arrival['title']?>
                </div>
                <?$getDirectionsDate = $Db->getall("SELECT * FROM ws_catalog_elements WHERE id = 9 ORDER BY id DESC ");
					foreach ($getDirectionsDate AS $k=>$directiondate){?>
                <div class="result__data">
                    <?=$directiondate['departure_date']?>
                </div>
                <?	} ?>
                <span>|</span>
                <div class="result__pasagere"><?=(int)$_GET['passangers']?> <?=$GLOBALS['ar_define_langterms']['MSG_MSG__PASSANGERS']?></div>
                <button class="result__change"><?=$GLOBALS['ar_define_langterms']['MSG_MSG__']?></button>
            </div>
            <?$Elems = array();
            $dateFromGet = explode('-',$_GET['date']);
            $date = $dateFromGet[0].'-'.$dateFromGet[1].'-'.$dateFromGet[2];
            	$getDirections = $Db->getall("SELECT id FROM ws_catalog WHERE active = 1 AND departure = '".(int)$_GET['departure']."' AND arrival = '".(int)$_GET['arrival']."' ORDER BY id DESC  ");
            	foreach ($getDirections AS $k=>$direction){
            		$getRaces = $Db->getall("SELECT * FROM ws_catalog_elements WHERE active = 1 AND section_id = '".$direction['id']."' AND departure_date = '".$date."' ");
            		foreach ($getRaces AS $key=>$race){
						$Elems[] = $race;
            		}
            	}
            ?>
		<?if (!empty($Elems)){
		foreach ($Elems as $k => $element) { ?>
            <div class="result__block" data-id="<?=$element['id']?>">
                <div class="result__block_1">
                    <div class="result__block_1_wrapper">
                        <div class="result__departure">
                            <div class="result__block_time">
                                <?=date('H:i',strtotime($element['departure_time']))?>
                            </div>
                            <div class="result__block_date">
                                <?=date('d.m.Y',strtotime($element['departure_date']))?>
                            </div>
                        </div>

                        <div class="result__block_way">
                            <?=$element['travel_time_'.$CCpu->lang]?>
                        </div>
                        <div class="result__arrival">
                            <div class="result__block_time">
                                <?=date('H:i',strtotime($element['arrival_time']))?>
                            </div>
                            <div class="result__block_date">
                                <?=date('d.m.Y',strtotime($element['arrival_date']))?>
                            </div>
                        </div>
                    </div>
                    <div class="result__block_price">
                        <?=$element['price_adult']?> MDL
                    </div>
                </div>
                <div class="result__block_2">
                    <div class="result__block_2_wrapper">
                        <div class="result__departure">
                            <div class="result__block_city">
                                <?=$departure['title']?>
                            </div>
                        </div>
                        <div class="result__block_way">
                            <img src="/icons/result-arrow.png" alt="">
                        </div>
                        <div class="result__arrival">
                            <div class="result__block_city">
                                <?=$arrival['title']?>
                            </div>
                        </div>
                    </div>
                    <div class="result__block_pasagere"><?=(int)$_GET['passangers']?> <?=$GLOBALS['ar_define_langterms']['MSG_MSG__PASSANGERS']?></div>
                </div>
                <?$getStops = $Db->getall("SELECT id,price,date,time,place__ AS place FROM ws_stops WHERE active = 1 AND section_id = '".$element['id']."' ORDER BY sort DESC  ")?>
                    <div class="result__block_3">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item station" >
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed station_name" onclick="toggleStops($(this))">
                                        <div class="accordion__descr ">
                                            <img src="/icons/station.png" alt="">
                                            <div class="station_descr text-decoration "><?=count($getStops)?> <?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_STOPS']?></div>
                                        </div>
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" >
                                    <ul class="accordion-body accordion-search">
                    				<?foreach ($getStops as $k => $stop) { ?>
                                        <li>
                                            <div class="local">
                                                <?=$stop['place']?>
                                            </div>
                                            <div class="time">
                                                <?=date('H:i',strtotime($stop['time']))?>
                                            </div>
                                            <div class="date">
                                                <?=date('d.m.Y',strtotime($stop['date']))?>
                                            </div>
                                            <div class="price">
                                                <?=$stop['price']?> mdl
                                            </div>
                                        </li>
                                        <hr>
									<? }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button class="btn_buy" onclick="setBuy($(this))" data-adult="<?=$element['price_adult']?>" data-children="<?=$element['price_children']?>" data-student="<?=$element['price_student']?>">Купить билет</button>
                    </div>
            </div>
            <? } }else{
            	echo 'По данному запросу ничего не найдено';
            }?>
            
        <div class="rezerv">
            <div class="rezerv__wrapper">
                <button class="rezerv__close" onclick="setClose($(this))">
                    <span></span>
                    <span></span>
                </button>
                <div class="rezerv__title"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_BOOK_TRIP']?></div>
                <div class="rezerv__block">
                    <div class="ticket">
                        <div class="ticket_type"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_ADULT']?></div>
                        <div class="ticket_type_descr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_ADULT_SUBCATEGORY']?></div>
                    </div>

                    <div class="ticket_quantity adult" data-price="">
                        <button class="btn-minus" onclick="update_qty($(this),'minus')">
                            <img src="/icons/minus.png" alt="">
                        </button>
                        <span>0</span>
                        <input type="hidden" class="ticket_qty" value="0">
                        <button class="btn-plus" onclick="update_qty($(this),'plus')">
                            <img src="/icons/plus.png" alt="">
                        </button>
                    </div>
                    <div class="ticket_price">0 mdl</div>
                </div>
                <div class="rezerv__block " >
                    <div class="ticket">
                        <div class="ticket_type"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_CHILDREN']?></div>
                        <div class="ticket_type_descr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_CHILDREN_SUBCATEGORY']?></div>
                    </div>
                    <div class="ticket_quantity child" data-price="">
                        <button class="btn-minus" onclick="update_qty($(this),'minus')">
                            <img src="/icons/minus.png" alt="">
                        </button>
                        <span>0</span>
                        <input type="hidden" class="ticket_qty" value="0">
                        <button class="btn-plus" onclick="update_qty($(this),'plus')">
                            <img src="/icons/plus.png" alt="">
                        </button>
                    </div>
                    <div class="ticket_price">0 mdl</div>
                </div>
                <div class="rezerv__block " >
                    <div class="ticket">
                        <div class="ticket_type"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_STUDENTS']?></div>
                        <div class="ticket_type_descr"></div>
                    </div>

                    <div class="ticket_quantity student" data-price="">
                        <button class="btn-minus" onclick="update_qty($(this),'minus')">
                            <img src="/icons/minus.png" alt="">
                        </button>
                        <span>0</span>
                        <input type="hidden" class="ticket_qty" value="0">
                        <button class="btn-plus" onclick="update_qty($(this),'plus')">
                            <img src="/icons/plus.png" alt="">
                        </button>
                    </div>

                    <div class="ticket_price">0 mdl</div>
                </div>

                <hr class="rezerv__hr">

                <div class="rezerv__total">
                    <div class="rezerv__total_descr"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_TOTAL_PAY']?></div>
                    <div class="rezerv__total_price">0 mdl</div>
                </div>

                <div class="rezerv__choice">
                    <div class="rezerv__choice_title"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_']?></div>
                    <div class="rezerv__choice_bus">
                        <div class="rezerv__choice_bus_item">
                            <span class="item" onclick="setFreeLocal($(this))">A1</span>
                            <span class="item" onclick="setFreeLocal($(this))">A2</span>
                            <span class="item" onclick="setFreeLocal($(this))">A3</span>
                            <span class="item" onclick="setFreeLocal($(this))">A4</span>
                            <span class="item" onclick="setFreeLocal($(this))">A5</span>
                            <span class="item" onclick="setFreeLocal($(this))">A6</span>
                            <span class="item" onclick="setFreeLocal($(this))">A7</span>
                        </div>
                        <div class="rezerv__choice_bus_item">
                            <span class="item" onclick="setFreeLocal($(this))">B1</span>
                            <span class="item" onclick="setFreeLocal($(this))">B2</span>
                            <span class="item" onclick="setFreeLocal($(this))">B3</span>
                            <span class="item" onclick="setFreeLocal($(this))">B4</span>
                            <span class="item" onclick="setFreeLocal($(this))">B5</span>
                            <span class="item" onclick="setFreeLocal($(this))">B6</span>
                            <span class="item " onclick="setFreeLocal($(this))">B7</span>
                        </div>

                        <div class="rezerv__choice_bus_item">
                            <span class="item" onclick="setFreeLocal($(this))">C1</span>

                        </div>
                        <div class="rezerv__choice_bus_item">
                            <span class="item" onclick="setFreeLocal($(this))">D1</span>
                            <span class="item" onclick="setFreeLocal($(this))">D2</span>
                            <span class="item item-busy" onclick="setFreeLocal($(this))">D3</span>
                            <span class="item item-busy" onclick="setFreeLocal($(this))">D4</span>
                            <span class="item" onclick="setFreeLocal($(this))">D5</span>
                            <span class="item" onclick="setFreeLocal($(this))">D6</span>
                            <span class="item" onclick="setFreeLocal($(this))">D7</span>
                        </div>
                        <div class="rezerv__choice_bus_item">
                            <span class="item" onclick="setFreeLocal($(this))">E1</span>
                            <span class="item item-busy" onclick="setFreeLocal($(this))">E2</span>
                            <span class="item item-busy" onclick="setFreeLocal($(this))">E3</span>
                            <span class="item item-busy" onclick="setFreeLocal($(this))">E4</span>
                            <span class="item" onclick="setFreeLocal($(this))">E5</span>
                            <span class="item" onclick="setFreeLocal($(this))">E6</span>
                            <span class="item" onclick="setFreeLocal($(this))">E7</span>
                        </div>

                    </div>
                </div>

                <div class="rezerv__form">
                    <div class="rezerv__name">
                        <label for="rezerv-name"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_NAME_SURNAME']?></label>
                        <input type="text" id="rezerv-name" class="reserv_required">
                    </div>
                    <div class="rezerv__phone">
                        <label for="rezerv-phone"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_PHONE']?></label>
                        <input type="text" id="rezerv-phone" class="reserv_required">
                    </div>
                    <button class="rezerv__btn" onclick="reservation()"><?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_SEND']?></button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?include($_SERVER['DOCUMENT_ROOT']."/pages/blocks/footer.php")?>




<script>
	function toggleStops(item){
				$(item).toggleClass('collapsed');
				$(item).closest('.accordion-header').next().toggleClass('collapse');
			}
			
	function setBuy(button){
        
    $('.btn_buy').not($(button)).removeClass('btn-cancel');
    $('.btn_buy').not($(button)).closest(".result__block").removeClass("block-activity");
    $('.station_name').toggleClass('block-activity');

    $(button).toggleClass('btn-cancel');
    $(button).closest(".result__block").toggleClass("block-activity");
	    if ($('.btn_buy').hasClass('btn-cancel')) {
	      $(button).text('Отмена');
	      $(".rezerv").show();
	      $('.ticket_quantity.adult').attr('data-price',$(button).attr('data-adult'));
	      $('.ticket_quantity.child').attr('data-price',$(button).attr('data-children'));
	      $('.ticket_quantity.student').attr('data-price',$(button).attr('data-student'));
	    } else {
	      $('.btn_buy').text('Купить билет');
	      $(".rezerv").hide();
	      $('.ticket_quantity.adult').attr('data-price',0);
	      $('.ticket_quantity.child').attr('data-price',0);
	      $('.ticket_quantity.student').attr('data-price',0);
	      $('.ticket_qty').each(function(){
			$(this).val(0);
		});
		$('.rezerv__total_price').text('0 mdl')
	    }
};

function update_qty(item,act){
	var curr_val = parseInt($(item).closest('.ticket_quantity').find('.ticket_qty').val());
	var new_val = 0;
	var total_price = 0;
	if (act == 'plus'){
		new_val = curr_val + 1;
	}if (act == 'minus' && curr_val > 0){
		new_val = curr_val - 1;
	}

	var price = parseInt($(item).closest('.ticket_quantity').attr('data-price')) * new_val;
	$(item).closest('.ticket_quantity').find('span').text(new_val);
	$(item).closest('.ticket_quantity').find('.ticket_qty').val(new_val);
	$(item).closest('.rezerv__block').find('.ticket_price').text(price + ' mdl');
	$('.ticket_qty').each(function(){
		total_price += parseInt($(this).val()) * parseInt($(this).closest('.ticket_quantity').attr('data-price'));
	});
	$('.rezerv__total_price').text(total_price + ' mdl');
}

function reservation(){
	var err = false;
	var name = $.trim($('#rezerv-name').val());
	var phone = $.trim($('#rezerv-phone').val());
	var adult = parseInt($('.ticket_quantity.adult').find('.ticket_qty').val());
	var children = parseInt($('.ticket_quantity.child').find('.ticket_qty').val());
	var student= parseInt($('.ticket_quantity.student').find('.ticket_qty').val());
	var total_seats = adult + children + student;
	var id = $('.result__block.block-activity').attr('data-id');
	if (total_seats == 0){
		show('<?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_MINIMUM__SEAT']?>');
		err = true;
	}
	$('.reserv_required').each(function(){
		if ($.trim($(this).val()) == ''){
			accent($(this));
			show('<?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_COMPLET_ALL_SPACES']?>');
			err = true;
		}
	});
	if (err == false){
		loader();
		$.ajax({
			type:'post',
			url:'<?=$CCpu->writelink(3)?>',
			data:{
				'task':'rezervation',
				'name':name,
				'phone':phone,
				'adult':adult,
				'children':children,
				'student':student,
				'race':id
			},
			success:function(msg){
				loader_destroy();
				if ($.trim(msg) == 'ok'){
					show('<?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_SUCCESFULL']?>');
				}else{
					show('<?=$GLOBALS['ar_define_langterms']['MSG_MSG_BOOKING_ERROR']?>');
				}
			}
		})
	}
}
</script>
</body>

</html>