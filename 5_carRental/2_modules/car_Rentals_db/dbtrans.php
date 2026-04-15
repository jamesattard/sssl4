<?php
    function connectToDB() {
        $myConn = mysqli_connect('localhost', 'root','','car_rentals_db');
        if (!$myConn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $myConn;
    }

    function getAllCars($conn) {
        $query = "SELECT * FROM Cars";
        $result = mysqli_query($conn, $query);
        
        return $result;
    }

    function getMaintRecords($conn, $carId) {
        $sql = "SELECT `Date`,`Description`,`Cost` FROM CarMaintenance A INNER JOIN Cars B ON A.CarID_FK = B.CarID AND B.CarID = $carId;";
        $result = mysqli_query($conn, $sql);
        
        return $result;
    }
?>