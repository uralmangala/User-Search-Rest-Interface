<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class example_model extends CI_Model
{
	public function __construct(){
		parent::__construct();				// Init parent contructor
							
		$this->load->database();
	}
	
	
	
	public function get_users($data)
	{
		if($data['sort_string'] == '')
		{
			log_message("Debug","If loop");
			$data['sort_string'] = ' ORDER BY u.user_id';
		}
		
		$query =  $this->db->query("SELECT ".$data['search_attributes']." 
									FROM GA_users as u 
									LEFT JOIN GA_job_db_summary as j
								    ON u.user_id = j.user_id 
					  				".$data['date_range_string']."
									".$data['printer_join_string']."
									".$data['workstation_join_string']."
								    ".$data['application_join_string']."
							        WHERE ". $data['where_string']." 
									GROUP BY u.user_id".
									$data['sort_string']." ".
									$data['order_string']." ".
									$data['limit_string']);
		
		
		log_message("Debug", "Query".$this->db->last_query());
		
		//number of result
		$result_merge[]['count'] = $query->num_rows();
		
		//query result
		$result = $query->result_array();
		
		//merge query
		$array_merge = array_merge($result_merge,$result);
	
		//return array
		return $array_merge;
	}
}
?>