<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\DetailOrderModel;
use App\Models\TableModel;
use App\Models\EmployeeModel;
use App\Models\ManageordersModel;
use App\Models\MenusModel;
use App\Models\OrderModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['rupiah'];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		session();
	}

	protected $categoryModel;
	protected $tableModel;
	protected $employeeModel;
	protected $manageordersModel;
	protected $menusModel;
	protected $orderModel;
	protected $detailOrderModel;

	public function __construct()
	{
		helper('rupiah');
		$this->categoryModel = new CategoryModel();
		$this->tableModel = new TableModel();
		$this->employeeModel = new EmployeeModel();
		$this->manageordersModel = new ManageordersModel();
		$this->menusModel = new MenusModel();
		$this->orderModel = new OrderModel();
		$this->detailOrderModel = new DetailOrderModel();
	}
}
