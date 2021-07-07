<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Parrainage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{  
    protected $parrain = null;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->parrain = new Parrainage();
    }
    
    public function show_login_form()
    {
        return view('auth.login');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('username',$request->name)->first();

        if(auth()->attempt($credentials)) {

            return redirect()->route('offre');

        }else{
           // session()->flash('message', 'Informations de connexion invalides !');
           // return redirect()->back();
             return redirect()->route('login')->with('error', "Informations de connexion invalides !");
        }
    }
   public function show_signup_form()

    {
        $data['parrain']=  "";
        return view('auth.register',$data);
    }

    public function show_signup_form2($parrain=false)

    {
        $data['parrain']=  "";
        if($parrain != false)
        {
            $data['parrain'] = $parrain;
        }

        return view('auth.register',$data);
    }
    public function process_signup(Request $request)
    {   
        if(email_exist(strtolower($request->input('email'))))
            return redirect()->route('register')->with('error', "Email ".$request->input('email')." existe déjà !");
        if(username_exist(trim($request->input('username'))))
            return redirect()->route('register')->with('error', "Le nom d'utilisataur ".$request->input('username')." existe déjà !");
        if(strcmp($request->input('password'), $request->input('password_confirmation'))!= 0)
            return redirect()->route('register')->with('error', "Les deux mots de passe ne correspondent pas !");
        if($request->input('pays')=="0")
            return redirect()->route('register')->with('error', "Selectionner votre pays !");

       $valide = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

       if($valide){
            $data = [
            'name' => trim($request->input('name')),
            'username' => trim($request->input('username')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
            'pays' => $request->input('pays'),
            'solde' => 0,
            'statut' => 1,
            'links' =>  url("parrain/".trim($request->input('username'))),
        ];

        

        if(str_not_null($request->input('tel'))){
            $data['tel'] = trim($request->input('tel'));
        }
        $user = User::create($data); 
        if(str_not_null($request->input('parrain'))){
            $referent = username_exist(trim($request->input('parrain')));

            if($referent){
                 //$p = new Parrainage();
                 Parrainage::create(['id_user_parrain'=> $referent->id,'id_user_filleul'=> $user->id]);
                 User::where('id',$user->id)->update(['referent' => trim($request->input('parrain'))]); 

            }
        }      
        return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès !');
        }else{
            return redirect()->route('register')->with('error', 'Renseignez tous les champs obligatoires (*)');
        }
        
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
