<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Funcionario;
use App\Funcao;
use App\Status;
use App\StatusAluno;
use App\EstadoCivil;
use App\Professor;
use App\Aluno;
use App\Titulo;
use App\Curso;
use App\Calendario;
use Config;
use DB;
use Image;

class AdminController extends Controller
{	

    public function teste() 
    { 	
  
    }

    public function foto() 
    {    
        
        $this->validate(request(),[ 

            'foto' => 'nullable|image|max:20480',

        ]);   

        $img = Image::make(request('foto'))->resize(354, 472)->encode('data-url');
        
        $aluno = Aluno::find(1);

        $aluno->foto = $img;

        $aluno->save();

       return redirect('/teste');
    }

	//Funcionarios
    public function cadastrarFuncionario() 
    { 	
    	$funcoes = Funcao::all();

    	return view('layouts.admin.admin-cadastrarFuncionario', compact('funcoes'));
    }

	public function funcionarios() 
	{ 	
		$funcionarios = Funcionario::orderBy('nome', 'ASC')->paginate(25);

		return view('layouts.admin.admin-funcionarios', compact('funcionarios'));
	}

	public function funcionario(Funcionario $funcionario) 
	{	
		return view('layouts.admin.admin-funcionario', compact('funcionario'));
	}

	public function buscaFuncionario() 
	{	
		$busca = request('busca');

		$funcionarios = Funcionario::where('nome','LIKE',"%{$busca}%")
						->orWhere('sobrenome','LIKE',"%{$busca}%")->get();
			
		return view('layouts.admin.admin-funcionariosResultado', compact('funcionarios'));
	}

	public function editarFuncionario(Funcionario $funcionario) 
	{	
		$funcoes = Funcao::all();

		$status = Status::all();

		$estado_civil = EstadoCivil::all();

		return view('layouts.admin.admin-editarFuncionario', compact('funcionario','funcoes','estado_civil','status'));
	}
	
	//Professores
    public function cadastrarProfessor() 
    { 	
    	$titulo = Titulo::all();

    	return view('layouts.admin.admin-cadastrarProfessor', compact('titulos'));
    }

	public function professores() 
	{ 	
		$professores = Professor::orderBy('nome', 'ASC')->paginate(25);

		return view('layouts.admin.admin-professores', compact('professores'));
	}

	public function professor(Professor $professor) 
	{	
		return view('layouts.admin.admin-professor', compact('professor'));
	}

	public function buscaProfessor() 
	{	
		$busca = request('busca');

		$professores = Professor::where('nome','LIKE',"%{$busca}%")
						->orWhere('sobrenome','LIKE',"%{$busca}%")->get();
			
		return view('layouts.admin.admin-professoresResultado', compact('professores'));
	}

	public function editarProfessor(Professor $professor) 
	{	
		$titulos = Titulo::all();

		$status = Status::all();

		$estado_civil = EstadoCivil::all();

		return view('layouts.admin.admin-editarProfessor', compact('professor','estado_civil','titulos','status'));
	}

	//Alunos
  	public function cadastrarAluno() 
   { 	
   	$cursos = Curso::orderBy('nome', 'ASC')->get();

   	return view('layouts.admin.admin-cadastrarAluno',compact('cursos'));
   }

   	public function alunos() 
   	{ 	
   		$alunos = Aluno::orderBy('nome', 'ASC')->paginate(25);

   		return view('layouts.admin.admin-alunos', compact('alunos'));
   	}

   	public function aluno(Aluno $aluno) 
   	{	
   		return view('layouts.admin.admin-aluno', compact('aluno'));
   	}

   	public function buscaAluno() 
   	{		
   		$busca = request('busca');

   		$alunos = Aluno::where('nome','LIKE',"%{$busca}%")
   						->orWhere('sobrenome','LIKE',"%{$busca}%")->get();
   			
   		return view('layouts.admin.admin-alunosResultado', compact('alunos'));
   	}

   	public function editarAluno(Aluno $aluno) 
   	{	
   		$status = StatusAluno::all();

   		$cursos = Curso::orderBy('nome', 'ASC')->get();
   		
   		$estado_civil = EstadoCivil::all();

   		return view('layouts.admin.admin-editarAluno', compact('aluno','estado_civil','cursos','status'));
   	}

    public function ferramentas() 
    {  
        return view('layouts.admin.admin-ferramentas');
    }
}
