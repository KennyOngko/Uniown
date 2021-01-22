<?php

use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supports')->insert([
        ["question"=>'Bagaimana cara paling efektif melindungi diri dari virus corona?', "answer"=>'Cara yang paling efektif untuk melindungi diri dan orang lain dari penularan COVID-19 adalah mencuci tangan secara teratur, tutup mulut saat batuk dengan lipatan siku atau tisu, dan jaga jarak minimal satu meter dari orang yang bersin atau batuk.'],
        ["question"=>'Apakah virus corona dapat menyebabkan penyakit serius?', 
        "answer"=>'Tapi bagi sebagian orang yang berisiko tinggi (kelompok lanjut usia dan orang dengan masalah kesehatan menahun, seperti penyakit jantung, tekanan darah tinggi, atau diabetes), virus corona dapat menyebabkan masalah kesehatan yang serius. Kebanyakan korban berasal dari kelompok berisiko itu.'],
        ["question"=>'Apa nama resmi dari virus corona baru?', 
        "answer"=>'Virus Corona yang ditemukan di Wuhan adalah jenis baru dari virus Corona yang diberi nama resmi: Novel Coronavirus (2019-nCoV).'],
        ["question"=>'Apakah virus corona dapat menyebar melalui udara?', 
        "answer"=>'WHO belum pernah mengeluarkan pernyataan yang menyebutkan jika virus Corona dapat ditularkan melalui udara. Selain itu WHO juga sempat menuliskan dalam akun instagramnya, jika virus Corona hanya dapat ditularkan melalui tetesan yang dihasilkan ketika orang yang terinfeksi virus Corona batuk dan bersin.'],
        ["question"=>'Bagaimana cara melindungi diri dari penularan COVID-19 selain memakai masker?', 
        "answer"=>'Cara yang paling efektif untuk melindungi diri dan orang lain dari penularan COVID-19 adalah mencuci tangan secara teratur, tutup mulut saat batuk dengan lipatan siku atau tisu, dan jaga jarak minimal satu meter dari orang yang bersin atau batuk.'],
        ["question"=>'Bagaimana cara penyebaran virus corona yang banyak terjadi?', 
        "answer"=>'Ia menyebut penularan virus Covid-19 tidak langsung paling banyak terjadi. Penularan itu terjadi melalui benda di sekitar kita yang tercemar virus Covid-19 yang kita sentuh dan kemudian menyentuh mulut, hidung, dan mata.'],

        ["question"=>'Bagaimana cara menghilangkan COVID-19 dari permukaan benda sekitar kita?', 
        "answer"=>'Virus bisa tertinggal di permukaan benda-benda dan hidup selama beberapa jam hingga beberapa hari, namun cairan disinfektan dapat membunuhnya. Sementara ini, cara terbaik adalah melakukan tindakan pencegahan, yaitu: Sering suci tangan pakai sabun dan air mengalir (minimal selama 20 detik).'],
        ["question"=>'Apakah virus corona dapat menular lewat paket kiriman?', 
        "answer"=>'Meskipun begitu, Organisasi Kesehatan Dunia (WHO) menjelaskan bahwa menerima paket dari Cina tidak akan membuat seseorang tertular virus Corona Covid-19.'],
        ["question"=>'Apakah virus corona merupakan jamur?', 
        "answer"=>'Melalui hasil penelusuran, klaim dalam artikel tersebut mengenai virus Corona merupakan jamur adalah hal yang tidak benar. Dilansir dari laman resmi WHO, diketahui bahwa virus Corona merupakan keluarga besar virus yang dapat menyebabkan penyakit pada hewan atau manusia.'],
        ["question"=>'Apa saja pengobatan infeksi virus corona yang ada?', 
        "answer"=>'Saat ini belum ada pengobatan khusus yang efektif untuk infeksi virus corona baru. Vaksin mungkin baru bisa tersedia 18 bulan ke depan (2021). Sementara ini, cara terbaik adalah melakukan tindakan pencegahan, yaitu:Sering suci tangan pakai sabun dan air mengalir
        Hindari menyentuh muka.'],
        ["question"=>'Apakah Palestina telah menemukan vaksin virus corona?', 
        "answer"=>'Palestina dan negara-negara di Arab lainnya belum menemukan vaksin virus corona. Tidak ditemukan sumber informasi di dalam berita tersebut, termasuk tidak ada sumber resmi dari Kementerian Kesehatan China yang dikutip dalam pemberitaan itu.'],
        ["question"=>'Adakah obat khusus untuk mencegah atau mengobati virus corona baru?', 
        "answer"=>'Sampai saat ini, belum ada obat khusus yang disarankan untuk mencegah atau mengobati penyakit yang disebabkan virus corona baru (COVID-19). Mereka yang terinfeksi virus harus menerima perawatan yang tepat untuk meredakan dan mengobati gejala, dan mereka yang sakit serius harus dibawa ke rumah sakit.'],
        ]);
    }
}
