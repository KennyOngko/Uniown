<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ["image"=>'asset/covid-news.jpg',
            "country"=>'Indonesia',
            'title'=>"BREAKING NEWS Update Corona Indonesia 3 Januari 2021: Tambah 6.877 Kasus, Total 765.350 Positif", 
            'description'=>'TRIBUNNEWS.COM - Jumlah kasus terkonfirmasi positif virus corona (Covid-19) di Indonesia, bertambah 6.877 pasien per Minggu (3/1/2021).

            Dikutip dari Covid19.go.id, total kasus terkonfirmasi positif Covid-19 di Indonesia menjadi 765.350 pasien.
            
            Sebelumnya, pada Sabtu (2/1/2021), total pasien positif Covid-19 sebanyak 758.473 orang.
        
            Lalu, jumlah pasien yang sembuh pada hari ini menjadi 631.937 pasien di seluruh Indonesia.

            Pada hari sebelumnya, total pasien yang sembuh yakni 625.518 orang.
            
            Sehingga, ada penambahan pasien sembuh sebanyak 6.419 orang.
            
            Kemudian, total ada 22.734 orang yang dinyatakan meninggal dunia hingga Minggu hari ini.

            Sementara, data Sabtu kemarin sebanyak 22.555 orang dinyatakan meninggal dunia.
            
            Sehingga, jumlah pasien Covid-19 yang meninggal dunia dalam 24 jam sebanyak 179 orang.'
        ],

        ["image"=>'asset/wiku-news.jpeg',
            "country"=>'Indonesia',
            'title'=>"Satgas ungkap alasan kasus COVID-19 di Indonesia masih tinggi", 
            'description'=>'Jakarta (ANTARA) - Juru Bicara Satgas Penanganan COVID-19 Prof Wiku Adisasmito mengungkapkan alasan kasus COVID-19 di Indonesia masih tinggi dan bahkan semakin menjolak dari hari ke hari karena virus SARS COV 2 yang masih banyak bersirkulasi
            
            "Di Indonesia kenapa kasusnya tinggi, karena virusnya masih banyak bersirkulasi. karena masih diberi kesempatan oleh orang-orang Indonesia yang masih berkerumun", kata Wiku dalam dialog tentang penkembangan kasus COVID-19 yang dipantau secara daring di Jakarta, Selasa.
            
            Wiku membandingkan kasus di Indonesia yang masih tinggi dengan Singapura dan China yang sudah jauh menurun atau bahkan hampir tidak ada. Dia menyebutkan kasus COVID-19 di kedua negara tersebut menjadi sedikit, atau beberapa wilayahnya bahkan terbebas dari pandemi, karena sirkulasi virus di negara tersebut tersisa sedikit.
            
            Karena virus SARS CoV 2 yang beredar di Singapura dan China sedikit, maka virus terbatas ruang geraknya dan tidak bisa menulari orang lain sehingga kasusnya hanya sedikit.
            
            Sementara di Indonesia, kata Wiku, virus masih mudah berpindah-pindah dan memperbanyak diri karena masih terdapat banyak kerumunan manusia. "Jadi dia bisa loncat bisa menular, pada saat menular dia mengimplifikasi, jumlahnya makin banyak," jelas Wiku.'
        ],

        ["image"=>'asset/satgas-news.jpg',
            "country"=>'Indonesia',
            'title'=>"PSBB: Pemerintah terapkan kebijakan pengetatan pembatasan di Jawa-Bali pada 11-25 Januari, apa saja kegiatan yang dibatasi?", 
            'description'=>'Pemerintah Indonesia memutuskan untuk menerapkan kebijakan pengetatan pembatasan pergerakan masyarakat pada 11-25 Januari 2021, khususnya di pulau Jawa dan Bali, merespons meningkatnya kasus Covid-19 di wilayah tersebut.

            "Penerapan pembatasan secara terbatas dilakukan provinsi di Jawa dan Bali karena seluruh provinsi tersebut memenuhi salah satu dari empat parameter yang ditetapkan," kata Menko Perekonomian dan Ketua Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional, Airlangga Hartarto, dalam jumpa pers, Rabu (06/01).
            Parameter itu adalah, tingkat kematian di atas rata-rata tingkat kematian nasional sebesar 3%, tingkat kesembuhan di bawah nasional sebesar 82%, kasus aktif di bawah kasus aktif nasional sebesar 14%, serta keterisian ruma sakit untuk tempat tidur isolasi dan ICU di atas 70%.
            Airlangga menegaskan pembatasan ini dilakukan selama dua pekan, mulai 11 hingga 25 Januari dan akan terus dievaluasi.
            "Pemerintah mendorong bahwa pembatasan ini dilakukan pada tanggal 11 Januari-25 Januari, dan pemerintah akan terus melakukan evaluasi," ungkapnya.
            
            Keputusan ini sesuai Peraturan Pemerintah (PP) Nomor 21 Tahun 2020 tentang Pembatasan Sosial Berskala Besar dalam Rangka Percepatan Penanganan Covid-19.
            
            "Pembatasan ini kami tegaskan bukan pelarangan kegiatan, tetapi pembatasan," kata Airlangga.

            Dalam keputusan itu, kegiatan masyarakat yang akan dibatasi, antara lain, tempat kerja dengan work from house (kerja dari rumah) 75%, belajar dilakukan secara daring, jam operasional pusat perbelanjaan, sampai jam operasi moda transportasi.

            Menurut Erlangga, pembatasan kegiatan ini selanjutnya akan dituangkan dalam peraturan daerah (perda).

            "Daerah-daerah yang mempunyai kriteria seperti tersebut di atas, nanti para gubernurnya akan membuatkan pergub atau kabupaten/kota dengan perkada," ujarnya.

            "Atau nanti menteri dalam negeri akan membuat edaran ke seluruh pimpinan daerah dan tadi sudah disampaikan dalam rapat antara bapak presiden dan seluruh gubernur se-Indonesia," kata Airlangga.'
        ],

        ["image"=>'asset/vaksin-news.jpg',
            "country"=>'Indonesia',
            'title'=>"Vaksin Covid-19: Efek samping yang dirasakan nakes Indonesia yang divaksin di Inggris, hanya 'pegal linu'", 
            'description'=>'Tenaga kesehatan Indonesia yang bekerja di rumah sakit di London dan termasuk dalam kelompok pertama yang mendapat vaksinasi massal Covid-19 di Inggris, mengatakan efek samping yang mereka rasakan hanya "pegal linu" atau nyeri badan.

            Tiga nakes Indonesia yang bekerja di rumah sakit yang berbeda di London akan mendapatkan dosis kedua vaksin Pfizer pada sekitar pekan kedua Januari ini, untuk memastikan imunisasi penuh.
            
            Dua dokter dan seorang perawat Indonesia mengalami apa yang disebutkan dalam lembaran yang dibagikan sebelum vaksinasi, sebagai efek samping ringan, namun dengan tingkatan yang berbeda.
            
            Dyah Mustikaning Pitha Prawesti, dokter kebidanan dan kandungan, yang bekerja di Chelsea and Westminster Hospital, London mengatakan yang ia rasakan, "Sedikit pegal dan linu saja, tapi lengan dan tangan masih tetap berfungsi seperti biasa."
            
            "Saya sih linu dan pegal hanya di lengan tempat suntikan. Tapi semua anggota badan yang lain tak terpengaruh. Sekitar 24 jam, setelah itu sudah tak berasa lagi," kata dokter yang biasa dipanggil Pitha.

            Vaksinasi massal di Inggris - dengan vaksin Pfizer/BioNTech - dimulai pada awal Desember lalu di tengah lonjakan besar kasus yang disebut dokter serta pejabat kesehatan sebagai "tsunami" dan "fase paling berbahaya."

            Sementara Annas Alamudi, perawat yang bekerja di bagian gawat darurat di rumah sakit Kings College London mengatakan yang ia rasakan "cuma pegal linu dua hari...pegalnya tak parah, kayak abis olahraga aja."'
        ],

        ["image"=>'asset/sing-news.jpg',
            "country"=>'Singapore',
            'title'=>"Singapura pertimbangkan pelonggaran perjalanan bagi yang sudah terima vaksin corona", 
            'description'=>'KONTAN.CO.ID - SINGAPURA. Singapura akan mempertimbangkan untuk melonggarkan pembatasan perjalanan bagi orang-orang yang telah mendapat vaksin virus corona baru.

            "Ada beberapa penelitian yang sedang berlangsung tentang keefektifan vaksin dalam mengurangi risiko penularan, dan kami memantaunya dengan sangat hati-hati," kata Wakil Kepala Satuan Tugas Penanganan Covid-19 Lawrence Wong di hadapan Parlemen Singapura, Senin (4/1).
            
            "Jika ada bukti yang jelas bahwa risiko penularan dapat diturunkan secara signifikan, kami pasti akan mempertimbangkan beberapa relaksasi dari rezim SHN (pemberitahuan tinggal di rumah) untuk pelancong yang divaksinasi," ujarnya seperti dikutip Reuters.
            
            Sementara penggunaan vaksin virus corona di Singapura, Menteri Kesehatan Gan Kim Yong mengatakan, akan diizinkan jika Otoritas Ilmu Kesehatan (HSA) menilai itu "cukup manjur dan aman untuk digunakan". Dan, hanya jika manfaat vaksin lebih besar dari risiko potensi efek sampingnya.

            Dia menegaskan, proses persetujuan HSA melibatkan penerapan "standar internasional yang ketat" untuk menilai vaksin, "Guna memastikan memenuhi standar kualitas, keamanan, dan kemanjuran tinggi yang ditetapkan," tegasnya seperti dilansir Channel News Asia.

            Vaksin virus corona buatan Pfizer-BioNTech telah melalui proses "proses peninjauan yang ketat" oleh HSA dan telah diizinkan untuk digunakan di Singapura, menurut Gan. Sedang vaksin Moderna dan Sinovac sedang melalui proses peninjauan tersebut.'
        ],

        ["image"=>'asset/thai-news.jpeg',
            "country"=>'Thailand',
            'title'=>"Thailand Lockdown Kota Bangkok akibat Lonjakan Kasus Covid", 
            'description'=>'Jakarta, CNN Indonesia -- Pemerintah Thailand memutuskan untuk mengunci total atau lockdown Kota Bangkok akibat lonjakan kasus virus corona.
            Hingga Sabtu (2/12) positif Covid-19 di Thailand telah mencapai lebih dari 7.300 kasus yang menyebar di 53 kota.
            
            Di Bangkok sendiri, ada lebih dari 2.600 kasus aktif.
            
            Sekolah-sekolah di kota Bangkok juga ditutup sementara selama dua pekan. Pemerintah akan membangun lusinan pos pemeriksaan di seluruh kota.

            "Kami sebenarnya tidak ingin menggunakan tindakan ekstrem seperti lockdown dan memberlakukan jam malam, tapi kami membutuhkan cara yang lebih kuat untuk mencegah lonjakan baru," kata Juru Bicara Satuan Tugas Covid-19 Thailand, Taweesin Visanuyothin dikutip AFP, Sabtu (2/1).

            Pembatasan jam malam dan lockdown nasional rencananya mulai berlaku 4 Januari sampai 1 Februari 2021.

            Thailand sempat menjadi salah satu negara yang mampu menekan penyebaran Covid-19.
            
            Pada September lalu, Thailand menjadi negara di Asia Tenggara yang tidak mencatatkan kasus baru infeksi virus corona dalam kurun waktu seratus hari.

            Sejauh ini negara berpenduduk 70 juta orang tersebut memiliki beban kasus 3.427 pasien, dengan 58 kematian. Lebih dari 28 persen dari infeksi yang dilaporkan adalah kasus di luar negeri.

            Thailand dinilai sebagai salah satu negara yang cukup agresif melakukan langkah pencegahan penularan virus corona. Negara ini juga dinilai beberapa pihak cukup terbuka kepada publik.

            Negeri Gajah Putih itu menjadi yang pertama kali mengungkap adanya kasus corona kepada publik dunia di luar China. Pemerintah setempat mengumumkan kasus itu tepatnya pada 13 Januari 2020.
            
            Kasus corona pertama Thailand adalah seorang turis China yang terbang ke Bangkok dari kota Wuhan. Usai penemuan ini, pada akhir Maret Thailand melarang turis dari Tiongkok untuk masuk ke sana.

            Ketika beban kasus corona melonjak mendekati 1.000, pemerintah Thailand pun mengumumkan status darurat dan melarang masuk semua warga asing.

            Penutupan perbatasan pun terbukti efektif melindungi Thailand dari penyebaran Covid-19.'
        ],

        ["image"=>'asset/malay-news.jpg',
            "country"=>'Malaysia',
            'title'=>"Malaysia siaga: Corona merebak di antara petugas kesehatan, kasus Covid-19 rekor", 
            'description'=>'ONTAN.CO.ID - KUALA LUMPUR. Pemerintah Malaysia siaga. Rumah sakit besar Malaysia menghadapi wabah virus corona yang menyebar di antara petugas kesehatan dan staf. Ini terjadi seiring melonjaknya jumlah kasus Covid-19 aktif yang mencapai rekor lebih dari 15.000 pada hari Jumat (18/12/2020).

            Mengutip Straits Times, Rumah Sakit Umum Klang dan Rumah Sakit Serdang, dua rumah sakit besar di negara bagian terkaya dan terpadat di negara bagian Selangor, telah merebak di antara para pekerjanya dalam beberapa pekan terakhir.
            
            Rumah sakit di Klang telah mencatatkan lebih dari 50 staf terinfeksi virus, dan Rumah Sakit Serdang telah mencatat 29 kasus.

            Menurut Kementerian Kesehatan pada hari Jumat, Rumah Sakit Sungai Buloh, fasilitas utama lain yang merawat pasien Covid-19, melaporkan 15 kasus di antara para pekerjanya. Dan Rumah Sakit Kuala Lumpur telah mendaftarkan 10 kasus.

            Rumah sakit tersebut secara kolektif melayani daerah perkotaan yang padat penduduk dengan jumlah lebih dari tujuh juta orang, meliputi Kuala Lumpur dan Selangor.

            Kementerian Kesehatan mengkonfirmasi pada hari Jumat bahwa total 1.359 infeksi virus corona telah terdaftar di antara petugas kesehatan sejak gelombang ketiga pandemi dimulai pada akhir September. Pada hari Jumat saja, dilaporkan 43 infeksi lainnya di antara petugas kesehatan.

            1.697 petugas kesehatan lainnya berada di bawah Perintah Pengawasan Rumah, yang menempatkan mereka di karantina rumah setidaknya selama 10 hari.

            "Lonjakan drastis ini diyakini terkait erat dengan peningkatan penularan komunitas. Namun, kasus di semua rumah sakit yang terlibat masih terkendali dan layanan kesehatan disediakan seperti biasa," kata kementerian dalam update harian tentang situasi virus corona seperti yang dilansir Straits Times.'
        ],


        ]);
    }
}
