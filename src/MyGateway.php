<?php

/**
 * Class MyGateway
 *
 * We are going to pretend that this gateway calls some remote service or
 * database...
 */
class MyGateway {

    public function retrieveObject($id) {
        return array(
            'id' => $id,
            'name' => 'Sample Name'
        );
    }

    public function retrieveSomeObjects($query) {
        return array(
            $this->retrieveObject(1),
            $this->retrieveObject(2),
            $this->retrieveObject(3),
            $this->retrieveObject(4),
            $this->retrieveObject(5)
        );
    }

}
