<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // category
        DB::statement('INSERT INTO categories (name, image) VALUES (?, ?)', ['Binatang', 'horse_home.jpg']);
        DB::statement('INSERT INTO categories (name, image) VALUES (?, ?)', ['Kendaraan', 'car_home.jpg']);
        DB::statement('INSERT INTO categories (name, image) VALUES (?, ?)', ['Pekerjaan', 'astronaut_home.jpg']);

        // questions
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Siapakah aku?', 'sapi.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Siapakah aku?', 'kelinci.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Siapakah aku?', 'ayam.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Siapakah aku?', 'kambing.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Siapakah aku?', 'gajah.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku adalah hewan yang suka makan ...?', 'kambing.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku adalah hewan yang suka makan ...?', 'kelinci.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku adalah hewan yang memproduksi ...?', 'sapi.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku memproduksi ...?', 'ayam.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku tinggal di ...?', 'ikan.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Manakah yang cocok denganku?', 'sapi.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku adalah hewan peliharaan yang memiliki taring. Benar atau salah?', 'kucing.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Binatang yang sering kali diguna sebagai mode transport', 'kuda.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Binatang ini mempunyai ... yang sangat besar', 'gajah.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [1, 'Aku suka ...?', 'kelinci.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Apakah aku?', 'mobil.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Apakah aku?', 'pesawat.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Apakah aku?', 'kapal.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Apakah aku?', 'truk.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Apakah aku?', 'kereta.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku adalah kenderaan yang terbang ke...', 'roket.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku dapat membawa penumpang menyebrangi...', 'kapal.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Kenderaan ini dapat membawa banyak...', 'kereta.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku kendaraan yang mempunyai...', 'motor.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku dapat membawa banyak...', 'truk.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Bagaimana cara kerja sepeda? Apa yang membuatnya bisa bergerak?', 'sepeda.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Bagaimana cara kerja pesawat? Apa yang membuatnya bisa bergerak?', 'pesawat.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku kendaraan yang digunakan untuk... ?', 'truk.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku mempunyai ...?', 'pesawat.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [2, 'Aku dapat ditemukan di...?', 'kereta.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'polisi.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'koki.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'dokter.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'pilot.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'astronot.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Aku ... di kelas?', 'guru.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Pekerjaan apa yang melibatkan mengarah...?', 'polisi.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Pekerjaan ini melibatkan orang untuk...?', 'tentara.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah Aku?', 'guru.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Pekerjaan aku melibatkan membantu orang yang memiliki masalah...?', 'pengacara.png']);

        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Aku adalah orang yang untuk ditemukan jika anda mempunyai emergensi...?', 'dokter.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Siapakah aku?', 'pengacara.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Aku biasanya memakai baju ...?', 'tentara.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Pekerjaan ini melibatkan...?', 'pilot.png']);
        DB::statement('INSERT INTO questions (category_id, text, image) VALUES (?, ?, ?)', [3, 'Aku adalah orang yang terbang ke...?', 'astronot.png']);

        // materials
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'sapi.png', 'sapi.png', 'Sapi', 'sapi.mp3', "Sapi adalah hewan besar yang tinggal di peternakan. Mereka punya kulit yang keras dan bulu yang tebal. Sapi suka makan rumput hijau dan daun-daunan. Kita bisa mendapatkan susu dari sapi, dan susu itu bisa kita minum atau buat jadi yogurt dan keju. Sapi juga suka berbaring di padang rumput dan mengunyah makanannya dengan tenang."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'kambing.png', 'kambing.png', 'Kambing', 'kambing.mp3', "Kambing adalah hewan yang lucu dan memiliki bulu yang lembut. Mereka punya dua tanduk di atas kepala mereka. Kambing suka makan rumput hijau dan daun-daunan. Mereka juga bisa memberikan kita susu yang enak untuk diminum. Kambing suara mereka seperti 'meeeh-meeeh' dan mereka suka melompat-lompat di padang rumput."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'kelinci.png', 'kelinci.png', 'Kelinci', 'kelinci.mp3', "Kelinci adalah hewan yang lucu dan kecil. Mereka punya telinga panjang yang bisa mereka gunakan untuk mendengar suara-suara di sekitarnya. Kelinci memiliki bulu yang lembut dan bisa berwarna putih, cokelat, atau abu-abu. Mereka suka makan wortel dan rumput hijau. Kelinci suka melompat-lompat dan mereka sangat cepat. Mereka adalah hewan yang manis dan ramah."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'ayam.png', 'ayam.png', 'Ayam', 'ayam.mp3', "Ayam adalah hewan yang hidup di peternakan. Mereka punya bulu yang berwarna-warni, seperti merah, kuning, atau putih. Ayam memiliki sayap dan cakar kecil di kakinya. Mereka suka berkokok di pagi hari dengan suara 'kukuruyuk.' Ayam juga suka makan biji-bijian, seperti jagung dan biji-biji lainnya. Mereka memberikan kita telur yang bisa dimasak menjadi makanan yang enak, seperti telur dadar atau telur rebus. Ayam adalah hewan yang hidup ceria di peternakan."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'ikan.png', 'ikan.png', 'Ikan', 'ikan.mp3', "Ikan adalah hewan yang hidup di dalam air. Mereka memiliki sirip dan sisik yang berkilau. Ikan dapat memiliki berbagai warna yang indah, seperti merah, biru, atau kuning. Beberapa ikan bahkan memiliki ekor yang panjang dan cantik. Ikan suka berenang di air, dan mereka bernapas menggunakan insang. Beberapa ikan juga bisa membuat gerakan yang indah, seperti gerakan sirip mereka yang mempesona. Kita bisa menemukan ikan di sungai, danau, atau di dalam akuarium di rumah. Beberapa ikan bahkan menjadi hewan peliharaan yang menarik."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'gajah.png', 'gajah.png', 'Gajah', 'gajah.mp3', "Gajah adalah hewan besar dan kuat. Mereka punya hidung yang panjang dan lentur yang disebut belalai. Gajah suka makan daun-daunan, rumput, dan buah-buahan. Belalai gajah bisa digunakan untuk mengambil makanan atau minum air dari sungai. Gajah juga punya telinga besar yang mereka gunakan untuk mendingarkan suara-suara di hutan. Mereka sangat ramah dan pintar. Gajah adalah hewan yang sangat istimewa dan perlu kita pelihara dengan baik di alam liar."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'kuda.png', 'kuda.png', 'Kuda', 'kuda.mp3', "Kuda adalah hewan yang cantik dan kuat. Mereka punya empat kaki yang kokoh dan punya bulu yang lembut. Kuda suka makan rumput hijau dan biji-bijian seperti jagung. Mereka bisa membantu manusia dengan membawa mereka naik punggungnya, seperti saat berkuda. Kuda juga bisa berlari sangat cepat, seperti dalam balapan. Mereka bisa membuat suara 'neigh' yang khas. Kuda adalah teman yang hebat dan bisa membantu kita dalam banyak hal."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [1, 'kucing.png', 'kucing.png', 'Kucing', 'kucing.mp3', "Kucing adalah hewan yang kecil dan manis. Mereka punya bulu yang lembut dan bisa berwarna beragam, seperti oranye, hitam, putih, atau belang-belang. Kucing memiliki dua telinga tajam dan mata yang bisa melihat dalam gelap. Mereka suka makan makanan seperti ikan dan daging. Kucing adalah hewan yang suka bermain dan berlari-lari kecil. Mereka juga bisa menjilat diri mereka sendiri untuk membersihkan bulu. Kucing bisa menjadi teman yang baik dan penuh kasih sayang di rumah."]);

        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'mobil.png', 'mobil.png', 'Mobil', 'mobil.mp3', "Mobil adalah kendaraan dengan empat roda yang membantu orang dewasa pergi ke tempat-tempat jauh. Mereka mengemudi dengan kursi depan dan roda kemudi. Mobil bisa berwarna-warni dan membantu kita pergi ke sekolah, tempat kerja, atau liburan."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'motor.png', 'motor.png', 'Motor', 'motor.mp3', "Motor adalah kendaraan yang lebih kecil dari mobil. Ia memiliki dua roda dan tidak memiliki atap. Orang dewasa mengendarainya dengan duduk di atasnya dan memegang pegangan. Motor membantu orang pergi ke tempat-tempat dengan cepat."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'pesawat.png', 'pesawat.png', 'Pesawat', 'pesawat.mp3', "Pesawat adalah kendaraan yang bisa terbang di udara. Pesawat memiliki sayap yang besar dan mesin untuk membuatnya terbang. Orang-orang naik pesawat melalui bandara untuk pergi ke tempat-tempat yang sangat jauh, seperti negara lain atau pulau yang jauh. Pesawat membantu kita menjelajahi dunia!"]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'kereta.png', 'kereta.png', 'Kereta', 'kereta.mp3', "Kereta adalah kendaraan panjang yang berjalan di atas rel besi. Banyak orang bisa naik kereta sekaligus. Pergi ke stasiun dan kereta akan membawa kita ke tempat-tempat jauh, seperti kota-kota lain. Mereka juga bisa membawa barang-barang. Kamu akan mendengar bunyi 'chugga-chugga' ketika kereta bergerak. Kereta adalah cara seru untuk pergi ke tempat-tempat bersama-sama!"]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'sepeda.png', 'sepeda.png', 'Sepeda', 'sepeda.mp3', "Sepeda adalah kendaraan yang memiliki dua roda dan digerakkan oleh tenaga manusia dengan mengayuh pedal. Sepeda dapat digunakan untuk berolahraga, berkeliling di sekitar lingkungan, atau sebagai alat transportasi. Mereka datang dalam berbagai model, termasuk sepeda balap, sepeda gunung, dan sepeda lipat. Sepeda membantu kita menjaga kesehatan dan mengeksplorasi sekitar dengan cara yang menyenangkan."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'kapal.png', 'kapal.png', 'Kapal', 'kapal.mp3', "Kapal adalah kendaraan yang berlayar di atas air. Mereka memiliki badan yang panjang dan biasanya dibuat dari logam atau kayu. Kapal bisa digunakan untuk berlayar di laut atau sungai. Beberapa kapal sangat besar dan digunakan untuk mengangkut barang dari satu negara ke negara lain. Ada juga kapal yang digunakan untuk berkeliling dan menikmati pemandangan di tengah laut. Kapal memiliki mesin dan layar yang membantu mereka bergerak di atas permukaan air."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'truk.png', 'truk.png', 'Truk', 'truk.mp3', "Truck adalah kendaraan berat yang digunakan untuk mengangkut barang. Mereka memiliki roda yang lebih banyak daripada mobil biasa dan bagian belakang yang dapat diangkat atau diturunkan untuk memuat atau membongkar barang. Truck sering digunakan untuk mengangkut barang-barang besar, seperti perabotan, bahan bangunan, atau bahkan mobil. Beberapa truck memiliki bak terbuka di bagian belakang, sementara yang lain memiliki struktur tertutup untuk melindungi barang-barang dari cuaca."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [2, 'roket.png', 'roket.png', 'Roket', 'roket.mp3', "Roket adalah kendaraan yang dirancang untuk meluncur ke luar angkasa. Mereka memiliki mesin yang kuat yang menggunakan bahan bakar untuk menghasilkan dorongan besar. Roket biasanya diluncurkan dari landasan atau peluncur khusus. Mereka dapat membawa satelit, pesawat luar angkasa, atau bahkan manusia ke luar angkasa. Roket memiliki tahapan yang bisa terpisah untuk meningkatkan efisiensi dan jangkauan penerbangan. Mereka mewakili sarana penting dalam eksplorasi luar angkasa dan penelitian ilmiah."]);

        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'pilot.png', 'pilot.png', 'Pilot', 'pilot.mp3', "Pilot adalah orang khusus yang bisa mengemudikan pesawat. Mereka adalah pahlawan yang membantu pesawat terbang dan membawa kita ke tempat-tempat yang jauh. Pilot memakai baju keren dan topi khusus ketika mereka bekerja. Mereka sangat pintar dan tahu bagaimana cara mengendalikan pesawat dengan aman. "]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'dokter.png', 'dokter.png', 'Dokter', 'dokter.mp3', "Dokter adalah seseorang yang sangat baik dan pintar yang membantu orang-orang merasa lebih baik saat mereka sakit. Mereka memakai jas putih dan seringkali memeriksa kita dengan stetoskop, alat yang bisa mendengarkan detak jantung kita. Dokter memberikan obat dan nasihat yang membantu tubuh kita sembuh. "]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'tentara.png', 'tentara.png', 'Tentara', 'tentara.mp3', "Tentara adalah pahlawan yang sangat kuat dan berani. Mereka memakai seragam khusus dan pelindung kepala saat mereka bekerja. Tentara melindungi negara kita dari bahaya dan membantu menjaga kita aman. Mereka bisa berjalan, berlari, atau bahkan mengendarai kendaraan keren seperti tank."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'guru.png', 'guru.png', 'Guru', 'guru.mp3', "Guru adalah teman yang sangat istimewa. Mereka datang ke sekolah setiap hari untuk mengajar kita banyak hal yang menarik. Guru selalu tersenyum dan membantu kita belajar membaca, menulis, dan berhitung. Mereka juga mengajar kita tentang dunia dan bagaimana menjadi orang yang baik."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'polisi.png', 'polisi.png', 'Polisi', 'polisi.mp3', "Polisi adalah pahlawan yang membantu menjaga kita aman di lingkungan kita. Mereka memakai seragam dengan topi keren dan memegang tongkat. Polisi bekerja di luar, di jalan-jalan, dan di sekitar kota untuk memastikan orang-orang berlalu lintas dengan aman."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'pengacara.png', 'pengacara.png', 'Pengacara', 'pengacara.mp3', "Pengacara adalah ahli hukum yang membantu orang-orang dalam memahami dan menavigasi sistem hukum. Mereka memiliki pengetahuan mendalam tentang hukum dan memberikan nasihat hukum kepada klien mereka. Pengacara juga mewakili klien mereka di pengadilan dan berusaha untuk mencapai keadilan. Mereka memakai jubah dan seringkali bekerja dalam kantor hukum."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'koki.png', 'koki.png', 'Koki', 'koki.mp3', "Koki adalah seniman kuliner yang ahli dalam memasak makanan lezat. Mereka bekerja di dapur dan menggunakan berbagai bahan makanan untuk menciptakan hidangan yang lezat dan menarik. Koki memiliki kreativitas tinggi dalam mencampur dan mencocokkan rasa, serta tahu cara menggunakan alat dapur dengan baik. Restoran, kafe, atau bahkan di rumah, koki membawa kelezatan kepada kita melalui kreasi masakan mereka."]);
        DB::statement('INSERT INTO materials (category_id, image, icon, name, audio, text) VALUES (?, ?, ?, ?, ?, ?)', [3, 'astronot.png', 'astronot.png', 'Astronot', 'astronot.mp3', "Astronot adalah penjelajah luar angkasa yang mengenakan pakaian luar angkasa khusus dan bekerja di pesawat luar angkasa. Mereka menjalani pelatihan khusus untuk bertahan di lingkungan luar angkasa dan melakukan penelitian ilmiah di luar bumi. Astronot berkontribusi pada eksplorasi luar angkasa dan memahami lebih banyak tentang alam semesta. Melihat bumi dari luar angkasa adalah salah satu pengalaman luar biasa yang dapat dimiliki astronot."]);

        // options

        // category 1
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [1, 1, 'Sapi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [1, 0, 'Kambing']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [1, 0, 'Ikan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [1, 0, 'Ayam']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [2, 1, 'Kelinci']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [2, 0, 'Sapi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [2, 0, 'Kucing']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [2, 0, 'Kuda']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [3, 1, 'Ayam']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [3, 0, 'Ikan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [3, 0, 'Kuda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [3, 0, 'Gajah']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [4, 1, 'Kambing']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [4, 0, 'Ikan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [4, 0, 'Ayam']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [4, 0, 'Kuda']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [5, 1, 'Gajah']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [5, 0, 'Sapi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [5, 0, 'Kelinci']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [5, 0, 'Ikan']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [6, 1, 'Rumput']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [6, 0, 'Daging']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [6, 0, 'Cacing']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [6, 0, 'Susu']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [7, 1, 'Wortel']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [7, 0, 'Nasi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [7, 0, 'Daging']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [7, 0, 'Rumput']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [8, 1, 'Susu']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [8, 0, 'Telur']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [8, 0, 'Air']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [8, 0, 'Pupuk']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [9, 1, 'Telur']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [9, 0, 'Susu']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [9, 0, 'Pupuk']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [9, 0, 'Air']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [10, 1, 'Air']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [10, 0, 'Darat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [10, 0, 'Udara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [10, 0, 'Semua']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [11, 1, 'Penghasil susu']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [11, 0, 'Penghasil sirup']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [11, 0, 'Penghasil minyak']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [11, 0, 'Penghasil air']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [12, 1, 'Benar']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [12, 0, 'Salah']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [12, 0, 'Tidak yakin']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [12, 0, 'Tidak tahu']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [13, 1, 'Kuda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [13, 0, 'Ikan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [13, 0, 'Ayam']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [13, 0, 'Kelinci']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [14, 1, 'Telinga']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [14, 0, 'Mata']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [14, 0, 'Kutu']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [14, 0, 'Ekor']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [15, 1, 'Melompat-lompat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [15, 0, 'Berlari-lari']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [15, 0, 'Berbincang-bincang']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [15, 0, 'Melambai-lambai']);

        // category 2
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [16, 1, 'Mobil']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [16, 0, 'Pesawat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [16, 0, 'Kapal']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [16, 0, 'Truk']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [17, 1, 'Pesawat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [17, 0, 'Sepeda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [17, 0, 'Roket']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [17, 0, 'Truk']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [18, 1, 'Kapal']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [18, 0, 'Motor']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [18, 0, 'Mobil']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [18, 0, 'Roket']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [19, 1, 'Truk']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [19, 0, 'Pesawat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [19, 0, 'Roket']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [19, 0, 'Kapal']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [20, 1, 'Kereta Api']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [20, 0, 'Motor']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [20, 0, 'Sepeda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [20, 0, 'Pesawat']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [21, 1, 'Luar Angkasa']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [21, 0, 'Daratan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [21, 0, 'Lautan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [21, 0, 'Hutan']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [22, 1, 'Laut']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [22, 0, 'Gunung']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [22, 0, 'Sungai']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [22, 0, 'Jalan Raya']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [23, 1, 'Penumpang']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [23, 0, 'Hewan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [23, 0, 'Tumbuhan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [23, 0, 'Barang']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [24, 1, '2 Roda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [24, 0, '4 Roda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [24, 0, '6 Roda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [24, 0, '8 Roda']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [25, 1, 'Barang']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [25, 0, 'Manusia']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [25, 0, 'Hewan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [25, 0, 'Tumbuhan']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [26, 1, 'Tenaga Manusia']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [26, 0, 'Listrik']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [26, 0, 'Bensin']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [26, 0, 'Angin']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [27, 1, 'Sayap dan Mesin']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [27, 0, 'Roda Gigi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [27, 0, 'Angin']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [27, 0, 'Bensin']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [28, 1, 'Membawa Barang']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [28, 0, 'Pertambangan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [28, 0, 'Pertanian']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [28, 0, 'Angkutan Umum']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [29, 1, 'Sayap']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [29, 0, 'Roda']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [29, 0, 'Mesin']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [29, 0, 'Kursi']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [30, 1, 'Stasiun Kereta']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [30, 0, 'Pelabuhan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [30, 0, 'Bandara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [30, 0, 'Terminal Bus']);

        // category 3
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [31, 1, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [31, 0, 'Guru']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [31, 0, 'Koki']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [31, 0, 'Dokter']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [32, 1, 'Koki']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [32, 0, 'Astronot']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [32, 0, 'Pelayan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [32, 0, 'Polisi']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [33, 1, 'Dokter']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [33, 0, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [33, 0, 'Pilot']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [33, 0, 'Koki']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [34, 1, 'Pilot']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [34, 0, 'Astronot']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [34, 0, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [34, 0, 'Koki']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [35, 1, 'Astronot']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [35, 0, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [35, 0, 'Guru']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [35, 0, 'Koki']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [36, 1, 'Mengajar']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [36, 0, 'Menyetir']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [36, 0, 'Memakan']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [36, 0, 'Mengamankan']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [37, 1, 'Arus Lalu Lintas']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [37, 0, 'Pesawat']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [37, 0, 'Negara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [37, 0, 'Rumah Tangga']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [38, 1, 'Mengamankan Negara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [38, 0, 'Menyanyi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [38, 0, 'Mengajar']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [38, 0, 'Berenang']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [39, 1, 'Guru']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [39, 0, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [39, 0, 'Koki']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [39, 0, 'Dokter']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [40, 1, 'Hukum']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [40, 0, 'Medis']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [40, 0, 'Pelajaran']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [40, 0, 'Negara']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [41, 1, 'Medis']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [41, 0, 'Hukum']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [41, 0, 'Lalu Lintas']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [41, 0, 'Negara']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [42, 1, 'Pengacara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [42, 0, 'Dokter']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [42, 0, 'Tentara']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [42, 0, 'Koki']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [43, 1, 'Kamuflase']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [43, 0, 'Polisi']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [43, 0, 'Guru']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [43, 0, 'Medis']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [44, 1, 'Keliling Dunia']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [44, 0, 'Mengajar']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [44, 0, 'Memasak']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [44, 0, 'Menyanyi']);

        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [45, 1, 'Luar Angkasa']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [45, 0, 'Rumah Teman']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [45, 0, 'Sekolah']);
        DB::statement('INSERT INTO options (question_id, is_correct, text) VALUES (?, ?, ?)', [45, 0, 'Taman']);
    }
}
