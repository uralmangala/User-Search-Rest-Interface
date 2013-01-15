<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Example extends REST_Controller
{
	function __construct()
	{
		parent::__construct();

		//load the example model
		$this->load->model("example_model","example");
	}


	function users_get()
	{

		//variable to store the start date
		$start_date = "";

		//variable to store the end date
		$end_date = "";

		//data array
		$data = array();

		//where string
		$data['where_string']= "1";

		//date range string
		$data['date_range_string'] = "";

		//search attributes
		$data['search_attributes'] = '*';
		
		$data['printer_join_string'] = '';
		
		$data['workstation_join_string']= '';
		
		$data['application_join_string'] = '';
		
		$data['sort_string'] = '';
		
		$data['order_string'] = '';
		
		$data['limit_string'] = '';
		
		//for each GET
		foreach($_GET as $key => $value)
		{
			
			//if the key is user id
			if($key == 'user_id')
			{
				//append the key with u as u.user_id string is required
				$key = 'u.'.$key;
			}
			
			if($key == 'printer_id')
			{
				$key = 'j.'.$key;
			}
			
			switch($key)
			{
				case 'start_date': 
									//assign the value to the variable
									$start_date = $value;
									break;
					
				case 'end_date': 
									//assign the end value to the variable
									$end_date = $value;
									
									//date range string
									$data['date_range_string'] = " AND j.gp_date between '".$start_date."' AND '".$end_date."'";
									break;
					
				case 'sort': 
							switch($value)
							{
								case 'printer_name': $value = 'p.'.$value;
								break;
								
								case 'ws_name': $value = 'w.'.$value;
								break;
								
								case 'ap_name': $value = 'a.'.$value;
								break;
								
								default: $value ='j.'.$value;
							}
							$data['sort_string'] = " ORDER BY ".$value;
							break;
				
				case 'order': $data['order_string'] = $value;
								break;
								
				case 'limit': $data['limit_string'] = ' LIMIT '. $value;
								break;
								
				default: 		
							//explode the value
							$array = explode(',', $value);

							//new array
							$newArray = array();

							//foreach array
							foreach($array as $val)
							{
								//append with single quotes as we require in ('1','2')
								$newArray[] = '"' . $val . '"';
							}
							//make array into string
							$newString = implode(',', $newArray);
					
							//where clause
							$data['where_string'] = $data['where_string']." AND ".$key . " IN(".$newString.") ";					
			}
			
			
		}
		$user_search = $this->uri->segment(4);
		
		$split_string = explode(':',$user_search);


		
		if(isset($split_string[1]))
		{
			
			//trim ( and ) --&40#;='(' -- &41#;=')'
			$display_str = trim($split_string[1], '&40#;,&41#;');
			
			
			//explode the string
			$explode_string = explode(',',$display_str);

			//for each array
			for($i=0;$i<=count($explode_string)-1;$i++)
			{
				//if explode string is user id or username, append the string with u as we require u.user_id,u.user_name
				if($explode_string[$i] == 'user_id' || $explode_string[$i] == 'user_name')
				{
					//append
					$explode_string[$i] = 'u.'.$explode_string[$i];
				}
				else
				{
					//else append the string with j
					$explode_string[$i] = 'j.'.$explode_string[$i];

					switch ($explode_string[$i])
					{

						case 'j.datetimes':
							$explode_string[$i] = 'max('.$explode_string[$i].')';
							break;

						case 'j.printed_pages':
							$explode_string[$i] = 'sum('.$explode_string[$i].')';
							break;

						case 'j.printer_id':
							$explode_string[$i] = 'GROUP_CONCAT(DISTINCT CAST('.$explode_string[$i].' AS CHAR(7))) as printer_id,
									p.printer_name';
									$data['printer_join_string'] = 'LEFT JOIN GA_printer as p ON p.printer_id=j.printer_id';
							break;

						case 'j.workstation_id':
							$explode_string[$i] = 'GROUP_CONCAT(DISTINCT CAST('.$explode_string[$i].' AS CHAR(7))) as workstation_id,
									w.ws_name';
									$data['workstation_join_string'] = 'LEFT JOIN GA_workstation as w ON w.ws_id=j.workstation_id';
							break;

						case 'j.app_name':
							$explode_string[$i] = 'GROUP_CONCAT(DISTINCT CAST('.$explode_string[$i].' AS CHAR(7))) as app_name,a.ap_name';
							$data['application_join_string'] = 'LEFT JOIN GA_application as a ON a.ap_id=j.app_name';
							break;
					}


				}
			}

			//implode the string
			$implode_string = implode(',',$explode_string);

			//search attribute
			$data['search_attributes'] = $implode_string;
		}


		//calling the model
		$users = $this->example->get_users($data);

		if($users)
		{
			//sending the response
			$this->response($users,200);
		}
		else
		{
			$this->response(array('error' => 'Couldn\'t find any users!'), 404);
		}


	}



}

?>