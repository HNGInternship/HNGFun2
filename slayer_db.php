<?php


require_once 'config.php';
// define ('DB_USER', "root");
// define ('DB_PASSWORD', "");
// define ('DB_DATABASE', "hng_fun");
// define ('DB_HOST', "localhost");

try {
    $db = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

global $db;

$sql1 = "ALTER TABLE `hng_fun`.`interns_data` 
        ADD COLUMN `email` VARCHAR(100) NULL AFTER `image_filename`,
        ADD COLUMN `phone` VARCHAR(100) NULL AFTER `email`,
        ADD COLUMN `password` VARCHAR(100) NULL AFTER `phone`,
        ADD COLUMN `country` VARCHAR(100) NULL AFTER `password`,
        ADD COLUMN `state` VARCHAR(100) NULL AFTER `country`,
        ADD COLUMN `public_key` TEXT NULL AFTER `state`,
        ADD COLUMN `private_key` TEXT NULL AFTER `public_key`,
        ADD COLUMN `token` TEXT NULL AFTER `private_key`,
        ADD COLUMN `created_at` DATETIME NULL AFTER `token`,
        ADD COLUMN `update_at` DATETIME NULL AFTER `created_at`;
";


    $sql2 = "CREATE TABLE IF NOT EXISTS buy_requests (
        `id` int(20) NOT NULL AUTO_INCREMENT,
        `intern_id` int(20) NOT NULL,
        `amount` float NOT NULL,
        `trade_limit` float DEFAULT NULL,
        `bid_per_coin` float NOT NULL,
        `status` ENUM('Completed', 'Pending', 'Closed', 'Open') NOT NULL,
        `created_at` DATETIME NOT NULL DEFAULT NOW(),
        PRIMARY KEY (id),
        FOREIGN KEY (intern_id) REFERENCES interns_data (id) on delete cascade)";
  
     
     $sql3 = "CREATE TABLE IF NOT EXISTS sell_requests(
        `id` int(20) NOT NULL AUTO_INCREMENT,
        `intern_id` int(20) NOT NULL,
        `amount` float NOT NULL,
        `trade_limit` float DEFAULT NULL,
        `price_per_coin` float NOT NULL,
        `status` ENUM('Completed', 'Pending', 'Closed', 'Open') NOT NULL,
        `created_at` DATETIME NOT NULL DEFAULT NOW(),
        PRIMARY KEY (id),
        FOREIGN KEY (intern_id) REFERENCES interns_data (id) on delete cascade)";

         
       $sql4 = "CREATE TABLE IF NOT EXISTS banks(
             `id` int(20) NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL,
            PRIMARY KEY (id))";

     
    
       $sql5 = "CREATE TABLE IF NOT EXISTS accounts(
        `id` int(20) NOT NULL AUTO_INCREMENT,
        `intern_id` int(20) NOT NULL,
        `bank_id` int(20) NOT NULL,
        `name` varchar(100) NOT NULL,
        `number` int(100) NOT NULL,
        `created_at` DATETIME NOT NULL DEFAULT NOW(),
        PRIMARY KEY (id),
        FOREIGN KEY (intern_id) REFERENCES interns_data (id) on delete cascade,
        FOREIGN KEY (bank_id) REFERENCES banks (id) on delete cascade)";

        $sql6 = "CREATE TABLE IF NOT EXISTS wallets (
            `id` int(20) NOT NULL AUTO_INCREMENT,
            `intern_id` int(20) NOT NULL,
            `balance` float NOT NULL,
            `created_at` DATETIME NOT NULL DEFAULT NOW(),
            PRIMARY KEY (id),
            FOREIGN KEY (intern_id) REFERENCES interns_data (id) on delete cascade)";

        $sql7 = "CREATE TABLE IF NOT EXISTS sell_transactions(
            `id` int(20) NOT NULL AUTO_INCREMENT,
            `sell_request_id` int(20) NOT NULL,
            `buyer_id` int(20) NOT NULL,
            `status` ENUM('Completed', 'Pending', 'Closed', 'Open') NOT NULL,
            `created_at` DATETIME NOT NULL DEFAULT NOW(),
            `completed_at` DATETIME  DEFAULT NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (sell_request_id) REFERENCES sell_requests (id) on delete cascade,
            FOREIGN KEY (buyer_id) REFERENCES interns_data (id) on delete cascade)";

        $sql8 = "CREATE TABLE IF NOT EXISTS buy_transactions(
            `id` int(20) NOT NULL AUTO_INCREMENT,
            `buy_request_id` int(20) NOT NULL,
            `seller_id` int(20) NOT NULL,
            `status` ENUM('Completed', 'Pending', 'Closed', 'Open') NOT NULL,
            `created_at` DATETIME NOT NULL DEFAULT NOW(),
            `completed_at` DATETIME  DEFAULT NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (buy_request_id) REFERENCES buy_requests (id) on delete cascade,
            FOREIGN KEY (seller_id) REFERENCES interns_data (id) on delete cascade)";


    $sqls = [$sql1, $sql2, $sql3, $sql4, $sql5,$sql6, $sql7, $sql8];

    foreach ($sqls as $sql) {
        try {
            $stm = $db->prepare($sql);
            $exec = $stm->execute();
        } catch (PDOException $pe) {
            die("Could not create table  ". $pe->getMessage());
        }
       
    } 

    if ($exec) {
        echo  count($sqls). " tables successfully created";
    }

    else{
        echo "error creating tables";
    }
