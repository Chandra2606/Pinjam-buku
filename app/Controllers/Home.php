<?php

namespace App\Controllers;

use App\Models\Mbuku;

class Home extends BaseController
{
    public function __construct()
    {
        $this->varmahasiswa = new Mbuku();
    }
    public function index()
    {
        $data = [
            'databuku' => $this->varmahasiswa->findAll()
        ];
        return view('index', $data);
    }
    public function formtambah()
    {
        helper('form');
        return view('Tambah');
    }
    public function simpandata()
    {
        $kdpinjam = $this->request->getVar('kdpinjam');
        $nama = $this->request->getVar('nama');
        $judul = $this->request->getVar('judul');
        $harga = $this->request->getVar('harga');
        $jumlah = $this->request->getVar('jumlah');
        $denda = $this->request->getVar('denda');
        $total = $this->request->getVar('total');
        $this->varmahasiswa->insert([
            'kdpinjam' => $kdpinjam,
            'nama' => $nama,
            'judul' => $judul,
            'harga' => $harga,
            'jumlah' => $jumlah,
            'denda' => $denda,
            'total' => $total
        ]);
        return redirect()->to('/');
    }

    public function hapus($kdpinjam)
    {
        $this->varmahasiswa->delete($kdpinjam);
        return redirect()->to('/');
    }

    public function formedit($kdpinjam)
    {
        $postModel = new Mbuku();

        $data = array(
            'post' => $postModel->find($kdpinjam)
        );

        return view('Edit', $data);
    }

    public function update($kdpinjam)
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'kdpinjam' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan'
                ]
            ],
            'nama'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
            'judul'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
            'harga'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
            'jumlah'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
            'denda'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
            'total'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan .'
                ]
            ],
        ]);

        if (!$validation) {

            //model initialize
            $postModel = new Mbuku();

            //render view with error validation message
            return view('post-edit', [
                'post' => $postModel->find($kdpinjam),
                'validation' => $this->validator
            ]);
        } else {

            //model initialize
            $postModel = new Mbuku();

            //insert data into database
            $postModel->update($kdpinjam, [
                'kdpinjam'   => $this->request->getPost('kdpinjam'),
                'nama' => $this->request->getPost('nama'),
                'judul' => $this->request->getPost('judul'),
                'harga' => $this->request->getPost('harga'),
                'jumlah' => $this->request->getPost('jumlah'),
                'denda' => $this->request->getPost('denda'),
                'total' => $this->request->getPost('total'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Post Berhasil Diupdate');

            return redirect()->to(base_url('/'));
        }
    }
}
