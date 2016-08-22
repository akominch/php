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