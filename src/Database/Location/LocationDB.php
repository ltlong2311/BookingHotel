<?php

namespace BookingHotel\Database\Location;

use BookingHotel\Database\DB;

class LocationDB
{
    public function __construct()
    {
        $this->createTableLocation();
    }

    public function createTableLocation(): bool
    {
        $sql = "CREATE TABLE IF NOT EXISTS locations (
  MaDD int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    MaKS int(11) UNSIGNED NOT NULL,
  tenDD text NOT NULL,
  content text NOT NULL,
  diaChi text NOT NULL,
  createDate timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (MaDD)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        DB::Connect()->query($sql);
        $sqlForeignKey = 'ALTER TABLE `locations`
  ADD CONSTRAINT `fk_1212` FOREIGN KEY (`MaKS`) REFERENCES `hotels` (`MaKS`) ON DELETE CASCADE';
        DB::Connect()->query($sqlForeignKey);
        return true;
    }
}