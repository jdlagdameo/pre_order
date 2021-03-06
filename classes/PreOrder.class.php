<?php
/**
 * Functions Class File
 *
 * @author: John Dave D. Lagdameo
 * @since: 2018/06/19
 *
 */

include "config/db.config.php";

class PreOrder
{
    /**
     * Validate if string have value
     */
    public function haveValue($str)
    {
        return strlen(trim($str)) > 0;
    }

    /**
     * Insert Data in Table
     * @author: John Dave Lagdameo
     *
     * @param $table - string -table name
     * @param $data_arr - array - field and value to be insert
     *
     */
    public function AddData($table, $data_arr)
    {
        $data = [];
        $fields = "";
        $values = "";
        foreach ($data_arr as $key => $val) {
            $fields .= ($fields == "" ? "" : ", ") . $key;
            $values .= ($values == "" ? "" : ", ") . ":$key";
        }
        $query = "INSERT INTO $table ($fields) VALUES ($values)";

        try {
            $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USER, PASSWORD);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
            $stmt = $conn->prepare($query);
            $success = $stmt->execute($data_arr);
            if ($success) {
                $data["id"] = $conn->lastInsertId();
            }

        } catch (PDOException $e) {
            $success = false;
        }

        return compact("success", "data");
        $conn = null;
    }

    public function summary($order_id)
    {
        $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USER, PASSWORD);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // select a particular user by id
        $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id=:order_id");
        $stmt->execute(['order_id' => $order_id]);
        $order = $stmt->fetch();
        if($order){
            $order['date'] = date("M d, Y",strtotime($order['date']));
        }

        $conn = null;
        return $order;
    }
}