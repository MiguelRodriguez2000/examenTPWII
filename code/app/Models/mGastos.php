<?php 
namespace App\Models;
use CodeIgniter\Model;
class mGastos extends Model
{
	protected $table = 'gastos';
	protected $primaryKey = 'id_gasto';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['cantidad', 'descrip','fecha','id_usuario','id_tipo'];

	protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
?>