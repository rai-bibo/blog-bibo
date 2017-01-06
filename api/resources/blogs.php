<?php
class Blogs extends \RESTAPI\Loader implements iRestserver {
    public function __construct() {
        //invoke all libraries
        $this->library(array('form', 'client_settings', 'authentication'));
        $this->model(array('mod_blogs'));
        //require this resource to be authenticated first
        #$this->authentication->sentry();
    }
    /**
     * GET data from this resource
     * @param string $id
     */
    public function get($id = null) {
        //validate the posted data first, refer to validation config file
        //set the parameters if client requested for custom results
        $this->client_settings->get_param_settings($this->formdata);
        if(isset($this->formdata->fields))
        $this->mod_users->fields = $this->formdata->fields;
        if(isset($this->formdata->limit))
        $this->mod_users->limit = $this->formdata->limit;
        if(isset($this->formdata->offset))
        $this->mod_users->offset = $this->formdata->offset;
        
        //get the data
        $data = $this->mod_blogs->get_blogs();
        if ($data != '')
        $this->response_generator($data, strtolower(__CLASS__));
        else
        return false;
    }

    public function post() {
        echo 'Invoked POST';
    }

    public function put($id = '') {
        echo 'Invoked PUT';
    }

    public function delete($id = '') {
        echo $id;
        echo 'Invoked DELETE';
    }
}
