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
        $query = $this->db->select('*')
            ->from($this->_table)
            ->get();

        return $query->result_array();
    }

    public function get_b_data()
    {
        $this->load->database('dbB');
        $query = $this->db->select('*')
            ->from($this->_table)
            ->get();

        return $query->result_array();
    }

    public function get_ab_data()
    {
        $dba = $this->load->database('dbA', true);

        $dba->select('*')
            ->from($this->_table)
            ->limit($limit)
            ->get();

        $data['dba'] = $dba->result_array();

        $dbb = $this->load->database('dbA', true);
        $dbb->select('*')
            ->from($this->_table)
            ->limit($limit)
            ->get();

        $data['dbb'] = $dbb->result_array();

        return $data
    }

}
?>
