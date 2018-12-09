<?php
    class truck {
        private $truckID;
        private $truckPlate;
        private $Latitude;
        private $Longitude;
        private $conn;
        private $tableName = "truck";

        function setTruckID($truckID) { $this->truckID = $truckID; }
        function getTruckID() { return $this->truckID; }
        function setTruckPlate($truckPlate) { $this->truckPlate = $truckPlate; }
        function getTruckPlate() { return $this->truckPlate; }
        function setLatitude($Latitude) { $this->Latitude = $Latitude; }
        function getLatitude() { return $this->Latitude; }
        function setLongitude($Longitude) { $this->Longitude = $Longitude; }
        function getLongitude() { return $this->Longitude; }

        public function _construct(){
            require_once(classes/connectDB);
            $conn = new connectDB;
            $this->conn = $conn->connect();
        }
    }
?>