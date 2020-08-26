<?php
require "./engine/engine.php";
//$app = new wbApp();
$data = $app->authGetContents("http://old.aikido-anapa.ru/news.php");
$data = json_decode($data);
$i=0;

foreach((array)$data->result as $item) {

		if (isset($item->date)) $item->date = date('Y-m-d H:i:s',strtotime($item->date));

    if (isset($item->created)) {
        $item->_created = $item->created;
    } else {
        $item->_created = $item->date;
    }

    $item->_form = $item->form;
    $item->_table = $item->form;
    $item->_creator = '';
    $item->type = 'news';
		$item->active = 'on';
    $item->_id = $item->id;
    unset($item->intext_position);
    unset($item->created);
    unset($item->datesort);
    unset($item->form);
		$images = [];
    if (isset($item->images)) {
        $images = wbObjToArray($item->images);
        $images = (array)wbItemToArray($images);

        foreach($images as &$image) {
            if (isset($image['img'])) { $image['img'] = '/uploads/news/'.$item->id.'/'.$image['img'];
            }
        }
    }


    $item->images = $images;

    $app->itemSave('news', $app->objToArray($item), false); // преобразовать в массив!!!
    //    print_r($item);
            echo "\n==================\n";
    $i++;
    //        if ($i==5) die;
}
$app->tableFlush("news");
?>
