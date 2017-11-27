<?php

class FmkRpc {

	protected $response = array();

    /**
     * Function execute  
     * 
     * @description : Execute the method and set the response 
     * @access : public
     * @return : void
     * @date : 2015-10-20
     * @author : Tanguy Le Roux <leroux.tanguy.51@gmail.com>
     */

	public function execute($method, $params = null)
	{
		if (method_exists($this,$method)) {
			if ($params === null) {
				$return = $this->$method();
			} elseif (!is_array($params)) {
				$return = $this->$method($params);
			} else {
				$return = call_user_func_array(array($this, $method), $params);
			}

			if ($return !== null) {
				$this->setResponse($return);
			}
		}
	}

    /**
     * Function setResponse  
     * 
     * @description : Make an array with a method return 
     * @access : public
     * @return : void
     * @date : 2015-10-20
     * @author : Tanguy Le Roux <leroux.tanguy.51@gmail.com>
     */

	public function setResponse($datas)
	{
		if (!is_array($datas)) {
			$datas = array('response' => $datas);
		}

		foreach ($datas as $key => $data) {
			$this->response[$key] = $data;
		}
	}



    /**
     * Function output  
     * 
     * @description : Return the response in JSON format 
     * @access : public
     * @return : void
     * @date : 2015-10-20
     * @author : Tanguy Le Roux <leroux.tanguy.51@gmail.com>
     */
	public function output() {
		return json_encode($this->response); 
    }
}    
