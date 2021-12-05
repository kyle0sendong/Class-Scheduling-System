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

//edit info
function update($pdo, $table, $primaryKey, $fields) {

    $query = ' UPDATE `' . $table .'` SET ';

    foreach ($fields as $key => $value) {
        $query .= '`' . $key . '` = :' . $key . ',';
    }

    $query = rtrim($query, ',');
    $query .= ' WHERE `' . $primaryKey . '` = :primaryKey';
    
    $fields['primaryKey'] = $fields['id'];

    query($pdo, $query, $fields);
}

//remove info
function delete($pdo, $table, $id) {

    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM `' . $table . '`
    WHERE `id` = :id', $parameters);
}

//retrieve all information
function retrieveAll($pdo, $table) {

    $result = query($pdo, 'SELECT * FROM `' . $table . '`');
    return $result->fetchAll(); 
}

//retrieve all information
function retrieveAllId($pdo, $table, $primaryKey, $value) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey . '` = :value';

    $parameters = [
        'value' => $value
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetchAll(); 

}

function retrieveId($pdo, $table, $primaryKey, $value) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey . '` = :value';

    $parameters = [
        'value' => $value
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetch();
}

//query 
function query($pdo, $sql, $parameters = []) {

    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function total($pdo, $table) {
    $query = query($pdo, 'SELECT COUNT(*)
                    FROM `' . $table . '`');
    $row = $query->fetch();
    return $row[0];
}

function totalId($pdo, $table, $primaryKey, $value) {
    $query = query($pdo, 'SELECT COUNT(*) FROM `' . $table . 
                    '` WHERE `' . $primaryKey . '` = \'' . $value . '\'');

    $row = $query->fetch();
    return $row[0];
}


?>