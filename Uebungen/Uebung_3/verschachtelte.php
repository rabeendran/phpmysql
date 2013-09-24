<?php

	$category_s_name = 'S';
	$category_s_limit = 20;
	$category_m_name = 'M';
	$category_m_limit = 40;
	$category_l_name = 'L';
	$category_l_limit = 60;
	$category_xl_name = 'XL';
	$category_xl_limit = 70;

	$baggage_weigth = 30;

		echo "Das Gepckstueck wiegt $baggage_weigth kg. ";
		if ($baggage_weigth <= $category_s_limit) {
			echo "Das Gepckstück gehört zu $category_s_name";
     	}
		else if($baggage_weigth <= $category_m_limit) {
			echo "Das Gepckstück gehört zu $category_m_name";
		}
	   	else if ($baggage_weigth <= $category_l_limit) {
			echo "Das Gepckstück gehört zu $category_l_name";
		}
		else{
			echo "Das Gepckstück gehört zu $category_xl_name";
		}
?>