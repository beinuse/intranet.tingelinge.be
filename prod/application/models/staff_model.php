<?php
	class Staff_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_staff($staffID = FALSE){
			if($staffID === FALSE){
				$query = $this->db->get('staff');
				return $query->result_array();
			}

			$query = $this->db->get_where('staff', array('staffID' => $staffID));
			return $query->row_array();
		}

		public function create_staff(){
			$data = array(
				'lastname' => $this->input->post('Lastname'),
				'firstname' => $this->input->post('Firstname'),
				'jobtitle' => $this->input->post('JobTitle'),
				'status' => $this->input->post('Status'),
				'firstname' => $this->input->post('Firstname'),
				'address' => $this->input->post('Address'),
				'zipcode' => $this->input->post('Zipcode'),
				'city' => $this->input->post('City'),
				'country' => $this->input->post('Country'),
				'phonemobile' => $this->input->post('PhoneMobile'),
				'phonefixed' => $this->input->post('PhoneFixed'),
				'emailwork' => $this->input->post('EmailWork'),
				'emailhome' => $this->input->post('EmailHome'),
				'socialsecurityid' => $this->input->post('SocialSecurityID'),
				'birthday' => $this->input->post('Birthday'),
				'dateinservice' => $this->input->post('DateInService'),
				'dateoutservice' => $this->input->post('DateOutService'),
				'remarks' => $this->input->post('Remarks')
			);

			return $this->db->insert('staff', $data);
		}

		public function update_staff(){
			$data = array(
				'lastname' => $this->input->post('Lastname'),
				'firstname' => $this->input->post('Firstname'),
				'jobtitle' => $this->input->post('JobTitle'),
				'status' => $this->input->post('Status'),
				'firstname' => $this->input->post('Firstname'),
				'address' => $this->input->post('Address'),
				'zipcode' => $this->input->post('Zipcode'),
				'city' => $this->input->post('City'),
				'country' => $this->input->post('Country'),
				'phonemobile' => $this->input->post('PhoneMobile'),
				'phonefixed' => $this->input->post('PhoneFixed'),
				'emailwork' => $this->input->post('EmailWork'),
				'emailhome' => $this->input->post('EmailHome'),
				'socialsecurityid' => $this->input->post('SocialSecurityID'),
				'birthday' => $this->input->post('Birthday'),
				'dateinservice' => $this->input->post('DateInService'),
				'dateoutservice' => $this->input->post('DateOutService'),
				'remarks' => $this->input->post('Remarks')
			);

			$this->db->where('StaffID', $this->input->post('StaffID'));
			return $this->db->update('staff', $data);
		}
	}	