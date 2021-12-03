<?php 

//add
function insert($pdo, $table, $fields) {
    //using INSERT INTO `tableName` (`column1`, `column2`) VALUES (:value1, :value2)
    $query = 'INSERT INTO `' . $table . '` (';

    foreach($fields as $key => $value) {
        $query .= '`' . $key . '`,';
    }

    $query = rtrim($query, ',');
    $query .= ') VALUES (';

    foreach($fields as $key => $value) {
        $query .= ':' . $key . ',';
    }

    $query = rtrim($query, ',');
    $query .= ')';

    query($pdo, $query, $fields);
}


  


//edit teacher

//remove teacher

//retrieve all information
function retrieveAll($pdo, $table) {
    $result = query($pdo, 'SELECT * FROM `' . $table . '`');
    return $result->fetchAll();
}


//query 
function query($pdo, $sql, $parameters = []) {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}


?>