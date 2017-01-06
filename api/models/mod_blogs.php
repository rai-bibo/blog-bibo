<?php
// sample construct
class Mod_blogs extends \RESTAPI\Model {
    public function __construct() {
        //the default fields to get if client has not provided specific fields
        $this->fields = 'id, title';
	//don't show this fields
	$this->blacklist_fields = array('password', 'last_update');
	//for limiting and pagination of results
	$this->limit = DATABASE_DEFAULT_LIMIT;
	$this->max = DATABASE_MAX;
	$this->offset = 0; 
    }
    
    public function get_blogs($id = '') {
        $result = $this->query("select * from blogs LIMIT ".$this->offset.", ".$this->limit);
	if (0 < count($result)){
		return $result;
	}
	else{
		return false;
	}
    }
}
