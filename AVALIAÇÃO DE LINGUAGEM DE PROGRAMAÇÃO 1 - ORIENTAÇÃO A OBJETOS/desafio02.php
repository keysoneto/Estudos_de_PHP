<? php

class arma
{
    private  $ tipo ;
    private  $ ident ;


     função  pública __construct ( $ tipo , $ ident )
    {
        $ this -> tipo = $ tipo ;
        $ this -> ident = $ ident ;
    }
    public  function  getIdent ()
    {
        return  $ this -> ident ;
    }

     função  pública setIdent ( $ ident )
    {
        $ this -> ident = $ ident ;

    }

    public  function  getTipo ()
    {
        return  $ this -> tipo ;
    }

    public  function  setTipo ( $ tipo )
    {
        $ this -> tipo = $ tipo ;

    }

    function  MostrarDados () {
        echo  '<br> -----------------------' . get_class ( $ this ). '----------------------- <br>
        <h4> ' . htmlspecialchars ( $ this -> tipo ). '</h4>
        <p> ID: ' . htmlspecialchars ( $ this -> ident ). '</p> <br>
              -------------------------------------------------- ------ <br> ' ;
    }
}
class  Crime
{
    private  $ identificacao ;
    private  $ Local ;
    private  $ descricao ;
    private  $ Data ;
    privado  $ Hora ;
    private  $ Criminoso ;
    privado  $ Vitima ;
    privado  $ Arma ;

     função  pública __construct ( $ id , $ local , $ descricao , $ Data , $ Hora , $ Criminoso , $ Vitima , $ Arma )
    {
        $ this -> identificacao = $ id ;
        $ this -> Local = $ local ;
        $ this -> descricao = $ descricao ;
        $ this -> Dados = $ Dados ;
        $ this -> Hora = $ Hora ;
        $ this -> Criminoso = $ Criminoso ;
        $ this -> Vitima = $ Vitima ;
        if ( vazio ( $ Arma )) {
            $ this -> Arma = nova  Arma ( 'Nenhuma' , '' );
        } else {
            $ this -> Arma = $ Arma ;
        }

    }


    public  function  getIdentificacao ()
    {
        return  $ this -> identificacao ;
    }

    public  function  getLocal ()
    {
        return  $ this -> Local ;
    }

    public  function  setLocal ( $ Local )
    {
        $ this -> Local = $ Local ;

        return  $ this ;
    }

    public  function  getDescricao ()
    {
        return  $ this -> descricao ;
    }

    public  function  getData ()
    {
        return  $ this -> Data ;
    }

    public  function  getHora ()
    {
        return  $ this -> Hora ;
    }
    public  function  getNomeCriminoso ()
    {
        return  $ this -> Criminoso -> getNome ();
    }

    público  função  CompareVitima ( $ Vítima )
    {
        if ( $ this -> Vitima == $ Vitima )
        {
            return  true ;
        }
        outro
        {
            return  false ;
        }
    }
}
     função  pública CompareCriminoso ( $ Criminoso )
    {
        if ( $ this -> Criminoso == $ Criminoso )
        {
            return  true ;
        }
        outro
        {
            return  false ;
        }
    }

    public  function  getArma ()
    {
        return  $ this -> Arma ;
    }
    function  MostrarDadosCrime () {
        echo  '<br> -----------------------' . get_class ( $ this ). '----------------------- <br>
        <h4> ' . htmlspecialchars ( $ this -> descricao ). '</h4>
        <p> ID: ' . htmlspecialchars ( $ this -> identificacao ). '</p>
        <p> Dados: ' . htmlspecialchars ( $ this -> Dados ). '</p>
        <p> Hora: ' . htmlspecialchars ( $ this -> Hora ). '</p>
        <p> Local: ' . htmlspecialchars ( $ this -> Local ). '</p>
        <p> Criminoso: ' . htmlspecialchars ( $ this -> Criminoso -> getNome ()). '</p>
        <p> Vitima: ' . htmlspecialchars ( $ this -> Vitima -> getNome ()). '</p>
        <p> Arma: ' . htmlspecialchars ( $ this -> Arma -> getTipo ()). '</p> <br>
              -------------------------------------------------- ------ <br> ' ;
    }
