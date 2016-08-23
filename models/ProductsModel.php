<?php

/**
 * Модель для таблицы продукции (products)
 */
/**
 * @param null $limit Лимит товаров
 * @return array|bool Массив товаров
 */
function getLastProducts($limit = null) {
    $sql = "SELECT * FROM `products` ORDER BY id DESC";
    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemId
 *
 * @param $itemId - ID категории
 * @return array|bool - массив продуктов
 */
function getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}