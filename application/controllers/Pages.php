<?php
class Pages extends CI_Controller {

	//fonction chargée au lancement de la page ..../home.php
        public function view($page = 'home')
        {

        	//on teste si cette page existe	
        	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        // si la page existe
        // la $title fait référence à ?php echo $title; dans le header
        //the value of $data['title'] in the controller is equivalent to $title in the view.
        $data['nom_de_la_vue'] = ucfirst($page); // Capitalize the first letter
        //on charge les vues à afficher sur cette page
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
}