classe  Criminoso  extends  Pessoa {
    public  function  CrimesCometidos ( $ Crimes ) {
        echo  '<table> <caption> Criminoso:' . $ this -> nome . '</caption>
        <tr> <th colspan = "6"> Crimes Cometidos </th> </tr>
        <tr><th>ID</th><th>Data</th><th>Hora</th><th>Local</th><th>Descrição</th> <th> Arma </ th > </tr> ' ;
        foreach ( $ Crimes  as  $ crime ) {
            if ( $ crime -> CompareCriminoso ( $ this )) {
                echo  '<tr>
                    <td> ' . htmlspecialchars ( $ crime -> getIdentificacao ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getData ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getHora ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getLocal ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getDescricao ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getArma () -> getTipo ()). '</td>
                    </tr> ' ;
            }
        }
        echo  '</table>' ;
    }
classe  abstrata Pessoa {
    protegido  $ nome ;
    protegido  $ cpf ;
    protegido  $ endereco ;
    protegido  $ telefone ;

     função  pública __construir ( $ cpf , $ nome , $ endereco , $ telefone )
    {
        $ this -> cpf = $ cpf ;
        $ this -> nome = $ nome ;
        $ this -> endereco = $ endereco ;
        $ this -> telefone = $ telefone ;
    }
    public  function  getEndereco ()
    {
        return  $ this -> endereco ;
    }

    public  function  setEndereco ( $ endereco )
    {
        $ this -> endereco = $ endereco ;

    }

    public  function  getCpf ()
    {
        return  $ this -> cpf ;
    }

    public  function  setCpf ( $ cpf )
    {
        $ this -> cpf = $ cpf ;
    }

    public  function  getNome ()
    {
        return  $ this -> nome ;
    }


    public  function  setNome ( $ nome )
    {
        $ this -> nome = $ nome ;
    }

     função  pública setTelefone ( $ telefone )
    {
        $ this -> telefone = $ telefone ;

    }

    public  function  getTelefone ()
    {
        retornar  $ este -> telefone ;
    }

    function  MostrarDados () {
        echo  '<br> -----------------------' . get_class ( $ this ). '----------------------- <br>
        <h4> ' . htmlspecialchars ( $ this -> nome ). '</h4>
        <p> CPF: ' . htmlspecialchars ( $ this -> cpf ). '</p>
        <p> Endereço: ' . htmlspecialchars ( $ this -> endereco ). '</p>
        <p> Telefone: ' . htmlspecialchars ( $ this -> telefone ). '</p> <br>
              -------------------------------------------------- ------ <br> ' ;
    }
classe  Vitima  extends  Pessoa {
    public  function  CrimesSofridos ( $ Crimes ) {
        echo  '<table> <caption> Vitima:' . $ this -> nome . '</caption>
        <tr> <th colspan = "6"> Crimes Sofridos </th> </tr>
        <tr><th>Data</th><th>Hora</th><th>Local</th><th>Descrição</th><th>Arma</th> <th> Criminoso </ th > </tr> ' ;
        foreach ( $ Crimes  as  $ crime ) {
            if ( $ crime -> CompareVitima ( $ this )) {
                echo  '<tr>
                    <td> ' . htmlspecialchars ( $ crime -> getData ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getHora ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getLocal ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getDescricao ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getArma () -> getTipo ()). '</td>
                    <td> ' . htmlspecialchars ( $ crime -> getNomeCriminoso ()). '</td>
                    </tr> ' ;
            }
        }
        echo  '</table>' ;
    }
}
}
<! DOCTYPE html >
< html  lang = " pt-BR " >

< cabeça >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < title > Desafio 2 </ title >
    < estilo >
    mesa {
        largura mínima : 800 px ;
        altura mínima : 250 px ;
        colapso da fronteira : colapso;
        borda : 2 px totalmente preto;
    }

    th ,
    td {
        preenchimento : 2 px ;
        alinhamento de texto : centro;
        borda : 1 px totalmente preto;
        altura mínima : 100 px ;
    }
    </ estilo >
</ head >

< corpo >
    < h1 > Desafio 2 </ h1 >
    <? php
        require_once  './Pessoa.php' ;
        require_once  './Criminoso.php' ;
        require_once  './Vitima.php' ;
        require_once  './Arma.php' ;
        require_once  './Crime.php' ;

        // Array de Vitimas, Criminosos, Crimes e Armas
        $ Criminosos = array ();
        $ Vitimas = array ();
        $ Armas = array ();
        $ Crimes = array ();


        // Criando Objetos da Classe Criminoso e Vitima e passando para uma array que tem como chave o CPF
        // $ Criminosos ['CPF'] = novo Criminoso ('CPF', 'NOME', 'ENDEREÇO', 'TELEFONE');
        $ Criminosos [ '06333334177' ] = novo  Criminoso ( '06333334177' , 'Pedro Rocha' , 'Cimba' , '63992145878' );
        $ Criminosos [ '03214568749' ] = novo  Criminoso ( '03214568749' , 'Luiz Carlos' , 'Cimba' , '63992458796' );
        // $ Vitimas ['CPF'] = novo Vitima ('CPF', 'NOME', 'ENDEREÇO', 'TELEFONE');
        $ Vitimas [ '02031254788' ] = novo  Vitima ( '02031254788' , 'Higor Pires' , 'Av. Guaiba, Araguaína Sul' , '639922337469' );
        $ Vitimas [ '03265897455' ] = novo  Vitima ( '03265897455' , 'Cris Vitoria' , 'Centro' , '63992415698' );
        // Criando Objetos da Classe Arma e passando para uma array que tem como chave o ID
        // $ Armas ['ID'] = novo Arma ('TIPO', 'ID');
        $ Armas [ '00001' ] = nova  Arma ( 'Revólver' , '00001' );
        $ Armas [ '00002' ] = nova  Arma ( 'Faca' , '00002' );
        $ Armas [ '00003' ] = nova  Arma ( 'Faca' , '00003' );

        // Adicionando Objetos da Classe Crime à array que contem todos os crimes (ID está auto_incrementando)
        // Criminosos e Vitimas estão sendo passados ​​a partir do CPF que são as chaves das matrizes $$ Criminosos e $ Vitimas e a Arma está sendo passado a partir do id
        // array_push ($ Crimes, new Crime (count ($ Crimes), 'LOCAL', 'DESCRIÇÃO', 'DATA', 'HORA', $ Criminosos ['CPF'], $ Vitimas ['CPF'], $ Armas ['EU IRIA']));
        array_push ( $ Crimes , novo  Crime ( contagem ( $ Crimes ), 'Araguaína Sul' , 'Assalto a mão armada' , '15 -02-2020 ' , '15: 30' , $ Criminosos [ '06333334177' ], $ Vitimas [ '02031254788' ], $ Armas [ '00001' ]));
        array_push ( $ Crimes , new  Crime ( count ( $ Crimes ), 'Cimba' , 'Tentativa de homicidio' , '15 -07-2020 ' , '19: 30' , $ Criminosos [ '03214568749' ], $ Vitimas [ ' 03265897455 ' ], $ Armas [ ' 00002 ' ]));
        array_push ( $ Crimes , new  Crime ( count ( $ Crimes ), 'Centro' , 'Roubo' , '20 -03-2020 ' , '09: 50' , $ Criminosos [ '03214568749' ], $ Vitimas [ '02031254788' ], $ Armas [ '00003' ]));

        function  MostrarTodosCrimes ( $ Crimes ) {
            foreach ( $ Crimes  as  $ crime ) {
                $ crime -> MostrarDadosCrime ();
            }
        }
        function  MostrarTodosCriminosos ( $ Criminosos ) {
            foreach ( $ Criminosos  as  $ Criminoso ) {
                $ Criminoso -> MostrarDados ();
            }
        }
        function  MostrarTodasVitimas ( $ Vitimas ) {
            foreach ( $ Vitimas  as  $ Vitima ) {
                $ Vitima -> MostrarDados ();
            }
        }
        function  MostrarTodasArmas ( $ Armas ) {
            foreach ( $ Armas  as  $ Arma ) {
                $ Arma -> MostrarDados ();
            }
        }

        / * Mostrar Tudo * /
        // MostrarTodosCriminosos ($ Criminosos);
        // MostrarTodasVitimas ($ Vitimas);
        // MostrarTodosCrimes ($ Crimes);
        // MostrarTodasArmas ($ Armas);

        / * $ Vitimas ['CPF'] -> * /
        / * CPF para teste: 02031254788 | 03265897455 * /
        // $ Vitimas ['02031254788'] -> MostrarDados ();
        $ Vitimas [ '02031254788' ] -> CrimesSofridos ( $ Crimes );

        / * $ Criminosos ['CPF'] -> * /
        / * CPF para teste: 06333334177 | 03214568749 * /
        // $ Criminosos ['03214568749'] -> MostrarDados ();
        // $ Criminosos ['06333334177'] -> CrimesCometidos ($ Crimes);

        / * $ Crimes ['ID'] -> * /
        / * ID para teste: 0 | 1 | 2 * /
        // $ Crimes ['0'] -> MostrarDadosCrime ();

        / * $ Armas ['ID'] -> * /
        / * ID para teste: 00001 | 00002 | 00003 * /
        // $ Armas ['00001'] -> MostrarDados ();

</ body >

</ html >
}

?>


