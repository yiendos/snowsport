<?php
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

namespace Nooku\Component\Signatures;
use Nooku\Library;

class ModelSignatures extends Library\ModelTable
{
	public function __construct(Library\ObjectConfig $config)
	{
		parent::__construct($config);

		$this->getState()
		    ->insert('published' , 'int')
            ->insert('category' , 'string')
            ->insert('sort', 'cmd', 'title')
            ->insert('searchword', 'string')
            ->insert('empty', 'int')
            ->insert('random', 'int');
	}
	
	protected function _buildQueryWhere(Library\DatabaseQuerySelect $query)
	{
	    parent::_buildQueryWhere($query);

		$state = $this->getState();

		if ($state->search) {
			$query->where('tbl.comment LIKE :search OR tbl.name LIKE :search')->bind(array('search' => '%'.$state->search.'%'));
		}

        if ($state->searchword) {
            $words = explode(' ', $state->searchword);

            foreach($words AS $word) {
                $query->where('(tbl.comment LIKE :search OR tbl.name LIKE :search)')->bind(array('search' => '%' . $word . '%'));
            }
        }
		
		if (is_numeric($state->published)) {
			$query->where('tbl.published = :published')->bind(array('published' => $state->published));
		}

        if(is_numeric($state->empty)){
            $query->where('tbl.comment != ""');
        }
	}

    /**
     * Builds a generic ORDER BY clasue based on the model's state
     */
    protected function _buildQueryOrder(Library\DatabaseQuerySelect $query)
    {
        $random = $this->getState()->random;

        if(is_numeric($random)){
            $query->order('RAND()','');
        }
    }

    protected function _buildQueryLimit(Library\DatabaseQuerySelect $query)
    {
        $limit = $this->getState()->limit;

        $random = $this->getState()->random;

        if(is_numeric($random))
        {
            $query->limit(1);
        }

        parent::_buildQueryLimit($query);
    }
}