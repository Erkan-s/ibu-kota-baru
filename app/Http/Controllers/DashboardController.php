<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Js;
use Maatwebsite\Excel\Facades\Excel;
use PhpSpellcheck\Spellchecker\Aspell;
class DashboardController extends Controller
{
    public function index() {

        $path  = public_path('excel/Data Training IKN.xlsx');
        $excel = Excel::toCollection(null, $path)->toArray();
        $data  = [];
        
        // delete null data
        foreach($excel[0] as $row) {
            if ($row[0] == null || $row[0] == 'created_at'){
                continue;
            }
            $data[] = $row;
        }

        $data = $this->caseFolding($data);
        $data = $this->filtering($data);

        return view('dashboard', compact('data'));
    }

    public function caseFolding ($data=[]) {
        $result = [];

        foreach ($data as $row) {
            $row[1]   = strtolower($row[1]);
            $result[] = $row;
        }

        return $result;
    }

    public function filtering ($data = []) {
        $result = [];

        foreach ($data as $row) {

            // hapus semua kata yang berawalan @ (mention username)
            $row[1] = preg_replace('/@(\w+)/', '', $row[1]);
            // hapus url baik https/www/akhiran.com
            $row[1] = preg_replace('/\b(?:https?:\/\/|www\.)\S+\b|\b\w+\.\w+(?:\.\w+)*\b/', '', $row[1]);
            // hapus tanda baca dan hastag
            $row[1] = preg_replace('/[^\w\s]|_\#\w+\b/', '', $row[1]);
            // hapus angka
            $row[1] = preg_replace('/\d/', '', $row[1]);

            $result[] = $row;
        }

        return $result;
    }
    
    public function beforePraPemrosesan() {
        return view('before.pra_pemrosesan');
    }

    public function praPemrosesan() {
        // make request
        $url      = env("HOST_API", "127.0.0.1:8000");
        $response = Http::get($url . "/preprocessing/ibukota-baru?step=prapemrosesan");

        if ($response->ok()) {
            $respBody = $response->json(); // Mengambil data responsenya dalam format JSON
            $data = [];

            foreach ($respBody['data'] as $item) {             
                $data[] = $item; // Menyimpan data dalam array
            }
        }
        return view('pra_pemrosesan', compact('data'));
    }

    public function beforepenyesuaianData() {
        return view('before.penyesuaian_data');
    }

    public function penyesuaianData() {
        // make request
        set_time_limit(0);
        $url      = env("HOST_API", "127.0.0.1:8000");
        $response = Http::timeout(600)->get($url . "/preprocessing/ibukota-baru?step=penyesuaian");

        if ($response->ok()) {
            $data[] = $response->json()['data']; // Mengambil data responsenya dalam format JSON
        }

        return view('penyesuaian_data', compact('data'));
    }

    public function beforesentiWordNet() {
        return view('before.senti_word_net');
    }
 
    public function sentiWordNet() {
        // make request
        set_time_limit(0);
        $url      = env("HOST_API", "127.0.0.1:8000");
        $response = Http::timeout(600)->get($url . "/preprocessing/ibukota-baru?step=klasifikasi");
        
        if ($response->ok()) {
            $data[] = $response->json()['data']; // Mengambil data responsenya dalam format JSON
        }
        
        return view('senti_word_net', compact('data'));
    }

    public function grafikHasil() {
        // make request
        $url      = env("HOST_API", "127.0.0.1:8000");
        $response = Http::get($url . "/preprocessing/ibukota-baru?step=grafik");

        if ($response->ok()) {
            $respBody = $response->json()['data']; // Mengambil data responsenya dalam format JSON
            $labels = [];
            $values = [];
            foreach ($respBody as $key => $value) {
                $labels[] = $key;
                $values[] = $value;
            }
        }

        return view('grafik', compact('labels', 'values'));
    }
}
