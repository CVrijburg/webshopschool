<?php

class DatabaseAPI {
    private $connection;
    private $tables;

    /**
     * DatabaseAPI constructor.
     */
    public function __construct() {
//        Connect to the database 'onlineshop'
        $this->connection = mysqli_connect( "localhost", "onlineshop", "banaan1234", "onlineshop" );
        $result = $this->connection->query( "SHOW TABLES" );

//        Get all the rows from the database
        $index = 0;
        while( $row = $result->fetch_row() ) {
            $this->tables[ $index ] = $row[ 0 ];
            $index++;
        }
    }

    /**
     * Return all rows from a given table
     */
    public function getTableData( $table, $whereClause = null ) {
        $query = "SELECT * FROM `$table`";
        if( !is_null( $whereClause ) ) {
            $query .= $whereClause;
        }
        $returnArray = [ ];
        if( $this->checkTable( $table ) ) {
            $result = $this->connection->query( $query );

            if( $result->num_rows ) {
                while( $row = $result->fetch_assoc() ) {
                    array_push( $returnArray, $row );
                }
            }
        }
        return $returnArray;
    }

    private function checkTable( $table ) {
        $existingTables = $this->getTables();
        $returnValue = false;
        if( in_array( $table, $existingTables, true ) ) {
            $returnValue = true;
        }
        return $returnValue;
    }

    /**
     * Return the selected tables
     */
    public function getTables() {
        return $this->tables;
    }

    public function registerUser( $user ) {
        $result = mysqli_query( $this->connection, "SELECT email FROM `member` WHERE email = '$user->email'" );
        if( $result->num_rows === 0 ) {
            $result = mysqli_query( $this->connection, "INSERT INTO member( email, password, userName, country, zipcode, city, address )VALUES( '$user->email', '$user->password', '$user->name', '$user->country', '$user->zipcode', '$user->city', '$user->address' )" );
            if( $result ) {
                $result = mysqli_query( $this->connection, "SELECT userName FROM `member` WHERE email = '$user->email' LIMIT 1" );
                $row = $result->fetch_assoc();

                setcookie( "currentUser", $row[ "userName" ], time() + ( 3600 * 24 ), "/" );
            }
        }
    }

    /**
     * Create a cookie to simulate a login
     */
    public function loginUser( $user ) {
        $result = mysqli_query( $this->connection, "SELECT userName FROM member WHERE email = '$user->email' AND password = '$user->password';" );
        if( $row = $result->fetch_assoc() ) {
            setcookie( 'currentUser', $row[ 'userName' ], time() + ( 3600 * 24 ), "/" );
        }
    }

    public function checkOut( $arrayProductID ) {
        $arrayMemberID = $this->getTableData( member, "WHERE userName = '$_COOKIE[currentUser]'" );
        $stringMemberID = $arrayMemberID[0]['ID'];
        $insertSQL = "INSERT INTO `delivery` ( `date`, `memberID` ) VALUES ( NOW(), '$stringMemberID' )";
        mysqli_query( $this->connection, $insertSQL );

        for( $i = 0; $i < count( $arrayProductID ); $i++ ) {
            $sql = "UPDATE product SET amount = amount -1 WHERE ID = '$arrayProductID[$i]'";
            mysqli_query( $this->connection, $sql );

            $deliveryIDquery = "SELECT ID FROM delivery ORDER BY ID DESC LIMIT 1";
            $queryResult = mysqli_query( $this->connection, $deliveryIDquery );
            $deliveryID = $queryResult->fetch_assoc();

            $insertSQL = "INSERT INTO `delivery_product` ( `productID`, `deliveryID` ) VALUES ( '$arrayProductID[$i]', '$deliveryID[ID]' )";
            mysqli_query( $this->connection, $insertSQL );
        }
    }

   /**
     * Clear the cart
     */
    public function clearCookie() {
        setcookie( "cart", null, -1, "/" );
        unset( $_COOKIE[ "cart" ] );
    }
    
   /**
    * Close the database connection
    */
    public function closeConnection() {
        $this->connection->close();
    }
}