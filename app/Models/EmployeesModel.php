<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeesModel extends Model
{
    public function getEmployees()
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')
            ->get(20, 0);
        return $query->getResult();
    }

    public function getEmployeesById($id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')
            ->where('emp_no', $id)
            ->get();
        return $query->getResult();
    }

    public function insertEmployees($data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')
            ->ignore(true)
            ->insert($data);
        return $db->affectedRows();
    }
    public function updateEmployees($id, $data)
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')
            ->where('emp_no', $id)
            ->update($data);
        return $db->affectedRows();
    }
    public function deleteEmployees($id)
    {
        $db = \Config\Database::connect();


        $query = $db->table('employees')
            ->where('emp_no', $id)
            ->delete();
        return $db->affectedRows();
    }
}
