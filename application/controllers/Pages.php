<?php
/**
 * application/controllers/Pages.php
 * 
 * 
 */
class Pages extends CI_Controller {

    public function view($page = 'index')
    {
        $this->load->model('pages_model')
        
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $title = ucfirst($page); // Capitalize the first letter
        $data['title'] = "{$title} | Site Name | Company Location"; 
        $data['description'] = $this->pages_model->get_page_description($page);
        
        $this->load->view('pages/'.$page, $data);
        
    }


}