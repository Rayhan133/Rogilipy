<?php

use App\Models\Medicine;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('disease')->nullable();
            $table->timestamps();
        });

        Medicine::create([
            'name'        => 'Aconitum Napellus',
            'description' => '6/200/1M',
            'disease'     => 'collapse, restless, irregular beats, rheumatic fevers',
        ]);
        Medicine::create([
            'name'        => 'Diclofenac',
            'description' => '200',
            'disease'     => 'lower bowel, producing engorged haemorrhoidal venis, with characteristic backache, with absence of actual constipation,whooping cough',
        ]);
        Medicine::create([
            'name'        => 'Apocynum cannabinum',
            'description' => '30/200',
            'disease'     => 'Ascites, anasarca, hydrothorax and urinary troubles, specially suppression and strangury',
        ]);
        Medicine::create([
            'name'        => 'Avena sativa',
            'description' => '30',
            'disease'     => 'tremors of the aged; chorea, paralysis agitans, epilepsy, Post-diphtheritic paralysis',
        ]);
        Medicine::create([
            'name'        => 'Badiaga',
            'description' => '30/200',
            'disease'     => 'Soreness of muscles, integuments, worse motion and friction of clothes, sensitiveness cold, gland swollen, general paresis, thick yellow cough',
        ]);
        Medicine::create([
            'name'        => 'Baptisia tinctoria',
            'description' => '30',
            'disease'     => 'Simulating low fevers, septic conditions of the blood, malarial poisoning, extreme prostration, indescribable sick feeling, great muscular soreness',
        ]);
        Medicine::create([
            'name'        => 'Belladonna',
            'description' => '30',
            'disease'     => 'Producing active congestion, furious excitement, perverted special senses, twitching, convulsion and pain',
        ]);
        Medicine::create([
            'name'        => 'Bellis perennis',
            'description' => '30',
            'disease'     => 'Muscular fibres of the blood vessels, Much muscular soreness. Lameness as if sprained. Venous congestion, remedy in injuries, deeper tissues, after major surgical work',
        ]);
        Medicine::create([
            'name'        => 'Berberis vulgaris',
            'description' => '30/200',
            'disease'     => 'Hepatic and rheumatic affections, particularly with urinary, haemorrhoidal and menstrual complaints, pain in the region of kidney is most marked',
        ]);
        Medicine::create([
            'name'        => 'Blatta orientalis',
            'description' => '30',
            'disease'     => 'Asthma, bronchitis, it is indicated after arsenic when this is insufficient',
        ]);
        Medicine::create([
            'name'        => 'Bryonia alba',
            'description' => '30',
            'disease'     => 'Stools large, dry, hard, dry cough, rheumatic pain and swellings',
        ]);
        Medicine::create([
            'name'        => 'Cactus grandiflorus',
            'description' => '30',
            'disease'     => 'Haemorrhage, constrictions, periodicity and spasmodic pains',
        ]);
        Medicine::create([
            'name'        => 'Calendula officinalis',
            'description' => '30/200',
            'disease'     => 'All wounds, healing agent, leucorrhoea, burns, sores fissures, abrasions',
        ]);
        Medicine::create([
            'name'        => 'Cannabis indica',
            'description' => '6/30/',
            'disease'     => 'Nervous disorders like epilepsy, dementia, delirium tremens, and irritable reflexes',
        ]);
        Medicine::create([
            'name'        => 'Cannabis sativa',
            'description' => '6/30/200',
            'disease'     => 'Intoxicant, stomachic, antispasmodic, analgesic, narcotic, sedative and anodyne',
        ]);
        Medicine::create([
            'name'        => 'Cantharis',
            'description' => '30/200/1M',
            'disease'     => 'Gastric derangements of pregnancy, dysuria with other complaints, increases secretion of mucous membranes and tenacious mucus',
        ]);
        Medicine::create([
            'name'        => 'Gelsemium sempervirens',
            'description' => '6/30/200/1M',
            'disease'     => 'Action upon the nervous system, causing various degrees of motor paralysis, dizziness, drowsiness, dullness and trembling, paralysis of various groups of muscles about the eyes, throat, chest, larynx, sphincter, extremities',
        ]);
        Medicine::create([
            'name'        => 'Geranium maculatum',
            'description' => '6',
            'disease'     => 'Vomiting of blood, ulceration of stomach, atonic and foul ulcers, habitual sick headaches',
        ]);
        Medicine::create([
            'name'        => 'Helleborus niger',
            'description' => '6/30/',
            'disease'     => 'General muscular weakness, which may go on to complete paralysis, accompanied by dropsical effusions, rhizome is cathartic, emmenagogue, anthelmentic, apoplexy and skin diseases',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
