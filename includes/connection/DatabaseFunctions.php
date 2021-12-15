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
    
    $id = $primaryKey;
    $fields['primaryKey'] = $fields[$id];

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

//retrieve all information using id
function retrieveAllId($pdo, $table, $primaryKey, $value) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey . '` = :value';

    $parameters = [
        'value' => $value
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetchAll(); 

}

//retrieve an information using id
function retrieveId($pdo, $table, $primaryKey, $value) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey . '` = :value';

    $parameters = [
        'value' => $value
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetch();
}

//count total number of rows in a table
function total($pdo, $table) {
    $query = query($pdo, 'SELECT COUNT(*)
                    FROM `' . $table . '`');
    $row = $query->fetch();
    return $row[0];
}

//count total number of id rows in a table 
function totalId($pdo, $table, $primaryKey, $value) {
    $query = query($pdo, 'SELECT COUNT(*) FROM `' . $table . 
                    '` WHERE `' . $primaryKey . '` = \'' . $value . '\'');

    $row = $query->fetch();
    return $row[0];
}

//search name
function searchName($pdo, $table, $search) {
    $query = 'SELECT * FROM `' . $table . '` WHERE CONCAT(firstName, " ", lastName) 
            LIKE :search OR lastName LIKE :search';

    $parameters = [
        'search' => '%' .$search. '%'
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetchAll();
}   

function updateWorkload($pdo, $mode, $table, $id, $duration) {
    $workload = retrieveId($pdo, $table, 'id', $id);

    if($mode == 'insert') 
        $workload = ($duration/100) + $workload['workload'];
    if($mode == 'delete') 
        $workload = $workload['workload'] - ($duration/100);

    update($pdo, $table, 'id', [
        'id' => $id,
        'workload' => $workload
    ]);
}

function retrieveTwoId($pdo, $table, $primaryKey1, $value1, $primaryKey2, $value2) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey1 . '` = :value1
              AND `' . $primaryKey2 . '` = :value2 ';

    $parameters = [
        'value1' => $value1,
        'value2' => $value2
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetch();
}

function retrieveAllTwoId($pdo, $table, $primaryKey1, $value1, $primaryKey2, $value2) {

    $query = 'SELECT * FROM `' . $table . '`
              WHERE `' . $primaryKey1 . '` = :value1
              AND `' . $primaryKey2 . '` = :value2 ';

    $parameters = [
        'value1' => $value1,
        'value2' => $value2
    ];

    $query = query($pdo, $query, $parameters);
    return $query->fetchAll();
}

function convertSubject($subject) {
    if($subject == 'Mathematics')
      return 'Math';

    return $subject;
  
  }
  
//for executing queries
function query($pdo, $sql, $parameters = []) {

    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function convertTime($time) {

    if($time % 100 == 0) {  //if it has no 30 minute time
        $time = $time/100;
        $stringTime;

        if($time > 12)   //if it is an afternoon class
            $stringTime = ($time - 12) . ':00';
        else
            $stringTime = $time . ':00';

        return $stringTime;
        
    } else { //if it has a 30 minute or 45 minute time

        $stringTime;

        if($time % 50 == 0) {    //it is a 30 minute
            $time = $time/100;

            $time = $time - 0.5;
            if($time > 12)
                $stringTime = ($time - 12) . ':30';
            else
                $stringTime = $time . ':30';
            
        } else {    //if it is a 45 minute
            $time = $time/100;
            $time = $time - 0.75;
            
            if($time > 12)
                $stringTime = ($time - 12) . ':45';
            else
                $stringTime = $time . ':45';
        }
        
        return $stringTime;
    }
}

?>