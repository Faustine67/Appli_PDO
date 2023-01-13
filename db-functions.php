<?php
// This function return a PDO class connected to the DB that has already been created //
function connexion()
{
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=store_sp;charset=utf8',
            'root',
            '',
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_CASE => PDO::CASE_NATURAL,
                PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
            ]

        );
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

// This function return all the products (and their different values/columns) that are in the DB
function findAll()
{
    $db = connexion();

    $sqlQuery = 'SELECT * FROM product';
    $storeStatement = $db->prepare($sqlQuery);

    $storeStatement->execute();
    $store = $storeStatement->fetchAll();
    return $store;
}

// This function return the product corresponding to the id in the parameter
function findOneById($id)
{
    $db = connexion();

    $sqlQuery = 'SELECT * FROM product WHERE id= :id';
    $storeStatement = $db->prepare($sqlQuery);

    $storeStatement->execute([':id'=>$id]);
    $store = $storeStatement->fetch();
    return $store;
}
function insertProduct($name, $price, $description){
    $db = connexion();
    $sqlQuery = 'INSERT INTO product (name, price, description)
    VALUES (:name, :price, :description)';

    $storeStatement = $db->prepare($sqlQuery);
    $storeStatement->execute([':name'=>$name, ':price'=>$price, ':description'=>$description]);
    $store = $storeStatement->fetch();
    return $store;
}