<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matieres extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->insert([
          // ['nom_matiere' => 'chimie',
          // 'niveau_matiere' => 'dut1-dst1',
          // 'semestres' => 'S1',
          // 'filiere_id'=> 1 
          // ],          
          // ['nom_matiere' => 'Biologie',
          // 'niveau_matiere' => 'dic1-licence',
          // 'semestres' => 'S1',
          // 'filiere_id'=> 1 
          // ], 
          // ['nom_matiere' => 'civil',
          // 'niveau_matiere' => 'dic2-master1',
          // 'semestres' => 'semestre2',
          // 'filiere_id'=> 4
          // ],
          // ['nom_matiere' => 'Biologie',
          // 'niveau_matiere' => 'dic1-licence',
          // 'semestres' => 'semestre2',
          // 'filiere_id'=> 3 
          // ],

          /* ---- dut1-dst1 info et RT */
          ['nom_matiere' => 'Algo1',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'SE',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Maths discret',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Logique',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Anglais',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'droit',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Economie',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Langage C',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Technique de recherche documentaire',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Archi des ordinateur',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Réseaux',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'initiation à l\'info',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Proba et Stat',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'SGBD',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Dev Web',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Analyse',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Archi des ordinateur',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 6 
          ],
          ['nom_matiere' => 'Algèbre',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Outils Math pour le Signal',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Analyse',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7 
          ],
          ['nom_matiere' => 'Physique',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Outil Analyse circuit linéaire',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Technique de recherche documentaire',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Anglais',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1-S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Iniation au métier',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Architecture des Ordinateurs',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Langage C',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Algo',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Concept généraux des Rx',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Signaux et Systemes',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S1',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Proba et Stat',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Intégral et Equation Diff',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Elément de Maths appliqués',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Ondes et Propagation',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Fonct d\'amplification',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'SGBD',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Rx Locaux',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'SE',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Princcipe des transmissions radio',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          ['nom_matiere' => 'Téléphonie d\'entreprise',
          'niveau_matiere' => 'dut1-dst1',
          'semestres' => 'S2',
          'filiere_id'=> 7
          ],
          /* Fin dut1-dst1 info et RT */

          /* ---- dut2-dst2 info et RT */
          ['nom_matiere' => 'Modélisation des Systèmes Infos',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Dev Web 2: PHP/MYSQL',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'POO: JAVA',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'SE',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Admin Système',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Statistique',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Recherche Op',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Gestion de Projet',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Gestion de l\'entreprise',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Environement Socio Economique de l\'entreprise',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Anglais',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Dev Mobil',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Tcpl',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Administration BD',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Insertion Professionnelle',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Veille Technologique',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Rapport de Stage',
          'niveau_matiere' => 'dut2-dst2',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          /* Fin dut2-dst2 info et RT */

          /*  Licence info et RT */
          ['nom_matiere' => 'Anglais',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Technique d\'expression',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Droit',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Proba et Stat',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Recherche Op',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Algo et structure de données',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Langage C',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'POO avancé',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'SE',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Admin Système',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Données semis structurées',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'SGBD',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Introduction au Génie Logiciel',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'UML',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S1',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Dev Web',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Dev Mobil',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Technologie de Sécurité',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Administration du Rx Local',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Bases de Données Nouvelle Génération',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Patrons de Conception et Tests Logiciels',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Ingénierie des Processus Logiciels',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Gestion de projets et Travail Coopératif',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Veille technologique',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ],
          ['nom_matiere' => 'Rapport de stage',
          'niveau_matiere' => 'dic1-licence',
          'semestres' => 'S2',
          'filiere_id'=> 6
          ]
        ]);
    }
}
