<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Render extends CI_Controller {
    
    public function __construct(){
        parent:: __construct();
        $this->load->library('Ciqrcode');
        $this->load->library('Zend');
    }

    public function index() {
        $data['title'] = "QrCode";
        $this->load->view('render', $data);
    }

    public function QrCode($skodenya) {

        QRcode :: png(
            $skodenya,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 5,
            $margin = 2
        );
    }

    public function Barcode($anyText) {
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render(
            'code128','image',
            array('text' => $anyText),
        );
    }
}