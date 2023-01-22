<?php  // connection with Database 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "medical";

$conn     = mysqli_connect($server, $username, $password, $dbname);
if (!$conn){
    die ("connection error: " . mysqli_connect_errno());
}

# fun for add 
function db_insert($sql){
    global $conn;
    $result =mysqli_query($conn,$sql);
    if ($result){
        return "Added Success";
    }
    return false;

}
# fun for update
function db_update($sql){
    global $conn;
    $result =mysqli_query($conn,$sql);
    if ($result){
        return "Updated Success";
    }
    return false;
}


function getRows($tabel){
    global $conn;
    $sql = "SELECT * from `$tabel` order by 2 ASC";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $rows = [];

        if (mysqli_num_rows($result)>0){
            while ($row= mysqli_fetch_assoc($result)){
                $rows[] = $row; #enter every record
            }
        }
    }
    return $rows;

}
function getRows_today($tabel,$column_date){
    global $conn;
    $sql = "SELECT * from `$tabel` where DATE_FORMAT($column_date,'%y-%m-%d') =CURRENT_DATE()";
    $result = mysqli_query($conn, $sql);
    if ($result){
        $rows = [];

        if (mysqli_num_rows($result)>0){
            while ($row= mysqli_fetch_assoc($result)){
                $rows[] = $row; #enter every record
            }
        }
    }
    return $rows;

}

#validate admin data row
function getRow($tabel, $field, $value)
{
    global $conn;
    $sql    = "SELECT * from `$tabel` WHERE `$field`='$value'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0 ) {
        $rows = [];
        $rows[] = mysqli_fetch_assoc($result);
        return $rows[0];
        } else 
        {
            return false;
        }
}

function deleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return "Deleted Success";
    } else {
        return false;
    }
}


function count_table($table){
    global $conn;
    $sql = " select * from $table";
    $results = mysqli_query($conn, $sql);
    $i       = mysqli_num_rows($results);
    return $i;
}
function count_table_today($table){
    global $conn;
    $sql = " select* from $table where DATE_FORMAT(order_created_at,'%y-%m-%d') =CURRENT_DATE();";
    $results = mysqli_query($conn, $sql);
    $i       = mysqli_num_rows($results);
    return $i;
}
?>