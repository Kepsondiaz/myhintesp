<?php


namespace App\Http\Controllers;



use App\Models\fichiers;
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
               $departements = DB::table('departements')->get();

               if (request()->hasFile('fichier'))
               {
                    // dd($request->fichier);
                    $date_courante = date('Y-m-d H:i:s');
                    $extenFileUpload = $request->fichier->getClientOriginalExtension();
                    $sizeFileUpload = $request->fichier->getSize();
                    $nameFileUpload = $request->fichier->getClientOriginalName();
                    dd($nameFileUpload);

                    // $extensions = array('pdf', 'PDF', 'zip', 'ZIP');

                    try
                    {
                         if($extenFileUpload == 'pdf' || $extenFileUpload == 'PDF' || $extenFileUpload == 'zip' || $extenFileUpload == 'ZIP')
                         {
                              // conndition pour uploader un fichier
                                  if($sizeFileUpload < 5000000)
                                  {
                                       $fileName = time().'.'.$extenFileUpload;
                                       $request->fichier->move('myhintesp_public_doc', $fileName);
                                        //  requête insertion d'un fichier dans la base de donnée
                                        DB::table('fichiers')->insert([
                                             'url_fichier' => $fileName,
                                             'nom_fichier' => $nameFileUpload,
                                             'size_fichier' => $sizeFileUpload,
                                             'user_id' => $request->user()->id,
                                             'matiere_id' => $request->matieres,
                                             'created_at' => $date_courante,
                                        ]);

                                        session()->flash('message_succes', 'fichier uploader avec succé !');
                                        return view('upload', compact('departements'));
                                  }
                                  else
                                  {
                                        session()->flash('message_danger', 'La taille de ce fichier n\'est pas autorisée ! '); // affichage de message d'erreur
                                        return view('upload', compact('departements'));
                                        // return redirect()->back();
                                  }


                         }
                         else
                         {
                          session()->flash('message_danger', 'Seules les extensions \'zip\' ou \'pdf\' sont autorisées ! '); // affichage de message d'erreur
                          return redirect()->back();
                         }

                    }
                    catch(\Exception $exception)
                    {
                         return " Erreur de Chargement";
                    }

               }
               else
               {

                    return view('upload', compact('departements'));
               }
               
    }
    // fonction concernant le dropdown menu
    public function getfiliere($id)
    {
               $filieres = DB::table('filieres')->where('departement_id', $id)->get();
               return  response()->json($filieres);
    }

    public function getmatiere($id)
    {
               $matieres = DB::table('matieres')->where('filiere_id', $id)->get();
               return  response()->json($matieres);
    }
}
