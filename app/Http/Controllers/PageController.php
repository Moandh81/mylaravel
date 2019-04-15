<?php

namespace App\Http\Controllers;

use App\Category;
use App\Livre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index() {
        return view('index');
    }


    public function getAjouterLivre() {
        $categories = Category::all();
        return view('ajouterlivre', compact('categories'));
    }

    public function getLivres() {
        $livres = Livre::paginate(4);
        //$livres = DB::table('livres')->select('id')->get();
        //dd($livres);

        return view("livres", compact('livres'));
    }


    public function postLivres(Request $request) {
        $data=$request->validate([
            'titre' => 'required | min:5',
            'auteur' => 'required',
            'description' =>'',
            'category_id' => "required"
        ]) ;

        //dd($request->all());

        Livre::create($data);

        //return redirect('/ajouter_livre');

        // redirection vers la meme page
        //return back() ;

        return redirect()->route('getLivres');


       // $auteur = $request->auteur ;
       // $titre = $request->titre ;
       // $description = $request->description ;

        //dd($auteur, $titre , $description ) ;


      //  $livre = new Livre;
       // $livre->titre = $request->titre ;
       // $livre->auteur = $request->auteur ;
       // $livre->description = $request->description ;
        // $livre->save();




    }

    public function getAfficherLivre($id)
    {

        // public function getAfficherLivre(Livre $livre) {


    //}

        // $livre = Livre::find($id) ;
        //$livre = Livre::where('id' , $id)->first() ;
        $livre = Livre::findOrFail($id) ;  // évite une levée d'exception quand l'id ne se trouve pas
        // deuxieme methode
        // $livre = Livre::whereTitre('php')->first();
        //return $livre  -> renvoier un résultat au format json

        return view('afficher_livre', compact('livre')) ;

    }


    public function getSupprimerLivre($id) {
        $livre = Livre::findOrFail($id);
        $livre->delete();
        return redirect('getLivres')->with('success', 'Votre page a été supprimée');
    }


    public function getModifierLivre($id) {
        $livre = Livre::findOrFail($id);
        return view('modifier_livre', compact('livre'));


    }

    public function postModifierLivre($id) {
        $data=request()->validate([

            'titre' => 'required | min:5',
            'auteur' => 'required',
            'description' =>''

        ]);
        $livre=Livre::findOrFail($id);
        $livre->update($data);

        return redirect()->route('getLivres')->with('success', 'Le livre a été modifié');

    }

    // commentaire ajouté


    public function getCategory($id){
        $category = Category::findOrFail($id);

        $livres = Livre::where('category_id', $id)->paginate(4);
        return view('livres', compact('livres'));
    }



    public function search_book(Request $request) {



     $data=$request->validate([
         "search" => 'required'
        ]) ;




     //$livres=DB::table('livres')->where('titre', 'like', '%'. $request->search .'%')->paginate(4);

     $livres = Livre::where('titre', 'like',  '%'.$data['search'].'%')->paginate(4);






        return view('livres', compact('livres'));

    }
}
