<?php

class Workr extends Plugin
{
    
    public function action_update_check()
    {
        Update::add( $this->info->name, '888c83cd-48e1-4692-97cc-240dcd8d181c', $this->info->version );
    }
    
    /**
	 * Add some templates to the theme for the blocks
	 */
	public function action_init()
	{
		$this->add_template( 'dashboard.block.workr_silly', __DIR__ . '/dashboard.block.workr_silly.php' );
	}
	
	/**
	 * Return a list of blocks that can be used for the dashboard
	 * @param array $block_list An array of block names, indexed by unique string identifiers
	 * @return array The altered array
	 */
	public function filter_dashboard_block_list($block_list)
	{
		$block_list['workr_silly'] = _t( 'Silly Workr');
		return $block_list;
	}
    
}

?>