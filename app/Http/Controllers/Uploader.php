<?php


namespace App\Http\Controllers;

use App\Models\departements;
use App\Models\filieres;
use App\Models\matieres;
use App\Models\tmp_fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\ElasticsearchHandler;

class Uploader extends Controller
{

     public function index()
     {
          $departements = DB::table('departements')->get();
          return view('upload', compact('departements'));
     }


    public function store(Request $request)
    {
     // ini_set('post_max_size','100M');
     // ini_set('upload_max_filesize','100M');
               // $departements = DB::table('departements')->get();
               $departements = departements::create([
                    'nom' => $request->departement
               ]);
               $filieres = filieres::create([
                    'intitule' => strtolower($request->filieres),
                    'departement_id' => $departements->id
               ]);
               $matieres = matieres::create([
                    'nom_matiere' => strtolower($request->matieres), 
                    'niveau_matiere' => $request->niveaux, 
                    'semestres' => $request->semestres,
                    'filiere_id' => $filieres->id 
               ]);
               // dd($filieres, $departements, $matieres);
               if (request()->hasFile('fichier'))
               {
                    // dd($request->fichier);
                    $date_courante = date('Y-m-d H:i:s');
                    $extenFileUpload = $request->fichier->getClientOriginalExtension();
                    $sizeFileUpload = $request->fichier->getSize();
                    $nameFileUpload = $request->fichier->getClientOriginalName();

                    // $extensions = array('pdf', 'PDF', 'zip', 'ZIP');

                    try
                    {
                         if($extenFileUpload == 'pdf' || $extenFileUpload == 'PDF' || $extenFileUpload == 'zip' || $extenFileUpload == 'ZIP' || $extenFileUpload == 'png' || $extenFileUpload == 'PNG' || $extenFileUpload == 'jpg' || $extenFileUpload == 'JPG' || $extenFileUpload == 'jpeg' || $extenFileUpload == 'jpeg')
                         {
                              // conndition pour uploader un fichier
                                  if($sizeFileUpload <= 4000000)
                                  {
                                   //     $fileName = time().'.'.$extenFileUpload;
                                       $request->fichier->move('myhintesp_public_doc_tmp', $nameFileUpload);
                                   //     $request->fichier->move('myhintesp_public_doc', $fileName);
                                        //  requête insertion d'un fichier dans la base de donnée
                                        // DB::table('tmp_fichiers')->insert([
                                        //      'tmp_url_fichier' => $fileName,
                                        //      'tmp_nom_fichier' => strtolower($nameFileUpload),
                                        //      'tmp_size_fichier' => $sizeFileUpload,
                                        //      'valider' => 0,
                                        //      // 'user_id' => $request->user()->id,
                                        //      'matiere_id' => $matieres->id,
                                        //      'created_at' => $date_courante,
                                        // ]);
                                        $tmp_fichiers= tmp_fichiers::create([
                                             'tmp_url_fichier' => $nameFileUpload,
                                             'tmp_nom_fichier' => strtolower($nameFileUpload),
                                             'tmp_size_fichier' => $sizeFileUpload,
                                             'valider' => 0,
                                             // 'user_id' => $request->user()->id,
                                             'matiere_id' => $matieres->id,
                                             'created_at' => $date_courante,
                                        ]);

                                        session()->flash('message_succes', 'fichier uploader avec succé, il sera valider par les admins. Merci de vôtre passage!');
                                        return view('upload', compact('departements'));
                                  }
                                  else
                                  {
                                        session()->flash('message_danger', 'La taille de ce fichier n\'est pas autorisée . '); // affichage de message d'erreur
                                        return view('upload', compact('departements'));
                                        // return redirect()->back();
                                  }


                         }
                         else
                         {
                          session()->flash('message_danger', 'Seules les extensions \'zip\', \'pdf\', \'png\' et \'jpg\'   sont autorisées ! '); // affichage de message d'erreur
                          return redirect()->back();
                         }

                    }
                    catch(\Exception $exception)
                    {
                         return 'Oups !! ceci est une erreur qui peut être liée à la taille du fichier que vous essayer d\'uploader.....';
                    }

               }
               else
               {

                    return view('upload', compact('departements'));
               }
               
    }
// fonction concernant le dropdown menu
//     public function getfiliere($id)
//     {
//                $filieres = DB::table('filieres')->where('departement_id', $id)->get();
//                return  response()->json($filieres);
//     }

//     public function getmatiere($id)
//     {
//                $matieres = DB::table('matieres')->where('filiere_id', $id)->get();
//                return  response()->json($matieres);
//     }
}
