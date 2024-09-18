<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'room';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
                                    'id',
                                    'pmt_id',
                                    'Flat_id',
                                    'HotWater_Service',
                                    'ROWater_Service',
                                    'No_of_Beds',
                                    'Capacity_of_peoples',
                                    'FloorNo',
                                    'Address',
                                    'Bathroom_Type',
                                    'RoomAllocation',
                                    'TimePeriod',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
