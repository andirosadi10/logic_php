<?php 
	
	$makanan = [
		['id'=> 1, 'menu_makan'=> 'Menu Makanan ke 1'],
		['id'=> 2, 'menu_makan'=> 'Menu Makanan ke 2'],
		['id'=> 3, 'menu_makan'=> 'Menu Makanan ke 3']
	];
	$minuman = [
	 		['id'=> 1, 'menu_minuman'=> 'Menu Minuman ke 1'],
	 		['id'=> 2, 'menu_minuman'=> 'Menu Minuman ke 2'],
	 		['id'=> 3, 'menu_minuman'=> 'Menu Minuman ke 3']
	];
	$parsel = [
		['id'=> 1, 'menu_parsel'=> 'Menu Parsel ke 1'],
		['id'=> 2, 'menu_parsel'=> 'Menu Parsel ke 2'],
		['id'=> 3, 'menu_parsel'=> 'Menu Parsel ke 3']
	];
	
	$list_menu = array(
		'makanan'=> $parsel, 
		'minuman'=> $minuman,
		'parsel' => $parsel
	);

	$tampil = array_column($list_menu,'makanan');
	print_r($tampil);


	// foreach ($list_menu as $menu => $key) {
	// 	echo $menu;
	// 	echo "<br>";
	// 	echo $key;
	// 	foreach ($key as $value => $name) {
	// 		echo $value;
	// 	}
	// }









	// foreach ($list_menu as $key => $value) {

	// 	echo $key . $value['id'];	
	// }

	// foreach($list_menu as $menu) {
	//     foreach($menu as $data) {
	//         echo $data['id'] . ", ";
	//     }
	//     echo "<br />";
	// } 

	
 ?>