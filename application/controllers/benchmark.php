<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Benchmark extends CI_Controller 
{
	//
	// Run a test that will 
	public function index()
	{
		// Make sure we have the table installed
		if(! $this->db->table_exists('BenchmarkData'))
		{
			$this->load->dbforge();
			
			$cols = array(
				'Id' => array('type' => 'INT', 'constraint' => 9, 'unsigned' => TRUE, 'auto_increment' => TRUE),
				'Text' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE)
			);
			
			$this->dbforge->add_key('Id', TRUE);
    	$this->dbforge->add_field($cols);
    	$this->dbforge->add_field("CreatedAt TIMESTAMP DEFAULT now()");
    	$this->dbforge->create_table('BenchmarkData', TRUE);
		} 
		
		// Add a bunch of data.
		$this->db->empty_table('BenchmarkData');
		for($i=0; $i<=2500; $i++)
		{
			$str = rand();
			$this->db->insert('BenchmarkData', array('Text' => $str));
		}
		
		// Just for fun lets get all the data back.
		$str = '';
		$data = $this->db->get('BenchmarkData')->result_array();
		foreach($data AS $key => $row)
		{
			$str .= $row['Text'];
		}
		
		$this->load->view('benchmark');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */