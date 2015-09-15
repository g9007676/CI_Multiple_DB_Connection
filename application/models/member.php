<?php
class Member extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
        $this->_table = 'mdt_member';
	}

    public function get_a_data()
    {
        $this->load->database('dbA');
        var_dump('db name :' . $this->db->database);
        $query = $this->db->select('*')
            ->from($this->_table)
            ->get();

        return $query->result_array();
    }

    public function get_b_data()
    {
        $this->load->database('dbB');
        var_dump('db name :' . $this->db->database);
        $query = $this->db->select('*')
            ->from($this->_table)
            ->get();

        return $query->result_array();
    }

    public function get_ab_data()
    {
        $dba = $this->load->database('dbA', true);

        $query = $dba->select('*')
            ->from($this->_table)
            ->get();

        $data['dba'] = $query->result_array();

        $dbb = $this->load->database('dbB', true);
        $query = $dbb->select('*')
            ->from($this->_table)
            ->get();

        $data['dbb'] =  $query->result_array();

        return $data;
    }

}
?>
