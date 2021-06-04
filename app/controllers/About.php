<?php 

class About extends Controller{
    public function index($nama = 'RIZKI', $pekerjaan = 'Programmer', $umur = 17){
        $data = ['nama'=>$nama, 'pekerjaan'=>$pekerjaan, 'umur'=>$umur, 'judul'=>'About'];
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}