<?php
//application/models/Pages_model.php
/**
 * Handles the data for public pages
 */
class Pages_model extends CI_Model {

    public function __construct()
    {
        // incase we need the constructor!
    }

    public function get_page_description($page)
    {

        switch ($page) {
            case 'value':
                return ''
                break;
            
            default:
                return 'Default Page Description'
                break;
        }
    }



} // end of Main_model.php