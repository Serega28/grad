<?php

class PriceController
{
    /**Выводим список товаров с ценами
     * @return bool
     */
    public function actionList()
    {

        $priceList = array();
        $priceList = Price::getPriceList();

        //Подключаем вид
        require_once (ROOT.'/views/price/index.php');
        return true;
    }
}