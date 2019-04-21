<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\valideRequest;
use App\Produit;
use App\Vente;
use App\Categorie;
use App\Societe;
class universController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	

	//accueil
    public function index()
    {
    	return view('univers.index');
    }

    //home de produit
    public function produith()
    {
    	$pr = Produit::where('supPro',NULL)->get();
    	return view('univers.produithome',['pro'=>$pr]);
	}
    //formulaire d'Ajoute un produit
    public function formproduitaj()
    {
    	 return view('univers.produitajt');
    }

    //ajouter produit
    public function produitstore(request $request)
    {
    	 	$p = new Produit();
            $p->libelle=$request->input('libelle');
            $p->qteR=$request->input('qte');
            $p->prixU=$request->input('prix');
            $p->categorie_id=$request->input('cat');
            $p->Save();
            return redirect('mzd/produithome');
    }

    //supprimer produit
    public function produitdestroy(request $request,$id)
    {
        $pr = Produit::find($id);
        $pr->supPro = 1;
        $pr->save();
        return redirect('mzd/produithome');
    }


    //modifier produit
    public function produitafficheedit($id)
    {
        $pr = Produit::find($id);
        return view('univers.produitedit',['p'=>$pr]);
    }

    public function updateproduit(request $request,$id)
    {
         if($p->qteR < $request->input('qtev') || $p->qteR <1 || $vnt->qteV == NULL)
        {
            session()->flash('session1','Toutes les champs sont obligatoires');
            return redirect('mzd/venteaj');   
        }else
        {
             $pr = Produit::find($id);
             $pr->libelle = $request->input('libelle');
             $pr->qteR = $request->input('qte');
             $pr->categorie_id = $request->input('cat');
             $pr->prixU = $request->input('prix');
             $pr->Save();
        return redirect('mzd/produithome');
        }
       
    }
    //-------------------------------------------------------------------------
     //home de vente
    public function ventemenu()
    {
        return view('univers.ventemenu');
    }

    //afficher ajoute vente
    public function venteaj()
    {
        $pr = Produit::where('supPro',NULL)->get();
        return view('univers.venteaj',['pro'=>$pr]);
    }

    //faire vente
    public function ventefaire(request $request,$id)
    {
        
        $p = Produit::find($id);
        $vnt = new Vente();
        if($p->qteR < $request->input('qtev') || $p->qteR <1 || $vnt->qteV == NULL)
        {
            session()->flash('session1','Quantite non disponible');
            return redirect('mzd/venteaj');   
        }else
        {
            $vnt->produit_id = $id;
            $vnt->qteV = $request->input('qtev');
            $vnt->prixT = $p->prixU * $request->input('qtev');
            $p->qteR =  $p->qteR - $request->input('qtev');
            $p->Save();
            $vnt->Save();
            session()->flash('session1','Vendu');
            return redirect('mzd/ventelist');
        }
        
    }
    //vente list 
    public function ventelist()
    {
        $vente = Vente::orderBy('created_at','DESC')->get();
        return view('univers.ventelist',['pro'=>$vente]);
    }
    //-------------------------------------------------------categorie--------

    //liste de categorie
    public function categoriehome()
    {
        $cat = Categorie::all();
        return view('univers.categoriehome',['pro'=>$cat]);
    }
    //formulaire d'Ajoute categorie
    public function categorieformaj()
    {
         return view('univers.categorieformaj');
    }
    //categorie affect ajt
                    
    public function categorieaffectajt(request $quest)
    {
            $cat = new Categorie();
            $cat->libelle=$quest->input('libelle');
            $cat->Save();
            session()->flash('session1','Categorie ajouter');
            return redirect('mzd/categoriehome');
    }
    //supprimer categorie
    /*public function categoriedestroy($id)
    {
        $cat = Categorie::find($id);
        $cat->delete();
        session()->flash('session1','Categorie supprimer');
        return redirect('mzd/categoriehome');
    }*/
    //redirection vers le formulaire de modification
    public function categorieafficheedit($id)
    {
        $cat = Categorie::find($id);
        return view('univers.categorieedit',['p'=>$cat]);
    }
    //edit categorie affect
    public function updatecategorie(request $request,$id)
    {
        $cat = Categorie::find($id);
        $cat->libelle = $request->input('libelle');
        $cat->Save();
        session()->flash('session1','Categorie Modifier');
        return redirect('mzd/categoriehome');
    }
//----------------------------------------------------------------
    //affiche ste list
    public function societehome()
    {
        $ste = Societe::all();
        return view('univers.societehome',['pro'=>$ste]);
    }
    //ajoute societe
    public function societeajt()
    {
         return view('univers.societeajt');
    }
    //affect ajt
    public function steaffectajt(request $quest)
    {
            $ste = new Societe();
            $ste->nomsociete=$quest->input('nm');
            $ste->adresse=$quest->input('adresse');
            $ste->tele=$quest->input('tel');
            $ste->Save();
            session()->flash('session1','Societe ajouter');
            return redirect('mzd/societehome');
    }
    //affiche formulaire de modification
    public function stemodifierform($id)
    {
        $ste = Societe::find($id);
        return view('univers.societemodifier',['p'=>$ste]);
    }
    //affecte update produit
    public function updateste(request $request,$id)
    {
        $ste = Societe::find($id);
        $ste->nomsociete = $request->input('nm');
        $ste->adresse = $request->input('adresse');
        $ste->tele = $request->input('tel');
        $ste->Save();
        session()->flash('session1','Societe Modifier');
        return redirect('mzd/societehome');
    }
    //--------------------------------------------------------------------
    //affiche ste list
    

}
