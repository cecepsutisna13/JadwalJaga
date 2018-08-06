<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_calendar extends CI_Model {

	public function __construct()
	{
    	parent::__construct();
	}

	public function tampil_data()
	{
		$query = $this->db->query("SELECT Nama FROM t_anggota where Status = 'Primary'");
		return $query;
	}

	public function tampil_data_baru()
	{
		$query = $this->db->query("SELECT Nama FROM t_anggota where Status = 'Secondary'");
		return $query;
	}

/*Read the data from DB */
	Public function getEvents()
	{
	$sql = "SELECT * FROM events WHERE events.start BETWEEN ? AND ? ORDER BY events.start ASC";
	return $this->db->query($sql, array($_GET['start'], $_GET['end']))->result();
	}

/*Create new events */

	Public function addEvent()
	{
	$sql = "INSERT INTO events (title,status,events.start,events.end, color) VALUES (?,?,?,?,?)";
	$this->db->query($sql, array($_POST['title'],$_POST['status'],$_POST['start'],$_POST['end'], $_POST['color']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function updateEvent()
	{

	$sql = "UPDATE events SET title = ?, dev_sebelumnya = ?, description = ? WHERE id = ?";
	$this->db->query($sql, array($_POST['title'],$_POST['dev_sebelumnya'],$_POST['description'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}


	/*Delete event */

	Public function deleteEvent()
	{

	$sql = "DELETE FROM events WHERE id = ?";
	$this->db->query($sql, array($_GET['id']));
		return ($this->db->affected_rows()!=1)?false:true;
	}

	/*Update  event */

	Public function dragUpdateEvent()
	{
			//$date=date('Y-m-d h:i:s',strtotime($_POST['date']));

			$sql = "UPDATE events SET  events.start = ? ,events.end = ?  WHERE id = ?";
			$this->db->query($sql, array($_POST['start'],$_POST['end'], $_POST['id']));
		return ($this->db->affected_rows()!=1)?false:true;


	}






}
