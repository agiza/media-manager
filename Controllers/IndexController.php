<?php
/**
 * @copyright 2012-2013 City of Bloomington, Indiana
 * @license http://www.gnu.org/licenses/agpl.txt GNU/AGPL, see LICENSE.txt
 * @author Cliff Ingham <inghamn@bloomington.in.gov>
 */
namespace Application\Controllers;

use Application\Models\MediaTable;
use Blossom\Classes\Block;
use Blossom\Classes\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$table = new MediaTable();
		$list = $table->find();
		$this->template->blocks[] = new Block('media/thumbnails.inc', ['media'=>$list]);
	}
}
