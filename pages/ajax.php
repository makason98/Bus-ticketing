<?
$ar_clean = filter_input_array( INPUT_POST , FILTER_SANITIZE_SPECIAL_CHARS);
if ( !isset( $_POST ) || empty( $_POST ) || !isset( $_POST['task'] ) ) { exit; }



/* авторизация на сайте */
if($ar_clean['task'] === 'authorization'){
    $user = $User->auth( $ar_clean['login'], $ar_clean['password'] );
    if($user){
        echo "ok";
    }else{
        echo "Неверные данные";
    }
}



/* регитрация */
if($ar_clean['task'] === "registration"){
    
    if( !filter_var($ar_clean['email'], FILTER_VALIDATE_EMAIL) ){
        exit("Неверный e-mail");
    }
    
    $getemail = $Db->getone("SELECT id FROM ws_clients WHERE email = '".$ar_clean['email']."' LIMIT 1");
    if($getemail){
        exit("Этот e-mail уже занят");
    }

    $arFields = array('name','email');
    $arData = array("'".$ar_clean['name']."'", "'".$ar_clean['email']."'");

    if( $User->register($arFields, $arData, $ar_clean['email'], $ar_clean['password'])  ){
        echo "ok";
    }else{
        echo "Не удалось зарегистрироваться. Попробуйте еще раз";
    }
    
}

if ($ar_clean['task'] === 'feedback'){
	
	$ArrTitle = $ArrVal = array();
    $ArrTitle[] = " date ";
    $ArrVal[] = " NOW() ";
    $ArrTitle[] = " name ";
    $ArrVal[] = " '". $ar_clean['name'] ."' ";
	$ArrTitle[] = " tel ";
    $ArrVal[] = " '". $ar_clean['tel'] ."' ";



    $r = mysqli_query($db,"INSERT INTO ws_calls (". implode( ',' , $ArrTitle ) .") VALUES (". implode( ',' , $ArrVal ) .") ");
    if( $r ) {
        echo 'ok';
    } else {
        echo 'not ok';
    }
	
	
}
if ($ar_clean['task'] === 'feedback1'){
	
	$ArrTitle = $ArrVal = array();
    $ArrTitle[] = " date ";
    $ArrVal[] = " NOW() ";
    $ArrTitle[] = " name ";
    $ArrVal[] = " '". $ar_clean['name'] ."' ";
	$ArrTitle[] = " text ";
    $ArrVal[] = " '". $ar_clean['text'] ."' ";



    $r = mysqli_query($db,"INSERT INTO ws_reviews (". implode( ',' , $ArrTitle ) .") VALUES (". implode( ',' , $ArrVal ) .") ");
    if( $r ) {
        echo 'ok';
    } else {
        echo 'not ok';
    }
	
	
}
if ($ar_clean['task'] === 'feedback3'){
	
	$ArrTitle = $ArrVal = array();
    $ArrTitle[] = " date ";
    $ArrVal[] = " NOW() ";
    $ArrTitle[] = " name ";
    $ArrVal[] = " '". $ar_clean['name'] ."' ";
	$ArrTitle[] = " email ";
    $ArrVal[] = " '". $ar_clean['email'] ."' ";
	$ArrTitle[] = " message ";
    $ArrVal[] = " '". $ar_clean['message'] ."' ";
    $ArrTitle[] = " phone ";
    $ArrVal[] = " '". $ar_clean['phone'] ."' ";
	



    $r = mysqli_query($db,"INSERT INTO ws_messages (". implode( ',' , $ArrTitle ) .") VALUES (". implode( ',' , $ArrVal ) .") ");
    if( $r ) {
        echo 'ok';
    } else {
        echo 'not ok';
    }
}

if ($ar_clean['task'] === 'rezervation'){
	$getPrices = $Db->getone("SELECT price_adult,price_student,price_children FROM ws_catalog_elements WHERE id = '".(int)$ar_clean['race']."' ");
	$price = ((int)$ar_clean['adult'] * $getPrices['price_adult']) + ((int)$ar_clean['children'] * $getPrices['price_children']) + ((int)$ar_clean['student'] * $getPrices['price_student']);
	$ArrTitle = $ArrVal = array();
    $ArrTitle[] = " date ";
    $ArrVal[] = " NOW() ";
    $ArrTitle[] = " name ";
    $ArrVal[] = " '". $ar_clean['name'] ."' ";
	$ArrTitle[] = " phone ";
    $ArrVal[] = " '". $ar_clean['phone'] ."' ";
	$ArrTitle[] = " adult_qty ";
    $ArrVal[] = " '". (int)$ar_clean['adult'] ."' ";
    $ArrTitle[] = " child_qty ";
    $ArrVal[] = " '". (int)$ar_clean['children'] ."' ";
	$ArrTitle[] = " student_qty ";
    $ArrVal[] = " '". (int)$ar_clean['student'] ."' ";
    $ArrTitle[] = " race_id ";
    $ArrVal[] = " '". (int)$ar_clean['race_id'] ."' ";
	$ArrTitle[] = " total_price ";
    $ArrVal[] = " '". $price ."' ";
    /* сделать проверку хватает ли места */
    $r = mysqli_query($db,"INSERT INTO ws_orders (". implode( ',' , $ArrTitle ) .") VALUES (". implode( ',' , $ArrVal ) .") ");
    if( $r ) {
        echo 'ok';
    } else {
    	echo mysqli_error($db);
        echo 'not ok';
    }
}




