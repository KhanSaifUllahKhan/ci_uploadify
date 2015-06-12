<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * By Saif Khan
 * Trend Micrologics
 * June 8, 2015
 */

class Uploadify_model extends CI_Model
{

    public $view_data = array();
    private $upload_config;

    function __construct()
    {
        parent::__construct();
    }

	function insert_file($data)
	{
		$this->db->insert('mp3',$data);
	}
	public function get_files()
	{
		$this->db->select('*');
		$this->db->from('mp3');
		$query= $this->db->get();
		$result['mp3']=$query->result();
		return $result;
	}
}

/* End of file uploadify_model.php */
/* Location: ./application/models/uploadify_model.php */


