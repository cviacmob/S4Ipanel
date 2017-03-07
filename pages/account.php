<?php
class ControllerApiAccount extends Controller {


    private function sendOTP($mobile) {


        $url = "http://nheart.cviac.com/N-Heart/invite.php/insertotp";
        $ch = curl_init($url);
        $fields = array();
        $fields['mobile'] = $mobile;
        $data_string = json_encode($fields);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
                array('Content-Type:application/json',
                        'Content-Length: ' . strlen($data_string))
                );

        $res = curl_exec($ch);
        // if(curl_errno($ch)){
        //     $err =  'Request Error:' . curl_error($ch);
        // }
        curl_close($ch);      

    }


    public function register() {
        $json = array();
        $this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate($json)) {
            $this->request->post['fax']="";
            $this->request->post['company']="";
            $this->request->post['address_1']="";
            $this->request->post['address_2']="";
            $this->request->post['city']="";
            $this->request->post['postcode']="";
            $this->request->post['country_id']="";
            $this->request->post['zone_id']="";
			$customer_id = $this->model_account_customer->addCustomer($this->request->post);
            $this->sendOTP($this->request->post['telephone']);
            $this->customer->login($this->request->post['email'], $this->request->post['password']);
            // $customer = array(
			// 		'customer_id' => $customer_id,
            //         'email' => $this->request->post['email'],
			// 		'name'        => $this->request->post['firstname'] . ' ' . $this->request->post['lastname']
			// 	);
            // $json['customer'] = $customer;
            $json['code'] = 0;
            $json['desc'] = 'api invoke success';        
            $json['customer_id'] =$customer_id;    

        } else {
            //$json['error'] = 'api invoke failed';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));

    }

    private function validate(&$json) {
        if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			 $json['code'] = 1;
             $json['desc'] = 'first name error';
            return false;
		}

		if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			 $json['code'] = 2;
             $json['desc'] = 'last name error';
            return false;
		}

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			 $json['code'] = 3;
             $json['desc'] = 'email error';
            return false;
		}

		if ($this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
            $json['code'] = 4;
            $json['desc'] = 'email already exsist error';
			return false;
		}

		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$json['code'] = 5;
            $json['desc'] = 'telephone error';
            return false;
		}

        if ((utf8_strlen($this->request->post['password']) < 4) || (utf8_strlen($this->request->post['password']) > 20)) {
			$json['code'] = 6;
            $json['desc'] = 'password error';
            return false;
		}

		if ($this->request->post['confirm'] != $this->request->post['password']) {
			$json['code'] = 7;
            $json['desc'] = 'confirm password is not same';
            return false;
		}

        return true;
    }

    public function login() {
         $json = array();
        $this->load->model('account/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validatePassword($json)) {
            $json['code'] = 0;
            $json['desc'] = 'api invoke success';
        } else {
            //$json['error'] = 'api invoke failed';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));

    }

    private function validatePassword(&$json) {
        // Check if customer has been approved.
		$customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);
        
		if ($customer_info && !$customer_info['approved']) {
            $json['code'] = 1;
            $json['desc'] = 'error_approved';
            return false;
		}

        if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
            $json['code'] = 2;
            $json['desc'] = 'error_login';
            return false;
		} else {
            $json['customer_id'] = (int) $customer_info['customer_id'];
            $json['email'] = $customer_info['email'];
            $json['firstname'] = $customer_info['firstname'];
             $json['telephone'] = $customer_info['telephone'];
			return true;
		}
    }

    public function forgetPassword() {

    }

    public function updateProfile() {

    }
}