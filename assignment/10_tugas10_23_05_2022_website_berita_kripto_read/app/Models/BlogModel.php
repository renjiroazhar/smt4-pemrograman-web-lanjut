<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'article';
	protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'created_at', 'updated_at'];

	// Read
    public function read($id)
    {
		$data = $this->db->get($this->table, ['id' => $id])->getRowArray();
		return $data;
	}

	// Create
	// public function insert($table, $datas)
    // {
	// 	$data = $this->db->insert($table, $datas);
	// 	return $data;
	// }

	// Update
    public function edit($table, $data, $id)
    {
		$data = $this->db->update($table, $data, $id);
		return $data;
	}

	// Delete
    // public function delete($table, $id)
    // {
    //     $data = $this->db->delete($table, $id);
	// 	return $data;
	// }
}
