<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * By Saif Khan
 * Trend Micrologics
 * June 8, 2015
 */

class Uploadify extends CI_Controller
{

    public $view_data = array();
    private $upload_config;

    function __construct()
    {
        parent::__construct();
		$this->load->model('uploadify_model');
    }
	public function index()
	{
		$result= $this->uploadify_model->get_files();
		$data['mp3']= $result['mp3'];
		$this->load->view('songs_view',$data);
	}
    public function upload()
    {
        $this->load->helper(array('url', 'form'));
        $this->load->view('uploadify_view', $this->view_data);
    }

    public function do_upload()
    {
    	
        $this->load->library('upload');

        $image_upload_folder = FCPATH . '/uploads';
		
		
        if (!file_exists($image_upload_folder)) {
            mkdir($image_upload_folder, DIR_WRITE_MODE, true);
        }

        $this->upload_config = array(
            'upload_path'   => $image_upload_folder,
            'allowed_types' => 'mp3|wav|aiff|wma|zip',
            'max_size'      => 20480,
            'remove_space'  => TRUE,
            'encrypt_name'  => FALSE,
        );

        $this->upload->initialize($this->upload_config);

        if (!$this->upload->do_upload()) {
            $upload_error = $this->upload->display_errors();
            echo json_encode($upload_error);
        } 
        else 
        {
            $file_info = $this->upload->data();
			print_r($_FILES);
			print_r($_GET);
			print_r($_POST);
			print_r($file_info);
			$data = array(
			'file_title'		=> $_POST['file_title'],
			'file_name' 		=> $file_info['file_name'],
			'file_type'			=> $file_info['file_type'],
			'file_path' 		=> $file_info['file_path'],
			'full_path' 		=> $file_info['full_path'],
			'raw_name' 			=> $file_info['raw_name'],
			'orig_name' 		=> $file_info['orig_name'],
			'file_ext' 			=> $file_info['file_ext'],
			'file_size' 		=> $file_info['file_size']
			);
			
			$this->uploadify_model->insert_file($data);
			echo json_encode($file_info);
        }
	}
}

/* End of file uploadify.php */
/* Location: ./application/controllers/uploadify.php */


