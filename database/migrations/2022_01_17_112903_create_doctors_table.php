<?php

use App\Models\Doctor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('designation');
            $table->timestamps();
        });

        Doctor::create([
            'name'                => 'Dr Mr. A',
            'phone'               => "0193456789",
            'address'             => 'Dhaka',
            'email'               => 'drmra@gmail.com',
            'designation'         => 'General Physician',
        ]);
        Doctor::create([
            'name' => 'Prof. Dr. AKM Sahid Ullah',
            'phone' => " 01711 005076",
            'address' => '16, Rankin Street, Wary, Dhaka',
            'email' => 'sahid @gmail.com',
            'designation' => 'Homeopathic Specialist '
        ]);
        Doctor::create([
            'name' => 'Dr. Eidris Ali',
            'phone' => " 01819476612 ",
            'address' => 'Krishi Market, Ring Road, Mohammadpur, Dhaka',
            'email' => 'eidris @gmail.com', 'designation' => 'Infertility Specialist (Homeopathy)',
        ]);
        Doctor::create([
            'name' => 'Dr. Aziza Parveen ',
            'phone' => " 01727035043",
            'address' => ' House # 15, Road # 34, Sector # 7, Uttara, Dhaka ',
            'email' => 'aziza@gmail.com',
            'designation' => 'Homeopathic Doctor & Consultant ',
        ]);
        Doctor::create([
            'name' => 'Dr. ABM Bazlul Hasan ',
            'phone' => " 01911500847 ",
            'address' => ' 198, Malibagh Bazar Road, Malibagh, Dhaka ',
            'email' => 'bazlul@gmail.com',
            'designation' => 'Homeopathic Doctor & Consultant ',
        ]);
        Doctor::create([
            'name' => 'Dr. Ruhul Amin ',
            'phone' => " 01627585412 ",
            'address' => ' House # 02, Road # 04, Mirpur 10, Roundabout,, Dhaka ',
            'email' => 'amin@gmail.com',
            'designation' => 'Piles, Asthma, Sex, Back Pain & Chronic Diseases Specialist '
        ]);
        Doctor::create([
            'name' => 'Dr. Md. Moniruzzaman ',
            'phone' => " 01521234793",
            'address' => 'Mirpur 14, Dhaka',
            'email' => 'moniruzzaman@gmail.com',
            'designation' => 'Skin, Asthma, Sex & Chronic Diseases Specialist '
        ]);
        Doctor::create([
            'name' => 'Dr. Hasanuzzaman ',
            'phone' => " 01727035044 ",
            'address' => ' House # 15, Road # 34, Sector # 7, Uttara, Dhaka ',
            'email' => 'hasanuzzaman@gmail.com',
            'designation' => ' Homeopathic Physician & Consultant '
        ]);
        Doctor::create([
            'name' => 'Dr. Momtaz Akter ',
            'phone' => " 01991508827 ",
            'address' => ' House # 02, Road # 04, Mirpur 10, Roundabout, Dhaka ',
            'email' => 'momtaz@gmail.com',
            'designation' => ' Child, Gynecology & Infertility Specialist (Homeopathy) '
        ]);
        Doctor::create([
            'name' => 'Dr. Nazmul Hasan Jamson ',
            'phone' => " 01713520172 ",
            'address' => ' 137/12, B-4, Priyangong R/A, Mazar Road, Mirpur 1, Dhaka ',
            'email' => 'jamson@gmail.com',
            'designation' => ' Homeopathic Doctor & Consultant '
        ]);
        Doctor::create([
            'name' => 'Dr. Md. Nazrul Islam Bhuiyan ',
            'phone' => " 01712293006 ",
            'address' => ' 24/3, Chamelibagh, Shantinagar, Dhaka ',
            'email' => 'nazrul@gmail.com',
            'designation' => ' Homeopathic Doctor & Consultant '
        ]);
        Doctor::create([
            'name' => 'Dr. Abdullah Al Mahmud Masud ',
            'phone' => "01711053748 ",
            'address' => '46/1, Toyenbi Circular Road, Joy Kalimondir, Dhaka ',
            'email' => 'masud@gmail.com',
            'designation' => ' Homeopathic Doctor & Consultant '
        ]);
        Doctor::create([
            'name' => 'Dr. Kazy Habibur Rahman',
            'phone' => "01738618894 ",
            'address' => '73, Jonaki Road, Ahmednagar, Paikpara, Mirpur-1, Dhaka - 1216 ',
            'email' => 'rahman@gmail.com',
            'designation' => 'General Homoeopathic Physician'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
