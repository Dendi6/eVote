<?php

namespace App\Controllers;

use App\Models\VoteModel;

class Home extends BaseController
{
	protected $voteModel;
	public function __construct()
	{
		$this->voteModel = new VoteModel();
	}

	public function index()
	{
		//koneksi menghitung jumlah yang di sediakan 
		$db     = \Config\Database::connect();
		$builder = $db->table('vote');
		$builder->countAllResults();

		//menghitung jumlah suara pilihan
		$builder->like('pilihan', 'Dendi');
		$dendi = $builder->countAllResults();
		$builder->like('pilihan', 'Reza Zulfan');
		$reza = $builder->countAllResults();
		$builder->like('pilihan', 'Rijal El Fikri');
		$rijal = $builder->countAllResults();
		$builder->like('pilihan', 'Siti Marliana');
		$simar = $builder->countAllResults();
		$builder->like('pilihan', 'Marina Sascya');
		$marin = $builder->countAllResults();

		$data = [
			'title' => 'Dendi eVote',
			'dendi' => $dendi,
			'reza' => $reza,
			'rijal' => $rijal,
			'simar' => $simar,
			'marin' => $marin
		];

		return view('beranda/index', $data);
	}

	public function vote()
	{
		//validasi input
		if (!$this->validate([
			'nik' => 'required|is_unique[vote.nik,nik]',
			'nama' => 'required',
			'pilihan' => 'required'
		])) {
			session()->setFlashdata('error', 'NIK sudah melakukan pemilihan');

			return redirect()->to('/home')->withInput();
		}

		$this->voteModel->save([
			'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
			'pilihan' => $this->request->getVar('pilihan')
		]);

		session()->setFlashdata('pesan', 'Selamat anda telah melakukan pemilihan');

		return redirect()->to('/home');
	}

	public function riwayat()
	{
		$data = [
			'title' => 'Riwayat Pemilihan',
			'data' => $this->voteModel->findAll()
		];

		return view('riwayat/index', $data);
	}
}
